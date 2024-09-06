<?php $title = 'items'; ?>
<?= view('templates/header', ['title' => 'Borrows']) ?>
<div>

    <div class="container">

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <?php if (session()->get('user_type') === 'admin'): ?>
                        <th scope="col">id</th>
                        <th scope="col">Client</th>
                    <?php endif; ?>
                    <th scope="col">Book</th>
                    <th scope="col">Borrowed at</th>
                    <th scope="col">return at</th>
                    <?php if (session()->get('user_type') === 'client'): ?>
                        <th scope="col">Actions</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <?php if (session()->get('user_type') === 'admin'): ?>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['user_name'] ?></td>
                        <?php endif; ?>
                        <td><?= $item['book_title'] ?></td>
                        <td><?= $item['borrowed_at'] ?></td>
                        <td><?= $item['return_at'] ?></td>
                        <?php if (session()->get('user_type') === 'client'): ?>
                            <td class="d-flex flex-row gap-3 text-center justify-center">
                                <a href="/editconfirm/<?= $item['id'] ?>" class="btn btn-outline-warning" type="button">Edit</a>
                                <a href="/cancelborrow/<?= $item['id'] ?>" class="btn btn-outline-danger" type="button">Delete</a>
                            </td>
                        <?php endif; ?>

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>


    </div>
</div>

<?= view('templates/footer') ?>