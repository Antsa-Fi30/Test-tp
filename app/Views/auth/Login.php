<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Log to Library</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/styles.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/floating-label.css" rel="stylesheet">
</head>

<body class="containerpattern">
    <div class="cards">
        <div class="cards2">
            <form action="<?php echo base_url('loguser') ?>" class="form-signin" method="post">
                <div class="text-center mb-4">
                    <h1 class="text-primary">Log in to Library</h1>
                </div>

                <select name="usertype" class="form-select my-3" aria-label="Default select example">
                    <option selected disabled>Select user type</option>
                    <option value="admin">Administrator</option>
                    <option value="clis">Client</option>
                </select>

                <div class="form-label-group">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>
                <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Log in</button>
                <div class="text-white my-3">Don't have any library account? Register <a href="/signin">here</a> .</div>
            </form>
        </div>
    </div>

</body>

</html>