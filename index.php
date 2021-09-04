<?php
    session_save_path(dirname('__FILE__') . '/session');
    session_start();
    require './issetSignin.php';
    if (isset($_SESSION['loginState']) && $_SESSION['loginState'] == 1) {
        header('location:home.php');
    }
?>

<!DOCTYPE html>
<html class="html-page no-js theme-dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        html {
            background-color: #fff;
        }

        .body-text {
            font: normal 16px/24px DINPro-Regular, Sans-Serif, Trebuchet, Helvetica, Arial, sans-serif;
        }

        .text-center {
            text-align: center;
        }

        .theme-dark {
            background-color: #252525;
        }

        .dispbar {
            background-color: #000000;
        }

        .mt-n1 {
            padding-left: 50px;
        }

        .button1 {
            background-color: #76b900;
            border-width: 0 !important;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font: normal 14px/1 DINPro-Regular, Sans-Serif, Trebuchet, Helvetica, Arial, sans-serif;
            padding: 8px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
        }

        .button1:hover {
            background-color: #009900
        }

        .button1:active {
            background-color: #76b900;
        }
        .btn-success{
           background-color: yellowgreen !important;
           border: 0;
        }
    </style>
</head>

<body class="theme-dark">
    <div class="w1-bar py-1 w1-border theme-dark">
        <img class="mt-n1" src="..//images//Logo.png">
    </div>
    <div class="w1-bar py-1 w1-border w1-black dispbar">
        <h1 class="text-light mt-n1">LOGIN</h1>
    </div>

    <div class="container w-25">
        <form action="index.php" method="POST">
            <div class="form-group">
                <h6 class="text-light text-center">Sign in to the client</h6> <br>
                <h6 class="text-light text-center">NVIDIA</h6>
            </div>
            <div class="form-floating mb-3">
                <input type="email"
                    class="form-control rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-2 text-white"
                    id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput" class="text-white">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password"
                    class="form-control rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-2 text-white"
                    id="floatingInput" placeholder="name@example.com" name="password">
                <label for="floatingInput" class="t  ext-white">Password</label>
            </div>
            <div class="d-flex flex-column align-items-end mt-5">
                <button type="submit" name="signin" class="btn btn-success rounded-0 text-uppercase">LOG IN</button>
                <a href="#" class="text-decoration-none text-success mt-3 fs-6">
                    Sign in with security device
                </a>
                <div class="mt-3">
                    <span class="text-white">Don't have an account?</span>
                    <a href="./signup.php" class="text-decoration-none text-success">Create account</a>
                </div>
                <a href="#" class="text-decoration-none text-success mt-5 fs-6">
                    Need help logging in?
                </a>
            </div>
        </form>
    </div>
    <footer class="container mt-5">
        <div class="d-flex flex-row justify-content-between align-items-start">
            <div class="">
                <select name="" id="" class="bg-transparent text-secondary border-0">
                    <option value="eng">English (US)</option>
                </select>
            </div>
            <div class="d-flex flex-column align-items-end">
                <ul class="text-capitalize text-secondary d-flex flex-row align-items-end m-0">
                    <li style="list-style: none;" class="me-2">
                        <a href="" class="text-decoration-none text-secondary">privacy policy</a>
                    </li>|
                    <li style="list-style: none;" class="mx-2">
                        <a href="" class="text-decoration-none text-secondary">legal info</a>
                    </li>|
                    <li style="list-style: none;" class="ms-2">
                        <a href="" class="text-decoration-none text-secondary">contact us</a>
                    </li>
                </ul>
                <span class="text-secondary" style="font-size: 12px;">Copyright &copy; 2021 NVIDIA Corporation</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>