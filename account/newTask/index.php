<?php
require_once '../../config/isLogin.php';

$array = json_decode(file_get_contents('../../users.json'), TRUE);
$founded = array_search($_COOKIE['user'], array_column($array, 'username'));

if($_POST){
    $var = [
        "text" => $_POST['task'],
        "done" => false
    ];
    array_push($array[$founded]['tasks'], $var);
    file_put_contents('../../users.json', json_encode($array));
    echo '
        <div class="alert alert-success">
            new item added successfully!
        </div>
    ';
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
    <div class="container">
        <form method="post" action="">
            <div class="col-6 mb-3">
                <label class="form-label" for="task">Add your new Task: </label>
                <input type="text" name="task" class="form-control" placeholder="type your task here..">
            </div>
            <div>
                <button class="btn btn-primary " type="submit">Add</button>
            </div>
        </form>
        <a class="btn btn-primary" href="../account">Back</a>
    </div>
</body>
</html>
