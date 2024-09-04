<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/styles.css">
    <title>Welcome to Library</title>
</head>

<body class="containerpattern text-white px-5">
    <div class="container my-2">
        <a href="/auth/logout">
            <button class="BtnLogout">
                <div class="sign">
                    <svg viewBox="0 0 512 512">
                        <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                    </svg>
                </div>

                <div class="text">Logout</div>
            </button>
        </a>
    </div>
    <main role="main">
        <div class="container-fluid w-full py-4 px-4 mt-4 glass">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3 my-4">Hello, <span class="labelhollow"><?php echo (session()->get('username')); ?></span></h1>
                    <?php if (session()->get('userType') === 'admin'): ?>
                        <p class="labelhollow">You're an admin.</p>
                    <?php else: ?>
                        <p>Look down here how to use Library.</p>
                    <?php endif ?>
                </div>

            </div>

            <div class="container pt-2">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="labelhollow">Authors</h2>
                        <p>One author can make one hundred books.Take a look at them and their works by clicking the button bellow</p>
                        <a href="/authors" class="button10">View authors >></a>
                    </div>
                    <div class="col-md-4">
                        <h2 class="labelhollow">Books</h2>
                        <p>The books are repartitioned by categories like fiction, non-fiction or something else. Check them out! </p>
                        <a href="/books" class="button10">View all books >></a>
                    </div>
                    <div class="col-md-4">
                        <h2 class="labelhollow">Your Cart</h2>
                        <p>Here you'll find out how many book and what kind of book(s) have you borrowed from the Library</p>
                        <a href="/cart" class="button10">View cart >></a>
                    </div>
                </div>

                <hr>

            </div> <!-- /container -->
        </div>

    </main>

</body>

</html>