<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/styles.css">
    <link rel="stylesheet" href="/bootstrap/css/sidebar.css">
    <title><?= esc($title) ?></title>
</head>

<body class="containerpattern1 text-white d-flex flex-col">
    <!-- Current route -->
    <?php
    $uri = service('uri');
    ?>
    <!-- Sidebar -->
    <header class="glasssidebar my-2 mx-2">
        <h2 class="labelhollow">
            E-Library
        </h2>
        <p class="labelhollow">
            You're a : <?= session()->get('userType') ?>
        </p>
        <hr>
        <div class="d-flex flex-column gap-3">
            <a class="linkNavigator <?= ($uri->getSegment(1) == 'books' ? 'activate' : '') ?>" href="/books">Books</a>
            <a class="linkNavigator <?= ($uri->getSegment(1) == 'author' ? 'activate' : '') ?>" href="/author">Authors</a>
            <a class="linkNavigator <?= ($uri->getSegment(1) == 'cart' ? 'activate' : '') ?>" href="/cart">Cart</a>
            <a class="linkNavigator" href="/auth/logout">Logout</a>
        </div>

    </header>
    <!-- Main Content -->
    <main class="glass glassmain h-100 w-100 my-2">