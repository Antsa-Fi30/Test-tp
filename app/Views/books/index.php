<?php $title = 'Books'; ?>
<?= view('templates/header', ['title' => 'Books']) ?>

<div>
    <div class="container mb-2">
        <a href="/books/create" class="btn btn-primary">
            Add Book
        </a>
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
                    <th scope="col">Author</th>
                    <th scope="col">Stocked Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $book['id'] ?></td>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['authors_id'] ?></td>
                        <td><?= $book['stocked_date'] ?></td>
                        <td class="d-flex flex-row gap-3 text-center justify-center">
                            <a href="/books/edit/<?= $book['id'] ?>" class="btn btn-outline-warning" type="button">Edit</a>
                            <a href="/books/delete/<?= $book['id'] ?>" class="btn btn-outline-danger" type="button">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= view('templates/footer') ?>