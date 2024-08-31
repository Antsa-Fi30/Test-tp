<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD User</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid p-4">
        <h1 class="text-xl mb-4">Users</h1>

        <button class="btn btn-outline-primary mb-3">Create</button>

        <form action="">
            <div class="container">
                <div class="form-control mx-2 my-2">
                    <label for="email">Email</label>
                    <input class="form-input" type="email" name="email" id="email">
                </div>
                <div class="form-control my-2">
                    <input type="password" name="password" id="password">
                </div>
                <div class="mt-4 w-full">
                    <button class="btn btn-success" type="submit"></button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>