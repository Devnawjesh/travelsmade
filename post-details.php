<?php include_once('includes/header.php'); ?>
<?php
$post = new Post();
if (isset($_GET['id'])) {
    $postid = (int) $_GET['id'];
}
$details = $post->getPostDetails($postid);
$latest = $post->getLatestPost();
$divisions = $post->division();
?>
<section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="breadcrumbinfo">
                    <article>
                        <h2><?= $details->place ?></h2>
                        <a href="index.php">Home</a> <span>/</span>
                        <a class="active" href="#">Blog</a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== banner end =========== -->
<!-- =============== Latest News Area Start ============================ -->
<section id="latest_news" class="single-blog blogs">
    <div class="container">
        <div class="row">
            <!-- Start Single Blog -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-box">
                            <div class="blog-content-area">
                                <div class="blog-img">
                                    <img src="admin/assets/images/post/<?= $details->image ?>" alt="<?= $details->place ?>" width="700" height="350">
                                </div>
                                <div class="blog-details">
                                    <h3><?= $details->place ?></h3>
                                    <p><?= $details->summery ?></p>
                                    <p>
                                        <?= $details->body ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="recent-posts-widget sidebar-widget">
                        <h4>Latest Post</h4>
                        <ul class="list-unstyled">
                            <?php foreach ($latest as $val) : ?>
                                <li>
                                    <div class="recent-post-img">
                                        <a href="#"><img src="admin/assets/images/post/<?= $val['image'] ?>" class="img-responsive" alt="" height="45" width="45"></a>
                                    </div>
                                    <div class="recent-post-description">
                                        <h3><a href="post-details.php?id=<?= $val['id'] ?>"><?= $val['place'] ?></a></h3>
                                        <h6><?= substr($val['summery'], 0, 85) ?></h6>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="categories-widget sidebar-widget sidebar-widget3">
                        <h4>Categories</h4>
                        <ul class="list-unstyled">
                            <?php foreach ($divisions as $division) : ?>
                                <li><a href="posts.php?id=<?= $division['id'] ?>"><?= $division['name'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- =============== Latest News Area End ============================ -->

<?php include_once('includes/footer.php'); ?>