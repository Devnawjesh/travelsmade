<?php include_once('./includes/header.php');
// Session::checkLogin();
?>
<?php
if (isset($_GET['id'])) {
    $userid = (int) $_GET['id'];
}
$profile = new Profile();
$value = $profile->edit($userid);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $data = $profile->update($_POST);
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
                <div class="col-12 col-md-12">
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
                                    <label for="fullname">Full Name</label>
                                    <input type="text" name="fullname" value="<?= $value->fullname ?>" class="form-control" id="fullname" aria-describedby="fullname" placeholder="Enter Full Name" required>
                                    <small id="fullname" class="form-text text-muted">Enter your full name.</small>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" value="<?= $value->username ?>" class="form-control" id="username" aria-describedby="userhelp" placeholder="Enter Username" required>
                                    <small id="userhelp" class="form-text text-muted">Enter unique username</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" value="<?= $value->email ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" value="<?= $value->phone ?>" class="form-control" id="phone" placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="status" id="inlineCheckbox1" value="1" <?= $value->status == 1 ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inlineCheckbox1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="status" id="inlineCheckbox2" value="2" <?= $value->status == 2 ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inlineCheckbox2">Inactive</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Type</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="type" id="inlineCheckbox3" value="1" <?= $value->type == 1 ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inlineCheckbox3">User</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="type" id="inlineCheckbox4" value="2" <?= $value->type == 2 ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="inlineCheckbox4">Admin</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" value="" class="form-control" id="image" placeholder="image">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="profile-img">
                                            <?php
                                            if ($value->image) {
                                                echo "<img src='assets/images/user/$value->image' alt='profile image' class='rounded-circle'>";
                                            } else {
                                                echo "<img src='assets/images/user/thumb/default-thumb.jpg' alt='profile image' class='rounded-circle'>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?= $value->id ?>">
                                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--page content end-->
            <?php include_once('./includes/footer.php'); ?>