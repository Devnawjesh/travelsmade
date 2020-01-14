<?php include_once('./includes/header.php');
// Session::checkLogin();
?>
<?php
$post = new Post();
$divisions = $post->division();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $data = $post->create($_POST);
    print_r($data);
}
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-content">
            <!--Page title-->
            <div class="page-title d-flex justify-content-between">
                <h5> Post</h5>
                <p class="mb-0"><a href="javascript:void(0)">Create Post</a> | <span>TravelsMade</span></p>
            </div>
            <!--page title end-->
            <!--page content start-->
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="text-uppercase">
                                Create Post
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
                                    <label for="division">Division</label>
                                    <select id="division" name="division" class="form-control">
                                        <option selected>Choose...</option>
                                        <?php
                                        foreach ($divisions as $division) :
                                            echo "<option value=" . $division['id'] . ">" . $division['name'] . "</option>";
                                        endforeach
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="place">Place</label>
                                    <input type="text" name="place" value="" class="form-control" id="place" aria-describedby="place" placeholder="Enter place name" required>
                                    <small id="userhelp" class="form-text text-muted">Enter a place name</small>
                                </div>
                                <div class="form-group">
                                    <label for="summery">Summery</label>
                                    <textarea class="form-control" name="summery" id="summery" placeholder="Required example textarea" required></textarea>
                                    <small id="userhelp" class="form-text text-muted">Enter a short summery ; max: 512</small>
                                </div>
                                <div class="form-group">
                                    <label for="image">Feature Image</label>
                                    <input type="file" name="image" value="" class="form-control" id="image" aria-describedby="image" required>
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea class="form-control" name="body" id="editor1" placeholder="Required example textarea" required></textarea>
                                </div>
                                <button type="submit" name="create" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--page content end-->
            <?php include_once('./includes/footer.php'); ?>