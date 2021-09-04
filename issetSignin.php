<?php
    if(isset($_POST['signin'])) {
        $loginState = true;
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($_COOKIE['email'] === $email && $_COOKIE['password'] === $password) {
            // setCookie('loginState', true, time() + (86400 * 30), '/' );
            $_SESSION['userEmail'] = $email;
            $_SESSION['loginState'] = $loginState;
            $_SESSION['username'] = $_COOKIE['name'];
            header('location:home.php');
        } else {
            header('location:index.php');
        }       
    }

    if(isset($_POST['logout'])) {
        // setCookie('loginState', '', time() - (86400 * 30), '/' );
        session_save_path(dirname('__FILE__')."/session");
        session_unset();
        session_destroy();
        header('location:index.php');
    }
?>