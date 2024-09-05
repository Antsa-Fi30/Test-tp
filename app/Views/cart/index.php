<?php $title = 'Cart'; ?>
<?= view('templates/header', ['title' => 'Cart']) ?>

<div class="container">
    <h1 class="mb-4">Here you find what books are not disponible or borrowed</h1>

    <div class="my-4 d-flex flex-row gap-2 align-items-center">
        <input placeholder="type it" class="input" name="text" type="text" />
        <button class="button">
            <span class="span">🔎</span>
        </button>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Book</th>
                <th scope="col">Client</th>
                <th scope="col">Date of Borrowing</th>
                <th scope="col">Date of returnings</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carts as $cart): ?>
                <tr>
                    <th><?= $cart['id'] ?></th>
                    <td><?= $cart['books_id'] ?></td>
                    <td><?= $cart['client'] ?></td>
                    <td><?= $cart['borrowed_at'] ?></td>
                    <td><?= $cart['return_at'] ?></td>
                    <td> <a href="/cart/delete/<?= $cart['id'] ?>" class="btn btn-outline-danger" type="button">Delete</a> </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= view('templates/footer') ?>