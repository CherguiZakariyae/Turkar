<?Php

/**
 *the content of the add new Request page.
 */
?>
<?php $title = _New . " " . _Request; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title"><?= _New . " " . _Request; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php" method="POST" id="addRequest">
                <div class="card-body">
                    <div class="form-group">
                        <label for="pets"><?php echo _Pets; ?></label>
                        <select id="pets" name="pets" class="form-control">
                            <option selected disabled><?php echo _SelectOne; ?></option>
                            <option value="None"><?= _None; ?></option>
                            <option value="Cat"><?= _Cat; ?></option>
                            <option value="Dog"><?= _Dog; ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message"><?php echo _Message; ?></label>
                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="<?php echo _Enter . " " . _Message; ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="addRequest">
                        <input type="hidden" class="form-control" id="idTrip" name="idTrip" value="<?= $_POST['id']; ?>">
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


        $('#addRequest').validate({
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