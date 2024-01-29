<?php $title = _Home; ?>

<?php ob_start(); ?>

<div class="row text-center">
    <!-- /.col -->
    <div class="col-12 col-sm-4 col-md-4">
        <div class="info-box mb-4">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-car"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Vehicles</span>
                <span class="info-box-number">9</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-4 col-md-4">
        <div class="info-box mb-4">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-road"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Trips</span>
                <span class="info-box-number">74</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-4 col-md-4">
        <div class="info-box mb-4">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Members</span>
                <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="row">
    <!-- Left col -->
    <div class="col-md-8">
        <!-- TABLE: Today Trips -->
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Today Latest Trips</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Trip ID</th>
                                <th>Start Location</th>
                                <th>End Location</th>
                                <th>Departure Time</th>
                                <th>Available Seats</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>aaaaaa</td>
                                <td>bbbbbb</td>
                                <td>26/01/2024 12:00</td>
                                <td>2</td>
                                <td>100</td>
                                <td><span class="badge badge-success">Arrived</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>aaaaaa</td>
                                <td>bbbbbb</td>
                                <td>26/01/2024 12:00</td>
                                <td>2</td>
                                <td>100</td>
                                <td><span class="badge badge-warning">Started</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>aaaaaa</td>
                                <td>bbbbbb</td>
                                <td>26/01/2024 12:00</td>
                                <td>2</td>
                                <td>100</td>
                                <td><span class="badge badge-danger">Soon</span></td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>aaaaaa</td>
                                <td>bbbbbb</td>
                                <td>26/01/2024 12:00</td>
                                <td>2</td>
                                <td>100</td>
                                <td><span class="badge badge-info">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Trip</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Trips</a>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->

    <div class="col-md-4">
        <!-- USERS LIST -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Most Famous Trips Organizer</h3>

                <div class="card-tools">
                    <span class="badge badge-danger">8</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <ul class="users-list clearfix">
                    <li>
                        <img src="Public/dist/img/user1-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Alexander(42)</a>
                        <span class="users-list-date center"><small>⭐(4.5)</small></span>
                    </li>
                    <li>
                        <img src="Public/dist/img/user8-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Norman(36)</a>
                        <span class="users-list-date center"><small>⭐(5)</small></span>
                    </li>
                    <li>
                        <img src="Public/dist/img/user7-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">Jane(22)</a>
                        <span class="users-list-date center"><small>⭐(4.8)</small></span>
                    </li>
                    <li>
                        <img src="Public/dist/img/user6-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="#">John(21)</a>
                        <span class="users-list-date center"><small>⭐(4.7)</small></span>
                    </li>
                </ul>
                <!-- /.users-list -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <a href="javascript:">View All Users</a>
            </div>
            <!-- /.card-footer -->
        </div>
        <!--/.card -->
    </div>
    <!-- /.col -->
</div>

<?php $content = ob_get_clean(); ?>

<?php require('Template.php'); ?>