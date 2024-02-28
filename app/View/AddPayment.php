<?Php

/**
 *the content of the add new Payment page.
 */
?>
<?php $title = _New . " " . _Payment; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title"><?= _New . " " . _Payment; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php" method="POST" id="addPayment">
                <div class="card-body">
                    <div class="form-group">
                        <label for="amount"><?php echo _Amount; ?></label>
                        <input type="text" class="form-control" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 45" id="amount" placeholder="<?php echo _Enter . " " . _Amount; ?>" name="amount">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="addPayment">
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


        $('#addPayment').validate({
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