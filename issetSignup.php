<?php
    if(isset($_POST['signup'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $month = $_POST["month"];
        $day = $_POST["day"];
        $year = $_POST["year"];

        $birth = $month . " " . $day . " " . " " . $year;

        setCookie('name',$name, time() + (86400 * 30), '/' );
        setCookie('email',$email, time() + (86400 * 30), '/' );
        setCookie('birthhday',$birth, time() + (86400 * 30), '/' );
        setCookie('password',$password, time() + (86400 * 30), '/' );
        header('location:index.php');
    }
?>