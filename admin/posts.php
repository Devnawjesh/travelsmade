<?php include_once('./includes/header.php');
// Session::checkLogin();
?>
<?php $post = new Post();
$posts = $post->index();
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-content">
            <!--Page title-->
            <div class="page-title d-flex justify-content-between">
                <h5> Post</h5>
                <p class="mb-0"><a href="javascript:void(0)">Posts</a> | <span>TravelsMade</span></p>
            </div>
            <!--page title end-->
            <!--page content start-->
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card ">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="text-uppercase">
                                Posts
                            </h5>
                            <a class="btn btn-primary" href="create-post.php">Create Post</a>
                        </div>
                        <div class="card-body">
                            <div class="table-content table-responsive">
                                <table class="table table-hover va-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Division</th>
                                            <th>Place</th>
                                            <th>Feature Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($posts as $key => $post) : ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $post['name'] ?></td>
                                                <td><?= $post['place'] ?></td>
                                                <td><img src="assets/images/post/<?= $post['image'] ?>" alt="" height="45" width="45"></td>
                                                <td class="action-buttons">
                                                    <a href="post-edit.php?id=<?= $post['id'] ?>"><i class="icon-note"></i></a>
                                                    <a href="profile.php?id=<?= $post['id'] ?>"><i class="icon-eye"></i></a>
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