<?php $title = _Profile; ?>

<?php ob_start(); ?>

<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="Att/me.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Ahmad</h3>

                <p class="text-muted text-center">⭐⭐⭐⭐</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Reviews</b> <a class="float-right">68</a>
                    </li>
                    <li class="list-group-item">
                        <b><?= _Vehicles ?></b> <a class="float-right">1</a>
                    </li>
                    <li class="list-group-item">
                        <b><?= _Trips ?></b> <a class="float-right">20</a>
                    </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-id-card mr-1"></i> CIN</strong>

                <p class="text-muted">
                    CC22343
                </p>

                <hr>

                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                <p class="text-muted">Ahmad@ahmad.com</p>

                <hr>

                <strong><i class="fas fa-phone mr-1"></i> Phone</strong>

                <p class="text-muted">
                    002334556775
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Reviews</a></li>
                    <!--<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li> -->
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="Public/dist/img/user1-128x128.jpg" alt="user image">
                                <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">⭐⭐⭐⭐⭐ - 12/01/2024 7:30</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                I had a great experience riding with Ahmad! He was punctual, friendly,
                                and a very safe driver. His vehicle was clean and comfortable,
                                making for a pleasant journey. I would definitely ride with him again and highly
                                recommend him to others looking for a reliable driver.
                            </p>
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post clearfix">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="Public/dist/img/user7-128x128.jpg" alt="User Image">
                                <span class="username">
                                    <a href="#">Sarah Ross</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">⭐⭐⭐ - 14/01/2024 13:30</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Not bad for a beginner.
                            </p>
                        </div>
                        <!-- /.post -->
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="Public/dist/img/user8-128x128.jpg" alt="user image">
                                <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">⭐⭐⭐⭐⭐ - 12/01/2024 7:30</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Ahmad was an excellent driver! He was very courteous and drove safely throughout the trip.
                                His car was clean and comfortable, and he made sure I arrived at my destination on time.
                                I would definitely ride with him again!
                            </p>
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post clearfix">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="Public/dist/img/user5-128x128.jpg" alt="User Image">
                                <span class="username">
                                    <a href="#">Sarah Ross</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">⭐⭐⭐ - 14/01/2024 13:30</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Not bad for a beginner.
                            </p>
                        </div>
                        <!-- /.post -->
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="Public/dist/img/user3-128x128.jpg" alt="user image">
                                <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">⭐⭐⭐⭐⭐ - 12/01/2024 7:30</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                I had a great experience riding with Ahmad! He was punctual, friendly,
                                and a very safe driver. His vehicle was clean and comfortable,
                                making for a pleasant journey. I would definitely ride with him again and highly
                                recommend him to others looking for a reliable driver.
                            </p>
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post clearfix">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="Public/dist/img/avatar5.png" alt="User Image">
                                <span class="username">
                                    <a href="#">Sarah Ross</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">⭐⭐⭐ - 14/01/2024 13:30</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Not bad for a beginner.
                            </p>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- /.tab-pane -->
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<?php $content = ob_get_clean(); ?>

<?php require('Template.php'); ?>