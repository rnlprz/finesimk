<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Error!</title>
    <link rel="stylesheet" href="http://finesi.net/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://finesi.net/assets/css/icon.css">
    <script type="text/javascript" src="http://finesi.net/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://finesi.net/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="http://finesi.net/assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="http://finesi.net/assets/img/finesi_logo.png" width="30" height="30"
             class="d-inline-block align-top" alt="">
        FINESI-UNAP
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Error!</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <br>
    <div class="row">
        <div class="col-12 text-center">
            <h3><?php echo $heading; ?></h3>
            <p><?php echo $message; ?></p>
            <img src="http://finesi.net/assets/img/error/cat1.png" alt="ERROR" width="25%">
        </div>
    </div>
</div>
</body>
</html>