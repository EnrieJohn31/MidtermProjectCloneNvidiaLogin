<?php
    session_save_path(dirname('__FILE__').'/session');
    session_start();
    require './issetSignup.php';
    if(isset($_SESSION['loginState'])) {
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
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
    </style>
</head>

<body class="theme-dark">
    <div class="w1-bar py-1 w1-border">
        <img class="mt-n1" src="..//images//Logo.png">
    </div>
    <div class="w3-bar py-3 w3-border w3-black dispbar">
        <h1 class="text-light mt-n1">CREATE AN ACCOUNT</h1>
    </div>

    <div class="container w-25">
        <form action="signup.php" class="mt-3" method="POST">
            <div class="form-floating mb-3 ps-0">
                <input type="email"
                    class="form-control rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-1 ps-0 text-white"
                    id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput" class="text-secondary ps-0">Email address</label>
            </div>
            <div class="form-floating mb-3 ps-0">
                <input type="text"
                    class="form-control rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-1 ps-0 text-white"
                    id="floatingInput" placeholder="name@example.com" name="username">
                <label for="floatingInput" class="text-secondary ps-0">Display name</label>
            </div>
            <div class="">
                <span class="text-secondary">Date of birth</span>
                <div class="d-flex flex-row">
                    <div class="form-floating me-3">
                        <select
                            class="form-select rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-1 text-secondary"
                            id="month" aria-label="Floating label select example" name="month">
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                        </select>
                        <label for="month" class="text-secondary"></label>
                    </div>
                    <div class="form-floating me-3">
                        <select
                            class="form-select rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-1 text-secondary"
                            id="day" aria-label="Floating label select example" name="day">
                            <option value="">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="day" class="text-secondary"></label>
                    </div>
                    <div class="form-floating me-3">
                        <select
                            class="form-select rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-1 text-secondary"
                            id="year" aria-label="Floating label select example" name="year">
                            <option value="">Year</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="year" class="text-secondary"></label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3 ps-0">
                <input type="password"
                    class="form-control rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-1 ps-0 text-white"
                    id="floatingInput" placeholder="name@example.com" name="password">
                <label for="password" class="text-secondary ps-0">Password</label>
            </div>
            <div class="form-floating mb-3 ps-0">
                <input type="password"
                    class="form-control rounded-0 bg-transparent border-top-0 border-end-0 border-start-0 border-1 ps-0 text-white"
                    id="floatingInput" placeholder="name@example.com" name="rptPassword">
                <label for="password" class="text-secondary ps-0">Password confirm</label>
            </div>
            <div class="d-flex flex-row justify-content-end mt-4">
                <a href="" class="text-decoration-none text-success mt-2">Sign in with security device</a>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label text-secondary" for="flexCheckDefault">
                    I agree to the <span class="text-success">NVIDIA Account Terms of Use</span>
                </label>
            </div>
            <div class="d-flex flex-row justify-content-end mt-4">
                <button class="text-white bg-secondary border-0 rounded-0 text-uppercase me-2">cancel</button>
                <button type="submit" name="signup" class="text-white bg-success border-0 rounded-0 text-uppercase">create account</button>
            </div>
            <div class="d-flex flex-row justify-content-end mt-4">
                <span class="text-white me-2">Already have an account?</span>
                <a href="./index.php" class="text-decoration-none text-success">Log in</a>
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