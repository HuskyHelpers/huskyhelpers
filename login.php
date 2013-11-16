<?php
    session_start();
    require "inc/settings.inc.php";
    if(isset($_SESSION['authtoken'])) {
        error_log($SETTINGS['authURL']."fetchauth.php?token=".$_SESSION['authtoken']);
        //die("durrruruurruurr");
        $user = file_get_contents($SETTINGS['authURL']."fetchauth.php?token=".$_SESSION['authtoken']);
        if($user != "") {
            $_SESSION['user'] = $user;
            unset($_SESSION['authtoken']);
            if(isset($_SESSION['dest'])) {
                header("Location: ".$_SESSION['dest']);
                unset($_SESSION['dest']);
            } else {
                header("Location: /");
            }
        } else {
            die("Empty username!");
        }
    } elseif(!isset($_SESSION['user'])) {
        $_SESSION['authtoken'] = uniqid();
        $_SESSION['dest'] = $_SERVER['HTTP_REFERER'];
        header("Location: ".$SETTINGS['authURL']."auth/?token=".urlencode($_SESSION['authtoken'])."&dest=".urlencode($_SERVER['HTTP_REFERER']));
    } else {
        die("You're already logged in as ".$_SESSION['user'].", silly!");
    }
