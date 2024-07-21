<?php
require_once '../../config/isLogin.php';

$array = json_decode(file_get_contents('../../users.json'));
$founded = array_search($_COOKIE['user'], array_column($array, 'username'));

if($_POST){
    foreach ($array[$founded]->tasks as $item){
        $item->done = (bool)$_POST[$item->text];
    }


    file_put_contents('../../users.json', json_encode($array));

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
        <?php
        foreach ($array[$founded]->tasks as $task) {
            $d = $task->done ? 'checked' : ' ';
            echo '
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="'. $task->text .'" ' . $d . '>
                        <label class="form-check-label" for="flexCheckDefault">
                            ' . $task->text . '
                        </label>
                    </div>
                ';
        }
        ?>
        <div class="mt-3">
            <button class="btn btn-primary " type="submit">Submit</button>
        </div>
    </form>
    <a class="btn btn-primary" href="../account">Back</a>
</div>

</body>
</html>
