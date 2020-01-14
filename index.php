<?php include_once('includes/header.php'); ?>
<?php $user = new Login();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $register = $user->userSignUp($_POST);
}
?>
<!-- =========== nav end =========== -->

<div id="banner">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 text-center banner_slider">
                <div class="banner_info">
                    <article>
                        <h4>A Time to Travel</h4>
                        <h2>Refresh and Relax</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some njected randomised words.</p>
                    </article>
                    <article>
                        <h4>A Time to Ride</h4>
                        <h2>Refresh and Ride</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some njected randomised words.</p>
                    </article>
                    <article>
                        <h4>A Time to Ture</h4>
                        <h2>Refresh and Ture</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some njected randomised words.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =========== banner end =========== -->
<!-- =========== Whay Choose Us Start ============ -->
<section id="choose-us">
    <div id="index-2-serch-top">
        <div class="i-s-t-nav">
            <div class="container">
                <div class="col-12">
                    <div class="h-seaerch-area">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link normal-t active" id="nav-Hotels-tab" data-toggle="tab" href="#nav-Hotels" role="tab" aria-controls="nav-Hotels" aria-selected="true">
                                    Hotels
                                </a>
                                <a class="nav-item nav-link advance" id="nav-Flights-tab" data-toggle="tab" href="#nav-Flights" role="tab" aria-controls="nav-Flights" aria-selected="false">
                                    Flights
                                </a>
                                <a class="nav-item nav-link advance" id="nav-Cars-tab" data-toggle="tab" href="#nav-Cars" role="tab" aria-controls="nav-Cars" aria-selected="false">
                                    Cars
                                </a>
                                <a class="nav-item nav-link advance" id="nav-Cruises-tab" data-toggle="tab" href="#nav-Cruises" role="tab" aria-controls="nav-Cruises" aria-selected="false">
                                    Cruises
                                </a>
                                <a class="nav-item nav-link advance" id="nav-Activities-tab" data-toggle="tab" href="#nav-Activities" role="tab" aria-controls="nav-Activities" aria-selected="false">
                                    Activities
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="i-s-t-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h-seaerch-area">
                            <!-- Nav tabs -->

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show normal active" id="nav-Hotels" role="tabpanel" aria-labelledby="nav-Hotels-tab">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" class="form-control" placeholder="destination & hotel name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check In</label>
                                                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check Out</label>
                                                    <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Adult</label>
                                                    <input type="number" class="form-control" placeholder="00 Adult">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Child</label>
                                                    <input type="number" class="form-control" placeholder="00 Child">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Rooms</label>
                                                    <input type="number" class="form-control" placeholder="00 Rooms">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="index-2-serch-top-btn">
                                                <button type="submit"><i class="fa fa-search"></i>SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade advance-c" id="nav-Flights" role="tabpanel" aria-labelledby="nav-Flights-tab">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" class="form-control" placeholder="destination & hotel name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check In</label>
                                                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check Out</label>
                                                    <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Adult</label>
                                                    <input type="number" class="form-control" placeholder="00 Adult">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Child</label>
                                                    <input type="number" class="form-control" placeholder="00 Child">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Rooms</label>
                                                    <input type="number" class="form-control" placeholder="00 Rooms">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="index-2-serch-top-btn">
                                                <button type="submit"><i class="fa fa-search"></i>SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade advance-c" id="nav-Cars" role="tabpanel" aria-labelledby="nav-Cars-tab">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" class="form-control" placeholder="destination & hotel name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check In</label>
                                                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check Out</label>
                                                    <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Adult</label>
                                                    <input type="number" class="form-control" placeholder="00 Adult">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Child</label>
                                                    <input type="number" class="form-control" placeholder="00 Child">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Rooms</label>
                                                    <input type="number" class="form-control" placeholder="00 Rooms">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="index-2-serch-top-btn">
                                                <button type="submit"><i class="fa fa-search"></i>SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade advance-c" id="nav-Cruises" role="tabpanel" aria-labelledby="nav-Cruises-tab">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" class="form-control" placeholder="destination & hotel name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check In</label>
                                                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check Out</label>
                                                    <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Adult</label>
                                                    <input type="number" class="form-control" placeholder="00 Adult">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Child</label>
                                                    <input type="number" class="form-control" placeholder="00 Child">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Rooms</label>
                                                    <input type="number" class="form-control" placeholder="00 Rooms">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <div class="index-2-serch-top-btn">
                                                <button type="submit"><i class="fa fa-search"></i>SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade advance-c" id="nav-Activities" role="tabpanel" aria-labelledby="nav-Activities-tab">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" class="form-control" placeholder="destination & hotel name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check In</label>
                                                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Check Out</label>
                                                    <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Adult</label>
                                                    <input type="number" class="form-control" placeholder="00 Adult">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Child</label>
                                                    <input type="number" class="form-control" placeholder="00 Child">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>Rooms</label>
                                                    <input type="number" class="form-control" placeholder="00 Rooms">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="index-2-serch-top-btn">
                                                <button type="submit"><i class="fa fa-search"></i>SEARCH NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <h2 class="section-heading">Whay Choose Us</h2>
                <p class="section-paragraph">There are many variations of passages of Lorem Ipsum available but the majority have
                    suffered alteration in some form injected humour.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="c-box text-center">
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h4>Diverse Destinattions</h4>
                    <p>There are many variations of the is a passages of Lorem Ipsum that available majority.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="c-box text-center">
                    <div class="icon">
                        <i class="fa fa-diamond"></i>
                    </div>
                    <h4>Diverse Destinattions</h4>
                    <p>There are many variations of the is a passages of Lorem Ipsum that available majority.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="c-box text-center">
                    <div class="icon">
                        <i class="fa fa-snowflake-o"></i>
                    </div>
                    <h4>Diverse Destinattions</h4>
                    <p>There are many variations of the is a passages of Lorem Ipsum that available majority.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="c-box text-center">
                    <div class="icon">
                        <i class="fa fa-plane"></i>
                    </div>
                    <h4>Diverse Destinattions</h4>
                    <p>There are many variations of the is a passages of Lorem Ipsum that available majority.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== Whay Choose Us End ============ -->
</div>
</div>
<!-- =========== banner end =========== -->

<?php include_once('includes/footer.php'); ?>