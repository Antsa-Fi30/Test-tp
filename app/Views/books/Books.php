<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid p-4">
        <h1 class="text-xl mb-4">Users</h1>

        <button class="btn btn-outline-primary mb-3">Create</button>

        <table class="table text-center justify-center items-center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $row): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['password'] ?></td>
                        <td class="flex flex-row gap-3">
                            <button class="btn btn-outline-warning">Modifier</button>
                            <button class="btn btn-outline-danger">Supprimer</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</body>

</html>