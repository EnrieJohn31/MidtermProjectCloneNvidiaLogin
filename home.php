<?php
session_save_path(dirname('__FILE__') . "/session");
session_start();
require './issetSignin.php';
if (!(isset($_SESSION['loginState']))) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html class="html-page no-js " lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

        .nav-link:hover {
            color: yellowgreen !important;
        }

        .border-3 {
            border-width: 1.5px !important;
        }
        .me-5{
            margin-right: 150px !important;
        }
        .me-4{
            margin-right: 205px !important;
        }
        .btn-success{
           background-color: yellowgreen !important;
           border: 0;
        }
    </style>
</head>

<body class="">
    <div class="w1-bar py-1 w1-border">
        <img class="mt-n1" src="..//images//hLogo.png">
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="mt-n1 navbar-brand" href="#">ACCOUNT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PREFERENCES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">REDEEM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GEFORCE NOW</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container d-flex flex-column justify-content align-items-center min-vh-100 w-100">

        <div class="text-center mt-5">
            <h1 class="h3 fw-light" style="color:yellowgreen">Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
            <p class="mt-3">Manage your account profile, privacy preferences, and security to customize your NVIDIA experience.</p>
        </div>

        <div class="card w-75 border border-secondary p-4">
            <h2 class="fw-light fs-4">Account</h2>
            <div>
                <p>Change your personal info and linked accounts</p>
                <div style="display: flex; flex-wrap: wrap;">
                    <label class="me-5">Display name</label>
                    <p class="fw-bold"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                </div>
                <hr>
                <div style="display: flex; flex-wrap: wrap;">
                    <label class="me-4">Email</label>
                    <p class="fw-bold"><?php echo htmlspecialchars($_SESSION["userEmail"]); ?></p>
                </div>
                <hr>
                <div style="margin-top: 30px; display: flex; flex-direction: row-reverse;">
                <button type="submit" name="signin" class="btn btn-success rounded-0 text-uppercase">Edit your account</button>
                <button type="button" class="me-3 border-0 bg-white text-dark nav-link">Help</button>
                </div>
            </div>
        </div>

        <div class="card w-75 border border-secondary p-4 mt-3">
            <h2 class="fw-light fs-4">Security</h2>
            <div>
                <p>Change your password, see devices using your account, or change other security settings</p>
            
                <div style="margin-top: 30px; display: flex; flex-direction: row-reverse;">
                <button type="submit" name="signin" class="btn btn-success rounded-0 text-uppercase">Update</button>
                <form action="home.php" method="POST">
                    <button type="submit" name="logout" class="me-3 border-0 bg-white text-dark nav-link">Logout</button>
                </form>
                </div>
            </div>
        </div>

        <div class="card w-75 border border-secondary p-4 mt-3">
            <h2 class="fw-light fs-4">GeForce NOW</h2>
            <div>
                <p>Legendary cloud gaming, available to all.</p>
            
                <div style="margin-top: 30px; display: flex; flex-direction: row-reverse;">
                <button type="submit" name="signin" class="btn btn-success rounded-0 text-uppercase">Join Now</button>
                <button type="button" class="me-3 border-0 bg-white text-dark nav-link">Learn more</button>
                </div>
            </div>
        </div>

        <div class="card w-75 border border-secondary p-4 mt-3">
            <h2 class="fw-light fs-4">Redeem a gift card or promo code</h2>
            <div>
                <p>Enter a code to redeem games, in-game items, and subscriptions.</p>
            
                <div style="margin-top: 30px; display: flex; flex-direction: row-reverse;">
                <button type="submit" name="signin" class="btn btn-success rounded-0 text-uppercase">Redeem</button>
                <button type="button" class="me-3 border-0 bg-white text-dark nav-link">View redeemed games</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="container mt-5">
        <div class="d-flex flex-row justify-content-between align-items-start mb-5">
            <div class="">
            <img class="mt-n1" src="..//images//bLogo.png">
            <span class="global-footer__region__label text-secondary fw-bold ms-3"> PH - Philippines </span>
                <!-- <select name="" id="" class="bg-transparent text-secondary border-0">
                    <option value="eng">English (US)</option>
                </select> -->
            </div>
            <div class="d-flex flex-column align-items-end">
                <ul class="text-capitalize text-secondary d-flex flex-row align-items-end m-0">
                    <li style="list-style: none;" class="me-2">
                        <a href="" class="text-decoration-none text-secondary">Privacy Policy</a>
                    </li>| 
                    <li style="list-style: none;" class="me-2">
                        <a href="" class="text-decoration-none text-secondary">Manage My Privacy</a>
                    </li>|
                    <li style="list-style: none;" class="mx-2">
                        <a href="" class="text-decoration-none text-secondary">Legal</a>
                    </li>|
                    <li style="list-style: none;" class="mx-2">
                        <a href="" class="text-decoration-none text-secondary">Accessibility</a>
                    </li>|
                    <li style="list-style: none;" class="ms-2">
                        <a href="" class="text-decoration-none text-secondary">Product Security</a>
                    </li>|
                    <li style="list-style: none;" class="ms-2">
                        <a href="" class="text-decoration-none text-secondary">Contact</a>
                    </li>
                </ul>
                <span class="text-secondary" style="font-size: 12px;">Copyright &copy; 2021 NVIDIA Corporation</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>