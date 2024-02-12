<?Php

/**
 *the content of the edit Location page.
 */
?>

<?php $title = _Edit . " " . _Location; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">

            <div class="card-header">
                <h3 class="card-title"><?= _Edit . " " . _Location; ?></h3>
            </div>
            <form action="index.php" method="POST" id="editLocation">
                <div class="card-body">

                    <div class="form-group">
                        <label for="name"><?= _Name; ?></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="<?= _Enter . " " . _Name; ?>" value="<?= $var->getName() ?>">
                    </div>

                    <div class="form-check">
                        <?php
                        $enable = "unchecked";
                        if ($var->getEnable()) $enable = "checked";
                        ?>
                        <input type="checkbox" class="form-check-input" id="enable" name="enable" <?= $enable; ?>>
                        <label class="form-check-label" for="enable"><?= _Enable; ?></label><br>

                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="saveLocation">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $var->getId() ?>">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <a href="index.php?action=manageLocations" class="btn btn-secondary"><?= _Quit; ?></a>
                    <button type="submit" id="save" class="btn btn-primary"><?= _Save; ?></button>
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


        $('#editLocation').validate({
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