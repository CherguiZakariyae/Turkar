<?php $title = _Profile; ?>

<?php ob_start(); ?>

<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="Att/<?= $var->getImagePath(); ?>" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $var->getUsername(); ?></h3>

                <p class="text-muted text-center">⭐⭐⭐⭐⭐</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b><?= _Vehicles ?></b> <a class="float-right"><?= count($var->getVehicles()); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b><?= _Trips ?></b> <a class="float-right"><?= count($var->getTrips()); ?></a>
                    </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <!-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <!-- /.tab-pane -->
                    <!-- /.tab-pane -->

                    <div class="active tab-pane" id="settings">
                        <form class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label"><?= _UserName; ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="<?= _UserName; ?>" value="<?= $var->getUserName(); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cin" class="col-sm-2 col-form-label">CIN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cin" placeholder="CIN" value="<?= $var->getCIN(); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label"><?= _Email; ?></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="<?= _Email; ?>" value="<?= $var->getEmail(); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label"><?= _Phone; ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" placeholder="<?= _Phone; ?>" value="<?= $var->getPhone(); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="imagePath" class="col-sm-2 col-form-label">Image Path</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture">
                                        <label class="custom-file-label" for="picture"><?= _ChooseFile; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
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