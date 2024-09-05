<?php $title = 'Books'; ?>
<?= view('templates/header', ['title' => 'Books']) ?>


<div>
    <div class="container mb-2">
        <?= (session()->get('user_type') === 'client') ? '' : '<a href="/books/create" class="btn btn-primary">
            Add Book
        </a>' ?>
    </div>
    <div class="container my-4 d-flex flex-row gap-2 align-items-center">
        <input placeholder="type it" class="input" name="text" type="text" />
        <button class="button">
            <span class="span">🔎</span>
        </button>
    </div>
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Stocked Date</th>
                    <th scope="col">Author</th>
                    <th scope="col">Disponibility</th>
                    <?php if (session()->get('user_type') === 'admin'): ?>
                        <th scope="col">Actions</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $book['id'] ?></td>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['stocked_date'] ?></td>
                        <td><?= $book['author_name'] ?></td>
                        <td><?= ($book['dispo'] == 1) ? 'Disponible' : 'Not disponible' ?></td>
                        <?php if (session()->get('user_type') === 'admin'): ?>
                            <td class="d-flex flex-row gap-3 text-center justify-center">
                                <a href="/books/edit/<?= $book['id'] ?>" class="btn btn-outline-warning" type="button">Edit</a>
                                <a href="/books/delete/<?= $book['id'] ?>" class="btn btn-outline-danger" type="button">Delete</a>
                            </td>
                        <?php endif; ?>
                        <?php if (session()->get('user_type') === 'client'): ?>

                            <td class="d-flex flex-row gap-3 text-center justify-center">
                                <a href="/books/delete/<?= $book['id'] ?>" class="btn btn-outline-primary <?= ($book['dispo'] == 1) ? '' : 'disabled' ?>" type="button">Lend</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= view('templates/footer') ?>