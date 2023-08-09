<?php

require 'vendor/autoload.php';
require "app/functions/pages.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Email Tester</title>
    <link rel="shortcut icon" href="pages/res/img/html_icon.svg" type="image/x-icon">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/c75c18e7a6.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="pages/res/css/codemirror/codemirror.css">
    <link rel="stylesheet" href="pages/res/css/codemirror/lucario.css">
    <link rel="stylesheet" href="pages/res/css/codemirror/show-hint.css">
    <script src="pages/res/js/codemirror/codemirror.js"></script>
    <script src="pages/res/js/codemirror/show-hint.js"></script>
    <script src="pages/res/js/codemirror/xml-hint.js"></script>
    <script src="pages/res/js/codemirror/html-hint.js"></script>
    <script src="pages/res/js/codemirror/xml.js"></script>
    <script src="pages/res/js/codemirror/javascript.js"></script>
    <script src="pages/res/js/codemirror/css.js"></script>
    <script src="pages/res/js/codemirror/htmlmixed.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="pages/res/css/style.css">

</head>

<?php
require loadPage();
?>
<script src="pages/res/js/app.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>