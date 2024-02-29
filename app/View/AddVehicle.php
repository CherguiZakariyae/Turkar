<?Php

/**
 *the content of the add new Vehicle page.
 */
?>
<?php $title = _New . " " . _Vehicle; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title"><?= _New . " " . _Vehicle; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php" method="POST" id="addVehicle" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name"><?= _Name; ?></label>
                                <input type="text" class="form-control" id="name" placeholder="<?= _Enter . " " . _Name; ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label for="brand"><?= _Brand; ?></label>
                                <input type="text" class="form-control" id="brand" placeholder="<?= _Enter . " " . _Brand; ?>" name="brand">
                            </div>
                            <div class="form-group">
                                <label for="picture"><?= _Picture; ?></label>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="picture" name="picture">
                                    <label class="custom-file-label" for="picture"><?= _ChooseFile; ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="enable" name="enable" checked>
                                    <label class="form-check-label" for="enable"><?= _Enable; ?></label>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="plateNumber"><?= _PlateNumber; ?></label>
                                <input type="text" class="form-control" id="plateNumber" placeholder="<?= _Enter . " " . _PlateNumber; ?>" name="plateNumber">
                            </div>
                            <div class="form-group">
                                <label for="model"><?php echo _Model; ?></label>
                                <input type="text" class="form-control" id="model" placeholder="<?php echo _Enter . " " . _Model; ?>" name="model">
                            </div>
                            <div class="form-group">
                                <label for="year"><?php echo _Year; ?></label>
                                <input type="text" class="form-control" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 45" id="year" placeholder="<?php echo _Enter . " " . _Year; ?>" name="year">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="addVehicle">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <a href="index.php?action=manageVehicles" class="btn btn-secondary"><?= _Quit; ?></a>
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

<!-- bs-custom-file-input -->
<script src="Public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
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


        $('#addVehicle').validate({
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