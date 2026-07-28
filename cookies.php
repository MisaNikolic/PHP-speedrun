<?php

    setcookie("first_cookie", "value", time() + (60 * 60 * 24), "/");
    setcookie("second_cookie", "HWWOP 98935 tupgui ", time() + (60 * 60 * 24), "/");
    setcookie("third_cookie", "OIGK*&@(IGIA", time() + (60 * 60 * 24), "/");

    foreach($_COOKIE as $key => $value) {
        echo"{$key} = {$value} <br>";
    }

    echo $_COOKIE["first_cookie"] . "<br>";
    echo $_COOKIE["second_cookie"] . "<br>";
    echo $_COOKIE["third_cookie"] . "<br>";
?>