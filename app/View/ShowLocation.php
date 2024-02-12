<?Php

/**
 *the content of the show  Location page.
 */
?>

<?php $title = _Show . " " . _Location; ?>



<?php ob_start(); ?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-danger">

            <div class="card-header">
                <h3 class="card-title"><?php echo _Show . " " . _Location; ?></h3>
            </div>
            <form action="index.php" method="POST">
                <div class="card-body">

                    <div class="form-group">
                        <label for="name"><?php echo _Name; ?></label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $var->getName() ?>" disabled>
                    </div>

                    <div class="form-check">
                        <?php
                        $enable = "unchecked";
                        if ($var->getEnable()) $enable = "checked";
                        ?>
                        <input type="checkbox" class="form-check-input" id="enable" name="enable" <?php echo $enable; ?> disabled>
                        <label class="form-check-label" for="enable"><?php echo _Valide; ?></label>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="action" name="action" value="manageLocations">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary"><?php echo _Quit; ?></button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
<?php $content = ob_get_clean(); ?>



<?php require('Template.php'); ?>