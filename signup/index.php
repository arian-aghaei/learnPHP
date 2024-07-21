<?php
if ($_POST) {
    $array = json_decode(file_get_contents('../users.json'), TRUE);
    $var = [
        "name" => $_POST['name'],
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "tasks" => []
    ];
    array_push($array, $var);
    file_put_contents('../users.json', json_encode($array));
    header('Location: ../');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form method="post" action="">
        <div class="col-6 mb-3">
            <label class="form-label" for="name">Name: </label>
            <input required name="name" type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="col-6 mb-3">
            <label class="form-label" for="username">Username: </label>
            <input required name="username" type="text" class="form-control" placeholder="Enter your username">
        </div>
        <div class="col-6 mb-3">
            <label class="form-label" for="password">Password: </label>
            <input required name="password" type="text" class="form-control" placeholder="Enter your password">
        </div>
        <div>
            <button class="btn btn-primary " type="submit">Sign Up</button>
        </div>
    </form>
</div>
</body>
</html>
