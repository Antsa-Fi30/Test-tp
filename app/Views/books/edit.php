<?php $title = 'Books'; ?>
<?= view('templates/header', ['title' => 'Books']) ?>

<div class="d-flex flex-column justify-center align-items-center">
    <h1>Add New Book</h1>

    <form class="w-50" action="/books/update/<?= $book['id'] ?>" method="post">
        <div class="form-group my-2">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?= $book['title'] ?>" required>
        </div>
        <div class="form-group my-2">
            <label for="authors_id">Author</label>
            <input type="number" name="authors_id" class="form-control" value="<?= $book['authors_id'] ?>" required>
        </div>
        <div class="form-group my-2">
            <label for="stocked_date">Stocked Date</label>
            <input type="date" name="stocked_date" class="form-control" value="<?= $book['stocked_date'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success mt-4">Add Book</button>
    </form>

</div>

<?= view('templates/footer') ?>