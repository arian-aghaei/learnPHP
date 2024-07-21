<?php

if(!$_COOKIE['login']) {
    header('Location: ..');
    die;
}
