<?php

if($_POST){
    if($_POST['no'] == true)
        header('Location: ../account');
    else{
        $array = json_decode(file_get_contents('../../users.json'), TRUE);
        $founded = array_search($_COOKIE['user'], array_column($array, 'username'));

        unset($array[$founded]);
        file_put_contents('../../users.json', json_encode(array_values($array)));

        header('Location: ../');
    }
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
        <span class="mb-3">You Sure wanna leave? </span>
        <form method="post" action="">
            <div class="btn-group">
                <button class="btn btn-primary" name="no" value="true">No</button>
                <button class="btn btn-secondary" name="yes" value="true">Yes</button>
            </div>
        </form>
    </div>
</body>
</html>