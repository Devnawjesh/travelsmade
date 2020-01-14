<?php include_once('./includes/header.php'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="page-content">
            <!--Page title-->
            <div class="page-title d-flex justify-content-between">
                <h5> Dashboard</h5>
                <p class="mb-0"><a href="javascript:void(0)">Dashboard</a> | <span>CRM</span></p>
            </div>
            <!--page title end-->
            <!--page content start-->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-widget shadow-none ">
                        <div class="card-body widget-aristocrat widget-body-aristocrat">
                            <div class="">
                                <div class="align-items-center text-white">
                                    <h5>
                                        10/18
                                    </h5>
                                    <h6>
                                        Awatting Payment
                                    </h6>
                                    <div class="progress widget-progress">
                                        <div class="progress-bar bg-aristocrat" role="progressbar" style="width: 65%; height: 6px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-widget shadow-none ">
                        <div class="card-body widget-info widget-body-info">
                            <div class="">
                                <div class="align-items-center text-white">
                                    <h5>
                                        8/50
                                    </h5>
                                    <h6>
                                        Converted Leads
                                    </h6>
                                    <div class="progress widget-progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-widget shadow-none ">
                        <div class="card-body widget-success widget-body-success">
                            <div class="">
                                <div class="align-items-center text-white">
                                    <h5>
                                        5/6
                                    </h5>
                                    <h6>
                                        Projects In Progress
                                    </h6>
                                    <div class="progress widget-progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-widget shadow-none ">
                        <div class="card-body widget-warning widget-body-warning">
                            <div class="">
                                <div class="align-items-center text-white">
                                    <h5>
                                        34/61
                                    </h5>
                                    <h6>
                                        Tasks Not Finished
                                    </h6>
                                    <div class="progress widget-progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%; height: 6px;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-text">
                                Project Status
                            </h5>
                        </div>
                        <div class="card-body text-center">
                            <div id="morrisdonutchart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-text">Weekly Payment Records</h5>
                        </div>
                        <div class="card-body">
                            <div id="morrisbarchart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="text-uppercase">
                                New Projects
                            </h5>
                            <p class="subhead text-uppercase">Overview Of last Month</p>
                        </div>
                        <div class="card-body">
                            <div class="table-content table-responsive">
                                <table class="table table-hover va-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Team Head</th>
                                            <th>Project</th>
                                            <th>Members</th>
                                            <th>Hours</th>
                                            <th>Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-medium min-w200 hw45"><a href="javascript:void(0)"><span class="mr-1"><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="madol admin template"></span></a><span>Jhon Doe</span></td>
                                            <td>Project one</td>
                                            <td class="hw35">
                                                <div class="avatar-group">
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U104.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U106.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle border border-white bg-primary"><i class="icon-plus"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>120</td>
                                            <td>$8000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-medium min-w200 hw45"><a href="javascript:void(0)"><span class="mr-1"><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U100-thumb.jpg" alt="madol admin template"></span></a><span>Michael Scofield</span></td>
                                            <td>Project Two</td>
                                            <td class="hw35">
                                                <div class="avatar-group">
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U104.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U102.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U103.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle border border-white bg-primary"><i class="icon-plus"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>260</td>
                                            <td>$8000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-medium min-w200 hw45"><a href="javascript:void(0)"><span class="mr-1"><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/U375-thumb.jpg" alt="madol admin template"></span></a><span>Sara Anna</span></td>
                                            <td>Project Three</td>
                                            <td class="hw35">
                                                <div class="avatar-group">
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U104.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U102.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U106.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle border border-white bg-primary"><i class="icon-plus"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>22</td>
                                            <td>$8000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-medium min-w200 hw45"><a href="javascript:void(0)"><span class="mr-1"><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="madol admin template"></span></a><span>Jhon Micheal</span></td>
                                            <td>Project Four</td>
                                            <td class="hw35">
                                                <div class="avatar-group">
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U103.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U106.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle border border-white bg-primary"><i class="icon-plus"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>520</td>
                                            <td>$8000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-medium min-w200 hw45"><a href="javascript:void(0)"><span class="mr-1"><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/U103.jpg" alt="madol admin template"></span></a><span>Jhon Micheal</span></td>
                                            <td>Project Five</td>
                                            <td class="hw35">
                                                <div class="avatar-group">
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U104.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U102.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle border border-white bg-primary"><i class="icon-plus"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>520</td>
                                            <td>$8000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-medium min-w200 hw45"><a href="javascript:void(0)"><span class="mr-1"><img class="rounded-circle" src="http://www.madcoderz.com/madol/asset/images/user/U106.jpg" alt="madol admin template"></span></a><span>Jhon Snow</span></td>
                                            <td>Project Six</td>
                                            <td class="hw35">
                                                <div class="avatar-group">
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U104.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <img src="http://www.madcoderz.com/madol/asset/images/user/U102.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                                                    </div>
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle border border-white bg-primary"><i class="icon-plus"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>520</td>
                                            <td>$8000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="card-text">
                                        New User
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="inbox-content hw45">
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Jhon Snow</p>
                                                    <p class="text-muted inbox-details mb-0">jhondoe@gmail.com</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U375-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Era Lara</p>
                                                    <p class="text-muted inbox-details mb-0">eralara@gmail.com</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U281-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Jhon Snow</p>
                                                    <p class="text-muted inbox-details mb-0">jhonsnow@gmail.com</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U100-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Michael Scofield</p>
                                                    <p class="text-muted inbox-details mb-0">michael@gmail.com</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Jhon Snow</p>
                                                    <p class="text-muted inbox-details mb-0">jhonsnow@gmail.com</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row inbox-body">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail  rounded-circle">
                                            </a>
                                            <div class="pl-3">
                                                <a href="javascript:void(0)">
                                                    <p class="text-medium text-subject mb-1">Bello</p>
                                                    <p class="text-muted inbox-details mb-0">bello@gmail.com</p>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0)" class="text-medium">
                                                <p class="pt-3 text-uppercase">View All</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="card-text">
                                        Project Timeline
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="timeline timeline-border timeline-border timeline-secondary hw35">
                                        <div class="timeline-list">
                                            <div class="timeline-info d-flex">
                                                <div class="media-left pr-2">
                                                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="madol">
                                                </div>
                                                <div class="media-right">
                                                    <div><span class="badge badge-success badge-rounded pr-1">Added </span><span>Task: #18 - Prepare the user profile - PHP Projects</span> </div>
                                                    <small class="text-muted">17/10/18, 5:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-list timeline-border timeline-primary">
                                            <div class="timeline-info d-flex">
                                                <div class="media-left pr-2">
                                                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U101-thumb.jpg" alt="madol">
                                                </div>
                                                <div class="media-right">
                                                    <div><span class="badge badge-success badge-rounded pr-1">Added </span><span>Task: #19 - Prepare the ecommerce - Laravel Projects</span> </div>
                                                    <small class="text-muted">17/10/18, 5:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-list  timeline-border timeline-danger">
                                            <div class="timeline-info d-flex">
                                                <div class="media-left pr-2">
                                                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U102-thumb.jpg" alt="madol">
                                                </div>
                                                <div class="media-right">
                                                    <div><span class="badge badge-info badge-rounded pr-1">Updated </span><span>Task: #20 - Prepare requirements - WEB Development</span> </div>
                                                    <small class="text-muted">17/10/18, 5:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-list  timeline-border timeline-success">
                                            <div class="timeline-info d-flex">
                                                <div class="media-left pr-2">
                                                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U103-thumb.jpg" alt="madol">
                                                </div>
                                                <div class="media-right">
                                                    <div><span class="badge badge-info badge-rounded pr-1">Updated </span><span>Task: #21 - Deploy the site in server - WEB Development</span> </div>
                                                    <small class="text-muted">17/10/18, 5:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-list  timeline-border timeline-warning">
                                            <div class="timeline-info d-flex">
                                                <div class="media-left pr-2">
                                                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U102-thumb.jpg" alt="madol">
                                                </div>
                                                <div class="media-right">
                                                    <div><span class="badge badge-info badge-rounded pr-1">Updated </span><span>Task: #22 - Add some HD images - UI/UX Design</span> </div>
                                                    <small class="text-muted">17/10/18, 5:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-list  timeline-border timeline-info">
                                            <div class="timeline-info d-flex">
                                                <div class="media-left pr-2">
                                                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/U102-thumb.jpg" alt="madol">
                                                </div>
                                                <div class="media-right">
                                                    <div><span class="badge badge-info badge-rounded pr-1">Updated </span><span>Task: #23 - Check project quality - WEB Development</span> </div>
                                                    <small class="text-muted">17/10/18, 5:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="card-text">Quick Notes</h5>
                            <p class="subhead text-uppercase">My To Do Items</p>
                        </div>
                        <div class="card-body">
                            <div class="quicknote">
                                <div class="todo-box">
                                    <ul class="todo-list">
                                        <li class="todo-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="to-do custom-control-input" type="checkbox" id="0">
                                                <label class="custom-control-label" for="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr">
                                        </li>
                                        <li class="todo-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="to-do custom-control-input" type="checkbox" id="1">
                                                <label class="custom-control-label" for="1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr">
                                        </li>
                                        <li class="todo-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="to-do custom-control-input" type="checkbox" id="2">
                                                <label class="custom-control-label" for="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr">
                                        </li>
                                        <li class="todo-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="to-do custom-control-input" type="checkbox" id="3">
                                                <label class="custom-control-label" for="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr">
                                        </li>
                                        <li class="todo-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="to-do custom-control-input" type="checkbox" id="4">
                                                <label class="custom-control-label" for="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="light-grey-hr">
                                        </li>
                                        <li class="todo-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="to-do custom-control-input" type="checkbox" id="5">
                                                <label class="custom-control-label" for="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="new-todo">
                                <form method="post" enctype="multipart/form-data" id="add_todo" novalidate="novalidate">
                                    <div class="input-group">
                                        <input type="text" id="todo_data" name="todo_data" class="form-control" placeholder="New To Do">
                                        <span class="input-group-btn">
                                            <input type="hidden" name="userid" id="userid" value="U375">
                                            <button type="submit" class="todo-submit"><i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="card-text">Project Dashboard</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Web Development
                                    <span class="badge badge-primary badge-pill">28</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Website Design
                                    <span class="badge badge-secondary badge-pill">21</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    UI/UX Design
                                    <span class="badge badge-success badge-pill">42</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    CRM Project
                                    <span class="badge badge-warning badge-pill">7</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Admin Template
                                    <span class="badge badge-danger badge-pill">5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Data Science
                                    <span class="badge badge-info badge-pill">4</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Database Design
                                    <span class="badge badge-info badge-pill">5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--page content end-->
            <?php include_once('./includes/footer.php'); ?>