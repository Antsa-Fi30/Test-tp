<?= view('templates/header', ['title' => 'Authors']) ?>

<div class="d-flex flex-column justify-center align-items-center">
    <h1>Add New Book</h1>

    <form class="w-50" action="/authors/create/save" method="post">
        <div class="form-group my-2">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-4">Add author</button>
    </form>

</div>

<?= view('templates/footer') ?>