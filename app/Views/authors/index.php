<?php $title = 'authors'; ?>
<?= view('templates/header', ['title' => 'authors']) ?>

<div>
    <div class="container mb-2">
        <?= (session()->get('user_type') === 'client') ? '' : '<a href="/authors/create" class="btn btn-primary">
            Add authors
        </a>' ?>
    </div>

    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <?php if (session()->get('user_type') === 'admin'): ?>
                        <th scope="col">Actions</th>
                    <?php endif; ?>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author): ?>
                    <tr>
                        <td><?= $author['id'] ?></td>
                        <td><?= $author['name'] ?></td>
                        <?php if (session()->get('user_type') === 'admin'): ?>
                            <td class="d-flex flex-row gap-3 text-center justify-center">
                                <a href="/authors/edit/<?= $author['id'] ?>" class="btn btn-outline-warning" type="button">Edit</a>
                                <a href="/authors/delete/<?= $author['id'] ?>" class="btn btn-outline-danger" type="button">Delete</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= view('templates/footer') ?>