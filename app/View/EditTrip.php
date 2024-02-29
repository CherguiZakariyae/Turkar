<?Php

/**
 *the content of the Edit  Trip page.
 */
?>

<?php $title = _Edit . " " . _Trip; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">

            <div class="card-header">
                <h3 class="card-title"><?php echo _Edit . " " . _Trip; ?></h3>
            </div>
            <form action="index.php" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="startLocationId"><?php echo _StartLocation; ?></label>
                                <select id="startLocationId" class="form-control" name="startLocationId" disabled>
                                    <option selected disabled><?php echo _SelectOne; ?></option>
                                    <?php
                                    if ($locations != null) {
                                        $L = count($locations);
                                        for ($i = 0; $i < $L; $i++) {
                                            if ($locations[$i]->getId() == $var->getStartLocationId()) {
                                    ?>
                                                <option value="<?php echo $locations[$i]->getId(); ?>" selected><?php echo $locations[$i]->getName(); ?> </option>
                                                <?php } else {
                                                if ($locations[$i]->getEnable()) {
                                                ?>
                                                    <option value="<?php echo $locations[$i]->getId(); ?>"><?php echo $locations[$i]->getName(); ?> </option>
                                    <?php
                                                }
                                            }
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price"><?php echo _Price; ?></label>
                                <input type="text" value="<?= $var->getPrice(); ?>" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 45" class="form-control" id="price" placeholder="<?php echo _Enter . " " . _Price; ?>" name="price" disabled>
                            </div>
                            <div class="form-group">
                                <label for="departureTime"><?php echo _DepartureTime; ?></label>
                                <input type="datetime-local" class="form-control float-right" id="departureTime" name="departureTime" value="<?= $var->getDepartureTime(); ?>" disabled>
                            </div>
                            <div class="form-check">
                                <?php
                                $enable = "unchecked";
                                if ($var->getEnable()) $enable = "checked";
                                ?>
                                <input type="checkbox" class="form-check-input" id="enable" name="enable" <?php echo $enable; ?> disabled>
                                <label class="form-check-label" for="enable"><?php echo _Valide; ?></label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="endLocationId"><?php echo _EndLocation; ?></label>
                                <select id="endLocationId" class="form-control" name="endLocationId" disabled>
                                    <option selected disabled><?php echo _SelectOne; ?></option>
                                    <?php
                                    if ($locations != null) {
                                        $L = count($locations);
                                        for ($i = 0; $i < $L; $i++) {
                                            if ($locations[$i]->getId() == $var->getEndLocationId()) {
                                    ?>
                                                <option value="<?php echo $locations[$i]->getId(); ?>" selected><?php echo $locations[$i]->getName(); ?> </option>
                                                <?php } else {
                                                if ($locations[$i]->getEnable()) {
                                                ?>
                                                    <option value="<?php echo $locations[$i]->getId(); ?>"><?php echo $locations[$i]->getName(); ?> </option>
                                    <?php
                                                }
                                            }
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="availableSeats"><?php echo _AvailableSeats; ?></label>
                                <input type="text" value="<?= $var->getAvailableSeats(); ?>" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 45" class="form-control" id="availableSeats" placeholder="<?php echo _Enter . " " . _AvailableSeats; ?>" name="availableSeats" disabled>
                            </div>
                            <div class="form-group">
                                <label for="status"><?php echo _Status; ?></label>
                                <select id="status" name="status" class="form-control select2bs4" disabled>
                                    <?php if ($var->getStatus() == "Started") { ?>
                                        <option value="Started" selected><?= _Started; ?></option>
                                        <option value="Soon"><?= _Soon; ?></option>
                                        <option value="Arrived"><?= _Arrived; ?></option>
                                        <option value="Processing"><?= _Processing; ?></option>
                                    <?php
                                    } else if ($var->getStatus() == "Soon") { ?>
                                        <option value="Started"><?= _Started; ?></option>
                                        <option value="Soon" selected><?= _Soon; ?></option>
                                        <option value="Arrived"><?= _Arrived; ?></option>
                                        <option value="Processing"><?= _Processing; ?></option>
                                    <?php
                                    } else if ($var->getStatus() == "Arrived") { ?>
                                        <option value="Started"><?= _Started; ?></option>
                                        <option value="Soon"><?= _Soon; ?></option>
                                        <option value="Arrived" selected><?= _Arrived; ?></option>
                                        <option value="Processing"><?= _Processing; ?></option>
                                    <?php
                                    } else if ($var->getStatus() == "Processing") { ?>
                                        <option value="Started"><?= _Started; ?></option>
                                        <option value="Soon"><?= _Soon; ?></option>
                                        <option value="Arrived"><?= _Arrived; ?></option>
                                        <option value="Processing" selected><?= _Processing; ?></option>
                                    <?php
                                    } else { ?>
                                        <option selected disabled><?php echo _SelectOne; ?></option>
                                        <option value="Started"><?= _Started; ?></option>
                                        <option value="Soon"><?= _Soon; ?></option>
                                        <option value="Arrived"><?= _Arrived; ?></option>
                                        <option value="Processing"><?= _Processing; ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- PRODUCT LIST -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Requests</h3>

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
                                    <ul class="products-list product-list-in-card pl-2 pr-2">
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="Att/me.jpg" alt="User Image" class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Zack</a>
                                                <div class="btn-group btn-group-sm float-right">
                                                    <a title="<?= _Accept; ?>" href="javascript:request()" class="btn btn-success"><i class="fas fa-check"></i></a>
                                                    <a title="<?= _Refuse; ?>" href="javascript:show()" class="btn btn-danger"><i class="fas fa-times"></i></a>
                                                </div>
                                                <span class="product-description">
                                                    Message asasas asasqqw asadsfdf
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="Att/PHOTO.jpeg" alt="User Image" class="img-size-50">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Youssef</a>
                                                <div class="btn-group btn-group-sm float-right">
                                                    <a title="<?= _Accept; ?>" href="javascript:request()" class="btn btn-success"><i class="fas fa-check"></i></a>
                                                    <a title="<?= _Refuse; ?>" href="javascript:show()" class="btn btn-danger"><i class="fas fa-times"></i></a>
                                                </div>
                                                <span class="product-description">
                                                    Please Accept
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-center">
                                    <a href="javascript:void(0)" class="uppercase"></a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="editTrip">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <a href="index.php?action=trips" class="btn btn-secondary"><?= _Quit; ?></a>
                    <!-- <button type="submit" id="save" class="btn btn-primary"><?= _Save; ?></button> -->
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
<?php $content = ob_get_clean(); ?>



<?php require('Template.php'); ?>