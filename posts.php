<?php include_once('includes/header.php'); ?>
<?php
$post = new Post();
if (isset($_GET['id'])) {
    $division = (int) $_GET['id'];
}
$posts = $post->getPostByDivision($division);
?>
<section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="breadcrumbinfo">
                    <article>
                        <h2>Blog</h2>
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
<section id="latest_news">
    <div class="container">
        <div class="row">
            <?php foreach ($posts as $value) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="c-box">
                        <div class="img">
                            <img src="admin/assets/images/post/<?= $value['image'] ?>" alt="<?= $value['place'] ?>" height="250" width="350">
                        </div>
                        <article>
                            <a href="post-details.php?id=<?= $value['id'] ?>">
                                <h4><?= $value['place'] ?></h4>
                            </a>
                            <p><?= substr($value['summery'], 0, 85) . '...' ?></p>
                        </article>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- =============== Latest News Area End ============================ -->
<?php include_once('includes/footer.php'); ?>