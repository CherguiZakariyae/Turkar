<?Php

/**
 *the content of the add new Trip page.
 */
?>
<?php $title = _New . " " . _Trip; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title"><?= _New . " " . _Trip; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php" method="POST" id="addTrip">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="startLocationId"><?php echo _StartLocation; ?></label>
                                <select id="startLocationId" class="form-control" name="startLocationId">
                                    <option selected disabled><?php echo _SelectOne; ?></option>
                                    <?php
                                    if ($locations != null) {
                                        $L = count($locations);
                                        for ($i = 0; $i < $L; $i++) { ?>
                                            <option value="<?php echo $locations[$i]->getId(); ?>"><?php echo $locations[$i]->getName(); ?> </option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price"><?php echo _Price; ?></label>
                                <input type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 45" class="form-control" id="price" placeholder="<?php echo _Enter . " " . _Price; ?>" name="price">
                            </div>
                            <div class="form-group">
                                <label for="departureTime"><?php echo _DepartureTime; ?></label>
                                <input type="datetime-local" class="form-control float-right" id="departureTime" name="departureTime">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="enable" name="enable" checked>
                                <label class="form-check-label" for="enable"><?= _Enable; ?></label>
                                <br>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="endLocationId"><?php echo _EndLocation; ?></label>
                                <select id="endLocationId" class="form-control" name="endLocationId">
                                    <option selected disabled><?php echo _SelectOne; ?></option>
                                    <?php
                                    if ($locations != null) {
                                        $L = count($locations);
                                        for ($i = 0; $i < $L; $i++) { ?>
                                            <option value="<?php echo $locations[$i]->getId(); ?>"><?php echo $locations[$i]->getName(); ?> </option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="availableSeats"><?php echo _AvailableSeats; ?></label>
                                <input type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 45" class="form-control" id="availableSeats" placeholder="<?php echo _Enter . " " . _AvailableSeats; ?>" name="availableSeats">
                            </div>
                            <div class="form-group">
                                <label for="status"><?php echo _Status; ?></label>
                                <select id="status" name="status" class="form-control">
                                    <option selected disabled><?php echo _SelectOne; ?></option>
                                    <option value="Started"><?= _Started; ?></option>
                                    <option value="Soon"><?= _Soon; ?></option>
                                    <option value="Arrived"><?= _Arrived; ?></option>
                                    <option value="Processing"><?= _Processing; ?></option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="addTrip">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <a href="index.php?action=manageTrips" class="btn btn-secondary"><?= _Quit; ?></a>
                    <button type="submit" id="save" class="btn btn-primary"><?= _Save; ?></button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>

<?php $content = ob_get_clean(); ?>



<?php require('Template.php'); ?>
<!-- controll inputs-->
<script>
    $(function() {
        $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Please check your input."
        );


        $('#addTrip').validate({
            rules: {
                name: {
                    required: true,
                    regex: "^[A-Za-z0-9-_\u00C0-\u00FF'.\\s]{1,40}$"
                },
                enable: {
                    required: true
                },
            },
            messages: {
                name: {
                    required: "<?= _Pleaseenteravalidvariable; ?>",
                    regex: "<?= _Pleaseenteravalidvariable; ?>"
                },

                enable: "<?= _Pleaseenablethischeck; ?>"
            },
            errorElement: 'span',
            errorClass: 'help-block text-danger',
            errorPlacement: function(error, element) {
                error.prepend("<i class='fa fa-warning'></i> ");
                error.appendTo($(element).parent());
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>