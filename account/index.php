<?php
//global $array;
//global $founded;
if($_COOKIE['login']){
    echo "Wellcome to your account ".$_COOKIE['user'];

}
else
    header('Location: ../index.php');

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
        <div class="col-6 mt-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a class="text-decoration-none" href="">add a task</a></li>
                <li class="list-group-item"><a class="text-decoration-none" href="account/tasks">visit tasks</a></li>
                <li class="list-group-item"><a class="text-decoration-none" href="">log out</a></li>
                <li class="list-group-item"><a class="text-decoration-none" href="">delete account</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
