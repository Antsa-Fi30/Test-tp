<?php $title = 'Books'; ?>
<?= view('templates/header', ['title' => 'Books']) ?>

<?= var_dump($book) ?>

<div class="d-flex flex-column justify-center align-items-center">
    <h1>Edit Book</h1>

    <form class="w-50" action="/books/update/<?= $book['id'] ?>" method="post">
        <!-- Titre du livres -->
        <div class="form-group my-2">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?= esc($book['title']) ?>" required>
        </div>

        <!-- Auteurs existantes -->
        <div class="form-group my-2">
            <label for="authors_id">Author</label>
            <select name="authors_id" class="form-control" required>
                <option disabled>Select Author</option>
                <?php foreach ($authors as $author): ?>
                    <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Date -->
        <div class="form-group my-2">
            <label for="stocked_date">Stocked Date</label>
            <input type="date" name="stocked_date" class="form-control" value="<?= $book['stocked_date'] ?>" required>
        </div>

        <button type="submit" class="btn btn-success mt-4">Edit Book</button>
    </form>

</div>

<?= view('templates/footer') ?>