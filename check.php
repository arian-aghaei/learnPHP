<?php
$array = json_decode(file_get_contents('users.json'),TRUE);

$founded = array_search($_POST['username'], array_column($array, 'username'));
if($founded === 0)
    $founded = 'z';

$danger = false;

if($founded){
    if($founded === 'z')
        $founded = 0;
    if($array[$founded]['password'] === $_POST['password']){
        setcookie('notValid',0);
        setcookie('danger',0);
        setcookie('login',1, time() + 10 * 60);
        setcookie('user', $array[$founded]['username']);
        header('Location: ./account');
    }
    else{
        setcookie('danger',1);
        header('Location: .');
    }
}
else{
    setcookie('notValid', 1);
//    setcookie('danger',1);
    header('Location: .');
}