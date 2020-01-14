<?php include_once('includes/header.php'); ?>
<?php $user = new Login();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $login = $user->userLogin($_POST);
}
Session::checkLogin();
?>

<section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <h5 class="text-white">User Login</h5>
            </div>
        </div>
    </div>
</section>

<section id="contact-main">
    <div class="container">
        <div class="row">
            <div class="col-8 mb-5">
                <?php
                if (isset($login)) {
                    echo $login;
                }
                ?>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</section>

<?php include_once('includes/footer.php'); ?>