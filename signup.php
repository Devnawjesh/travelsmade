<?php include_once('includes/header.php'); ?>
<?php $user = new Login();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $register = $user->userSignUp($_POST);
}
?>

<section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <h5 class="text-white">User Signup</h5>
            </div>
        </div>
    </div>
</section>
<!-- =========== banner end =========== -->


<!--================================
        contact us  part start 
    =====================================-->
<section id="contact-main">
    <div class="container">
        <div class="row">
            <div class="col-8 mb-5">
                <?php
                if (isset($register)) {
                    echo $register;
                }
                ?>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" aria-describedby="fullname" placeholder="Enter Full Name" required>
                        <small id="fullname" class="form-text text-muted">Enter your full name.</small>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="userhelp" placeholder="Enter Username" required>
                        <small id="userhelp" class="form-text text-muted">Enter unique username</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</section>
<!--================================
				 contact us part end
				 =====================================-->

<?php include_once('includes/footer.php'); ?>