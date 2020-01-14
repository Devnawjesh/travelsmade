<?php include_once('./includes/header.php');
// Session::checkLogin();
?>
<?php
$post = new Post();
$divisions = $post->division();
if (isset($_GET['id'])) {
    $postid = (int) $_GET['id'];
}
$postvalue = $post->edit($postid);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $data = $post->update($_POST);
    // print_r($data);
}
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-content">
            <!--Page title-->
            <div class="page-title d-flex justify-content-between">
                <h5> Post</h5>
                <p class="mb-0"><a href="javascript:void(0)">Update Post</a> | <span>TravelsMade</span></p>
            </div>
            <!--page title end-->
            <!--page content start-->
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="text-uppercase">
                                Update Post
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
                                            $select = $postvalue->division_id == $division['id'] ? 'selected' : '';
                                            echo "<option value=" . $division['id'] . " " . $select . ">" . $division['name'] . "</option>";
                                        endforeach
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="place">Place</label>
                                    <input type="text" name="place" value="<?= $postvalue->place ?>" class="form-control" id="place" aria-describedby="place" placeholder="Enter place name" required>
                                    <small id="userhelp" class="form-text text-muted">Enter a place name</small>
                                </div>
                                <div class="form-group">
                                    <label for="summery">Summery</label>
                                    <textarea class="form-control" name="summery" id="summery" placeholder="Required example textarea" required><?= $postvalue->summery ?></textarea>
                                    <small id="userhelp" class="form-text text-muted">Enter a short summery ; max: 512</small>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="image">Feature Image</label>
                                        <input type="file" name="image" value="" class="form-control" id="image" aria-describedby="image">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/images/post/<?= $postvalue->image ?>" alt="" height="45" width="45">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea class="form-control" name="body" id="editor1" placeholder="Required example textarea" required><?= $postvalue->body ?></textarea>
                                </div>
                                <input type="hidden" name="id" value="<?= $postvalue->id ?>">
                                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--page content end-->
            <?php include_once('./includes/footer.php'); ?>