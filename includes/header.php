<?php

declare(strict_types=1);
ob_start();
include('includes/autoloader.inc.php');

$session = new Session();
Session::init();
if (isset($_GET['action']) && $_GET['action'] == "logout") {
    Session::destroy();
}
$post = new Post();
$divisions = $post->division();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Travelsmade:: Tourist Guide</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,600i,700" rel="stylesheet">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--Owl Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/owl.carousel.min.css">
    <!--Slick Slider Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/slick.css">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/animate.css">
    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="assets/css/blog.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bc.css">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/homePageResponsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/otherPageResponsive.css">

</head>

<body class="body-class bc blog">

    <!--Start Body Wrap-->
    <div id="body-wrap">
        <div id="main-menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" alt="dg df">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="index.php" role="button" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Visit Place
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <?php
                                    foreach ($divisions as $division) :
                                        echo "<a class='dropdown-item' href='posts.php?id=" . $division['id'] . "'>" . $division['name'] . "</a>";
                                    endforeach
                                    ?>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="packges.html">Hotel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="hotels.html">Flight</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ourvahicles.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ourvahicles.html">Contact Us</a>
                            </li>
                        </ul>
                        <?php
                        $message = Session::get("login");
                        if ($message == true) {
                            echo "<a class='text-white mr-3' href='?action=logout'>Logout</a>";
                        } else {
                            echo "<a class='text-white mr-3' href='login.php'>Login</a>";
                        }
                        ?>
                        <a class="text-white" href="signup.php">Signup</a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- =========== nav end =========== -->