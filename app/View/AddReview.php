<?Php

/**
 *the content of the add new Review page.
 */
?>
<?php $title = _New . " " . _Review; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title"><?= _New . " " . _Review; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php" method="POST" id="addReview">
                <div class="card-body">
                    <div class="form-group">
                        <label for="rating"><?php echo _Rating; ?></label>
                        <select id="rating" name="rating" class="form-control">
                            <option selected disabled><?php echo _SelectOne; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment"><?php echo _Comment; ?></label>
                        <textarea id="comment" name="comment" class="form-control" rows="4" placeholder="<?php echo _Enter . " " . _Comment; ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="addReview">
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


        $('#addReview').validate({
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