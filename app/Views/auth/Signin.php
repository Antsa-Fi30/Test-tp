<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Create an account for access to Library</title>


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
            <form class="form-signin" action="/auth/save" method="post">
                <div class="text-center mb-4">
                    <h1 class="text-success">Register to Library</h1>
                </div>
                <select name="usertype" class="form-select my-3" aria-label="Default select example">
                    <option selected disabled>Select user type</option>
                    <option value="admin">Administrator</option>
                    <option value="cli">Client</option>
                </select>

                <div class="form-label-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                    <label for="username">Username</label>
                </div>
                <div class="form-label-group">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>

                <div class="form-label-group">
                    <input type="cpassword" name="cpassword" id="cpassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Confirm password</label>
                </div>


                <button class="btn btn-lg btn-success btn-block" type="submit">Save</button>
                <div class="text-white my-3">Already have an account? <a href="/login">Log</a> in.</div>
            </form>
        </div>
    </div>
</body>

</html>