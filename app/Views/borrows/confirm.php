<?= view('templates/header', ['title' => 'Borrows']) ?>
<div class="container">
    <form action="/Addborrow/<?= $book['id'] ?>" method="post">
        <div class="form-group my-2">
            <label for="return_at">Return this at :</label>
            <input type="date" name="return_at" class="form-control" required>
        </div>
        <button class="btn-primary">Confirm</button>
    </form>

</div>
<?= view('templates/footer') ?>