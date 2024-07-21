<?php
if($_POST){
    header('Location: ./signup');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">
    <form method="post" action="./check.php">
        <?php
        setcookie('login', 0);
        setcookie('user', '');
        if ($_COOKIE['notValid'] == 1) {
            setcookie('notValid', 0);
            echo '<div class="col-6 mb-3 alert alert-danger">
            <label class="form-label" for="username">Username is wrong. Try again: </label>
            <input required name="username" type="text" class="form-control" placeholder="Enter your username">
        </div>';
        } else {
            echo '<div class="col-6 mb-3">
            <label class="form-label" for="username">Username: </label>
            <input required name="username" type="text" class="form-control" placeholder="Enter your username">
        </div>';
        }
        if ($_COOKIE['danger'] == 1) {
            setcookie('danger', 0);
            echo '<div class="col-6 mb-3 alert alert-danger">
            <label class="form-label" for="password">Password is wrong. Try again: </label>
            <input required name="password" type="text" class="form-control" placeholder="Enter your password">
        </div>';
        } else {
            echo '<div class="col-6 mb-3">
            <label class="form-label" for="password">Password: </label>
            <input required name="password" type="text" class="form-control" placeholder="Enter your password">
        </div>';
        }
        ?>
        <div>
            <button class="btn btn-primary me-5" type="submit">Login</button>
            <label for="signup">Don't have an account?</label>
            <a href="./signup" class="btn btn-success">sign up</a>
        </div>
    </form>
</div>

</body>
</html>
