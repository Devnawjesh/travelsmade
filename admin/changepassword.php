<?php include_once('./includes/header.php');
// Session::checkLogin();
?>
<?php
$profile = new Profile();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset'])) {
    $data = $profile->reset($_POST);
}
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-content">
            <!--Page title-->
            <div class="page-title d-flex justify-content-between">
                <h5> User</h5>
                <p class="mb-0"><a href="javascript:void(0)">Users</a> | <span>TravelsMade</span></p>
            </div>
            <!--page title end-->
            <!--page content start-->
            <div class="row">
                <div class="col-6 col-md-6">
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="text-uppercase">
                                Users
                            </h5>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($data)) {
                                echo $data;
                            }
                            ?>
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="oldpass">Old Password</label>
                                    <input type="password" name="oldpassword" value="" class="form-control" id="oldpass" aria-describedby="oldpass" placeholder="Enter Old Password" required>
                                    <small id="oldpass" class="form-text text-muted">Enter your old password.</small>
                                </div>
                                <div class="form-group">
                                    <label for="newpass">New Password</label>
                                    <input type="password" name="newpassword" value="" class="form-control" id="newpass" aria-describedby="newpass" placeholder="Enter new password" required>
                                    <small id="newpass" class="form-text text-muted">Enter new password</small>
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm Password</label>
                                    <input type="password" name="confirmpassword" value="" class="form-control" id="confirmpassword" aria-describedby="confirmpassword" placeholder="Enter confirm password" required>
                                    <small id="newpass" class="form-text text-muted">Enter confirm password</small>
                                </div>
                                <button type="submit" name="reset" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--page content end-->
            <?php include_once('./includes/footer.php'); ?>