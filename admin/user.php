<?php include_once('./includes/header.php');
// Session::checkLogin();
?>
<?php $user = new User();
$users = $user->index();
// print_r($users);
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
                            <div class="table-content table-responsive">
                                <table class="table table-hover va-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>E-mail</th>
                                            <th>Phone</th>
                                            <th>Image</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $key => $user) : ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $user['fullname'] ?></td>
                                                <td><?= $user['username'] ?></td>
                                                <td><?= $user['email'] ?></td>
                                                <td><?= $user['phone'] ?></td>
                                                <td class="hw35">
                                                    <?php
                                                        if ($user['image']) {
                                                            $image = $user['image'];
                                                            echo "<img src='assets/images/user/$image' alt='profile image' class='rounded-circle'>";
                                                        } else {
                                                            echo "<img src='assets/images/user/thumb/default-thumb.jpg' alt='profile image' class='rounded-circle'>";
                                                        }
                                                        ?>
                                                </td>
                                                <td><?php if ($user['type'] == 1) {
                                                            echo 'User';
                                                        } else {
                                                            echo 'Admin';
                                                        } ?></td>
                                                <td class="action-buttons">
                                                    <a href="profile-edit.php?id=<?= $user['id'] ?>"><i class="icon-note"></i></a>
                                                    <a href="profile.php?id=<?= $user['id'] ?>"><i class="icon-eye"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--page content end-->
            <?php include_once('./includes/footer.php'); ?>