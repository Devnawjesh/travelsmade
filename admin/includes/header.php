<?php

declare(strict_types=1);
ob_start();
include('includes/autoloader.inc.php');
include('../classes/Session.class.php');

$session = new Session();
Session::init();
if (isset($_GET['action']) && $_GET['action'] == "logout") {
    Session::admindestroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.madcoderz.com/madol/asset/images/favicon.ico">
    <title>TravelsMade | Bangladesh</title>
    <link rel="stylesheet" href="assets/js/vendor/metismenu/dist/metisMenu.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/js/vendor/morris/morris.css">
    <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div id="app">
        <!--Header section start-->
        <header class="topbar clearfix">
            <!--navbar Logo section left-->
            <div class="topbar-left">
                <div class="main-logo m-0 p-0">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="http://www.madcoderz.com/madol/asset/images/logo-color.svg" alt="madol">
                        </span>
                        <i><img src="http://www.madcoderz.com/madol/asset/images/icon-logo.svg" alt="madol"></i>
                    </a>
                </div>
            </div>
            <!--Topbar Logo section end-->
            <!--navbar menu section right-->
            <nav class="navbar-main navbar navbar-full d-flex flex-nowrap flex-row">
                <ul class="navbar-nav nav-left d-flex flex-row pl-0 mb-0 order-1">
                    <li class="nav-item text-center d-block">
                        <a href="javascript:void(0)" class="sidebar-toggle text-center">
                            <i class="icon-menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row nav-right pl-0 mb-0 m-20 order-2">
                    <li class="dropdown nav-profile hw35 pr-3">
                        <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link arrow-none">
                            <?php
                            if (Session::get("image")) {
                                echo "<img src='assets/images/user/'" . Session::get('image') . "alt='profile image' class='rounded-circle'>";
                            } else {
                                echo "<img src='assets/images/user/thumb/default-thumb.jpg' alt='profile image' class='rounded-circle'>";
                            }
                            ?>
                        </a>
                        <div class="dropdown-menu hw45 dropdown-box-grid">
                            <ul class="dropdown-inner p-2">
                                <li class="pb-3">
                                    <div class="dd-userbox d-flex flex-row">
                                        <div class="dd-img">
                                            <?php
                                            if (Session::get("image")) {
                                                echo "<img src='assets/images/user/'" . Session::get('image') . "alt='profile image' class='rounded-circle'>";
                                            } else {
                                                echo "<img src='assets/images/user/thumb/default-thumb.jpg' alt='profile image' class='rounded-circle'>";
                                            }
                                            ?>
                                        </div>
                                        <div class="dd-info">
                                            <h4><?php echo Session::get("username"); ?></h4>
                                            <p><?php echo Session::get("email"); ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="main pb-3">
                                    <a href="profile.php?id=<?= Session::get("id") ?>"><i class="icon-user mr-2"></i> Profile</a>
                                </li>
                                <li class="main pb-3">
                                    <a href="changepassword.php"><i class="icon-key mr-2"></i> Change Password</a>
                                </li>
                                <li class="main pb-3">
                                    <a href="?action=logout"><i class="icon-logout mr-2"></i> Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!--navbar menu section right end-->
        </header>
        <!--Header section end-->
        <aside class="sidebar">
            <div class="slimscroll-left-sidebar">
                <div class="sidebar-nav">
                    <div class="sidebar-header text-center">
                        <figure class="side-user-bg">

                        </figure>
                        <?php
                        if (Session::get("image")) {
                            echo "<img src='assets/images/user/'" . Session::get('image') . "alt='profile image' class='rounded-circle'>";
                        } else {
                            echo "<img src='assets/images/user/thumb/default-thumb.jpg' alt='profile image' class='rounded-circle'>";
                        }
                        ?>
                        <h5 class="text-center text-medium"><?php echo Session::get("fullname"); ?></h5>
                    </div>
                    <?php
                    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                    $uri_segments = explode('/', $uri_path);

                    ?>
                    <ul class="metismenu" id="menu">
                        <li>
                            <a <?php if ($uri_segments[3] == "dashboard.php") {
                                    echo "class='active'";
                                }  ?> href="dashboard.php" aria-expanded="false">
                                <i class="icon-grid"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a <?php if ($uri_segments[3] == "user.php") {
                                    echo "class='active'";
                                }  ?> href="user.php" aria-expanded="false">
                                <i class="icon-user"></i>
                                <span>User</span>
                            </a>
                        </li>
                        <li>
                            <a <?php if ($uri_segments[3] == "posts.php") {
                                    echo "class='active'";
                                }  ?> href="posts.php" aria-expanded="false">
                                <i class="icon-note"></i>
                                <span>Posts</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!--end sidebar section-->