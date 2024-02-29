<?Php

/**
 *the content of the Show Vehicle page.
 */
?>

<?php $title = _Show . " " . _Vehicle; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">

            <div class="card-header">
                <h3 class="card-title"><?= _Show . " " . _Vehicle; ?></h3>
            </div>
            <form action="index.php" method="POST" id="ShowVehicle" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name"><?= _Name; ?></label>
                                <input type="text" class="form-control" id="name" placeholder="<?= _Enter . " " . _Name; ?>" name="name" value="<?= $var->getName(); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="brand"><?= _Brand; ?></label>
                                <input type="text" class="form-control" id="brand" placeholder="<?= _Enter . " " . _Brand; ?>" name="brand" value="<?= $var->getBrand(); ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="plateNumber"><?= _PlateNumber; ?></label>
                                <input type="text" class="form-control" id="plateNumber" placeholder="<?= _Enter . " " . _PlateNumber; ?>" name="plateNumber" value="<?= $var->getPlateNumber(); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="model"><?php echo _Model; ?></label>
                                <input type="text" class="form-control" id="model" placeholder="<?php echo _Enter . " " . _Model; ?>" name="model" value="<?= $var->getModel(); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="year"><?php echo _Year; ?></label>
                                <input type="text" class="form-control" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 45" id="year" placeholder="<?php echo _Enter . " " . _Year; ?>" name="year" value="<?= $var->getYear(); ?>" disabled>
                            </div>
                            <div class="form-check">
                                <?php
                                $enable = "unchecked";
                                if ($var->getEnable()) $enable = "checked";
                                ?>
                                <input type="checkbox" class="form-check-input" id="enable" name="enable" <?= $enable; ?> disabled>
                                <label class="form-check-label" for="enable"><?= _Enable; ?></label><br>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Carousel</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="Att/<?= $var->getPicture(); ?>">
                                            </div>
                                            <!-- <div class="carousel-item">
                                                <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                                            </div> -->
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                <i class="fas fa-chevron-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-custom-icon" aria-hidden="true">
                                                <i class="fas fa-chevron-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="saveVehicle">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <a href="index.php?action=manageVehicles" class="btn btn-secondary"><?= _Quit; ?></a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
<?php $content = ob_get_clean(); ?>



<?php require('Template.php'); ?>
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


        $('#ShowVehicle').validate({
            rules: {
                name: {
                    required: true,
                    regex: "^[A-Za-z0-9-_\u00C0-\u00FF'.\\s]{1,40}$"
                },

            },
            messages: {
                name: {
                    required: "<?= _Pleaseenteravalidvariable; ?>",
                    regex: "<?= _Pleaseenteravalidvariable; ?>"
                },


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