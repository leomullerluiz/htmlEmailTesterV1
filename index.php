<?php

require 'vendor/autoload.php';

$mail = new app\classes\Email;
$mail->sendEmail("ENVIANDO E-MAIL A PARTIR DO SERVIDOR", "Corpo do E-mail", "Corpo alternativo, usado para clientes non-HTML ");

require "app/functions/pages.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Email Tester</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center m-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <img src="pages/res/img/html_icon.svg" width="20px" height="20px">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto m-2 justify-content-center mb-md-0">
                    <li><a href="?page=home" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Docs</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Saved Templates</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Help</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://avatars.githubusercontent.com/u/12114710?v=4" alt="mdo" class="rounded-circle"
                            width="32" height="32">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>



    <div class="container">
        <?php
            require loadPage();

        ?>
    </div>


    <footer class="d-flex flex-wrap justify-content-between align-items-center p-3 my-4 border-top mt-auto">
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

        <a href="/"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="pages/res/img/html_icon.svg" width="20px" height="20px">
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Docs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Saved Templates</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Help</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
    </footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>