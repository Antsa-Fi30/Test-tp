<?php $title = 'Books'; ?>
<?= view('templates/header', ['title' => 'Books']) ?>


<div>
    <div class="container mb-2">
        <?= (session()->get('user_type') === 'client') ? '' : '<a href="/books/create" class="btn btn-primary">
            Add Book
        </a>' ?>
    </div>
    <form method="get" action="/books/search" class="container my-4 d-flex flex-row gap-2 align-items-center">
        <input placeholder="Search books here" class="input" name="bookSearch" type="text" value="<?= isset($bookSearch) ? $bookSearch : '' ?>" />
        <button class="button">
            <span class="span">🔎</span>
        </button>
    </form>
    <div class="container">
        <!-- IF the user is admin: -->
        <?php if (session()->get('user_type') === "admin"): ?>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Stocked Date</th>
                        <th scope="col">Author</th>
                        <th scope="col">Disponibility</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book): ?>
                        <tr>
                            <td><?= $book['id'] ?></td>
                            <td><?= $book['title'] ?></td>
                            <td><?= $book['stocked_date'] ?></td>
                            <td><?= $book['author_name'] ?></td>
                            <td><?= ($book['dispo'] == 1) ? 'Disponible' : 'Not disponible' ?></td>
                            <?php if (session()->get('user_type') === 'admin'): ?>
                                <td class="d-flex flex-row gap-3 text-center justify-center">
                                    <a href="/books/edit/<?= $book['id'] ?>" class="btn btn-outline-warning" type="button">Edit</a>
                                    <a href="/books/delete/<?= $book['id'] ?>" class="btn btn-outline-danger" type="button">Delete</a>
                                </td>
                            <?php endif; ?>
                            <?php if (session()->get('user_type') === 'client'): ?>

                                <td class="d-flex flex-row gap-3 text-center justify-center">
                                    <a href="/books/lend/<?= $book['id'] ?>" class="btn btn-outline-primary <?= ($book['dispo'] == 1) ? '' : 'disabled' ?>" type="button">Lend</a>
                                    <a href="/books/details/<?= $book['id'] ?>" class="btn btn-outline-secondary" type="button">Details</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <!-- IF the user is a client: -->
        <?php endif; ?>
        <div class="d-flex flex-row flex-wrap gap-5">
            <?php foreach ($books as $book): ?>
                <div class="package">
                    <div class="package2">
                        <img src="/assets/images.png" alt="" class="img-book mb-3">

                        <div class="d-flex flex-column text-center justify-center p-3">
                            <div class="d-flex flex-column gap-1 mt-3">
                                <h3 class="labelhollow"><?= $book['title'] ?></h3>
                                <p>by: <?= $book['author_name'] ?></p>
                                <p><?= $book['stocked_date'] ?></p>
                                <p><?= ($book['dispo'] == 1) ? '<span class="text-dispo">Disponible</span>' : '<span class="text-notdispo">Not disponible</span>' ?></p>
                            </div>
                            <p>description</p>
                            <?php if ($book['dispo'] == 1): ?>
                                <a href="/confirmBorrow/<?= $book['id'] ?>" class="btnlend" type="button">Lend</a>
                            <?php elseif ($book['dispo'] == 0): ?>
                                <a class="btnlendoff" type="button">Lend</a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<?= view('templates/footer') ?>