<?php
if($_COOKIE['login']){
    $array = json_decode(file_get_contents('../../users.json'),TRUE);
    $founded = array_search($_COOKIE['username'], array_column($array, 'username'));
//    foreach ($array[$founded]['tasks'] as $task) {
//        echo $task.'<br>';
//    }
}
else
    header('Location: ../../index.php');
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
        <?php
            foreach ($array[$founded]['tasks'] as $task){
                $d = $task['done']?'checked':' ';
                echo '
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" '. $d .'>
                        <label class="form-check-label" for="flexCheckDefault">
                            '.$task['text'].'
                        </label>
                    </div>
                ';
            }
        ?>
    </div>

</body>
</html>
