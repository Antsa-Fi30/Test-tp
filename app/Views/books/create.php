<?php $title = 'Books'; ?>
<?= view('templates/header', ['title' => 'Books']) ?>


<div class="d-flex flex-column justify-center align-items-center">
    <h1>Add New Book here</h1>

    <form class="w-50" action="/books/create/save" method="post">

        <div class="form-group my-2">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <!-- Les auteurs existantes -->
        <div class="form-group my-2">
            <label for="authors_id">Author</label>
            <select name="authors_id" class="form-control" required>
                <option disabled>Select Author</option>
                <?php foreach ($authors as $author): ?>
                    <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group my-2">
            <label for="stocked_date">Stocked Date</label>
            <input type="date" name="stocked_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-4">Add Book</button>
    </form>

</div>

<?= view('templates/footer') ?>