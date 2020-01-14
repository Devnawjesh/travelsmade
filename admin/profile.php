<?php include_once('./includes/header.php');
// Session::checkLogin();
?>
<?php
if (isset($_GET['id'])) {
    $userid = (int) $_GET['id'];
}
$profile = new Profile();
$userdata = $profile->profile($userid);
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-content">
            <!--Page title-->
            <div class="page-title d-flex justify-content-between">
                <h5> Profile</h5>
                <p class="mb-0"><a href="javascript:void(0)">Profile</a> | <span>TravelsMade</span></p>
            </div>
            <!--page title end-->
            <!--page content start-->
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card profile ">
                        <img src="http://www.madcoderz.com/madol/asset/images/cards/cover-profile1.jpg" class="profile-cover-img" alt="madol">
                        <div class="card-body text-center">
                            <div class="profile-img">
                                <?php
                                if ($userdata->image) {
                                    echo "<img src='assets/images/user/$userdata->image' alt='profile image' class='rounded-circle'>";
                                } else {
                                    echo "<img src='assets/images/user/thumb/default-thumb.jpg' alt='profile image' class='rounded-circle'>";
                                }
                                ?>
                            </div>
                            <h6 class="card-text mb-0">
                                <?= $userdata->fullname ?>
                            </h6>
                            <p class="card-text text-small"><?= $userdata->type == 1 ? 'User' : 'Admin' ?></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-0">
                                <span>Email Address</span>
                                <h6 class="card-text text-medium"><i class="icon-envelope-open pr-2"></i><?= $userdata->email ?></h6>
                            </div>
                            <div class="mt-4">
                                <span class="">Contact</span>
                                <h6 class="card-text text-medium"><i class="icon-screen-smartphone pr-2"></i><?= $userdata->phone ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">Basic</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!--first tab-->
                            <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                <div class="card-body">
                                    <div class="row profile-row">
                                        <div class="col-3">
                                            <span class="profile-cat">Full Name</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="profile-info"><?= $userdata->fullname ?></span>
                                        </div>
                                    </div>
                                    <div class="row profile-row">
                                        <div class="col-3">
                                            <span class="profile-cat">User Name</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="profile-info"><?= $userdata->username ?></span>
                                        </div>
                                    </div>
                                    <div class="row profile-row">
                                        <div class="col-3">
                                            <span class="profile-cat">Email</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="profile-info"><?= $userdata->email ?></span>
                                        </div>
                                    </div>

                                    <div class="row profile-row">
                                        <div class="col-3">
                                            <span class="profile-cat">Contact</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="profile-info"><?= $userdata->phone ?></span>
                                        </div>
                                    </div>
                                    <div class="row profile-row">
                                        <div class="col-3">
                                            <span class="profile-cat">Status</span>
                                        </div>
                                        <div class="col-9">
                                            <span class="profile-info"><?= $userdata->status == 1 ? 'Active' : 'Inactive' ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--page content end-->
                </div>
            </div>
            <!--page content end-->
            <?php include_once('./includes/footer.php'); ?>