<?= view('templates/header', ['title' => 'Borrows']) ?>
<div class="container">
    <form class="w-50" action="/editupdate/<?= $borrow['id'] ?>" method="post">
        <div class="form-group my-2">
            <label for="return_at">Return this at :</label>
            <input type="date" name="return_at" class="form-control" value="<?= $borrow['return_at'] ?>" required>
        </div>
        <button class="btn btn-primary">Confirm</button>
    </form>

</div>
<?= view('templates/footer') ?>