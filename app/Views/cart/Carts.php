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
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>

<?= view('templates/footer') ?>