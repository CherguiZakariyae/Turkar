<?Php

/**
 *the content of the manage all Trips page.
 */
?>

<?php $title = _Trips; ?>

<?php ob_start(); ?>
<script>
    function edit(id) {
        document.getElementById('redirect').innerHTML = '<form style="display:none;" position="absolute" method="post" action="index.php"><input id="redirbtn" type="submit" name="id" value=' + id + '><input id="redirbtn" type="text" name="action" value="editTrip"></form>';
        document.getElementById('redirbtn').click();
    }

    function show(id) {
        document.getElementById('redirect').innerHTML = '<form style="display:none;" position="absolute" method="post" action="index.php"><input id="redirbtn" type="submit" name="id" value=' + id + '><input id="redirbtn" type="text" name="action" value="showTrip"></form>';
        document.getElementById('redirbtn').click();
    }

    function deleteA(id) {
        if (confirm("")) {
            document.getElementById('redirect').innerHTML = '<form style="display:none;" position="absolute" method="post" action="index.php"><input id="redirbtn" type="submit" name="id" value=' + id + '><input id="redirbtn" type="text" name="action" value="deleteTrip"></form>';
            document.getElementById('redirbtn').click();
        }

    }

    function newA() {
        document.getElementById('redirect').innerHTML = '<form style="display:none;" position="absolute" method="post" action="index.php"><input id="redirbtn" type="submit" name="action" value="newTrip"></form>';
        document.getElementById('redirbtn').click();
    }
</script>
<div class="row">
    <div class="col-md-12">
        <!-- /.card -->
        <div class="card card-danger">
            <div class="card-header bg-stlaform d-flex justify-content-between align-items-center">
                <h3 class="card-title m0"><?= _Trips; ?></h3>
            </div>
            <div class="card-body p-3">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center"><?= _Name; ?></th>
                            <th class="text-center"><?= _Status; ?></th>
                            <th>
                                <div class="d-flex align-items-center justify-content-center ">
                                    <a href="javascript:newA()" class="btn btn-sm btn-success bg-stlapse font-weight-bold"><?php echo _New; ?></a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($list != null) {
                            $L = count($list);
                            for ($i = 0; $i < $L; $i++) { ?>
                                <tr>
                                    <td><?= $list[$i]->getName(); ?></td>
                                    <td class="text-center"><?php if ($list[$i]->getEnable() == 0) { ?>
                                            <span class="badge badge-danger"><?= _Disable ?></span>
                                        <?php } else { ?>
                                            <span class="badge badge-success"><?= _Enable ?></span>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a title="Update" href="javascript:edit(<?= $list[$i]->getId(); ?>)" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                            <a title="Show" href="javascript:show(<?= $list[$i]->getId(); ?>)" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            <a title="Delete" onclick="return deleteA(<?= $list[$i]->getId(); ?>)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<div id="redirect"></div>


<?php require('Template.php'); ?>
<!-- Page specific script -->
<!-- DataTables -->
<link rel="stylesheet" href="Public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="Public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="Public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- DataTables  & Plugins -->
<script src="Public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="Public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="Public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="Public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="Public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="Public/plugins/jszip/jszip.min.js"></script>
<script src="Public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="Public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="Public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="Public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="Public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            columnDefs: [{
                    targets: [-1],
                    orderable: false
                } // Désactiver le tri pour la colonne sans nom (index 3)
            ]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>