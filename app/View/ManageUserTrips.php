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
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= _Trips ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead style="background-color: #e31a33;">
                        <th><?= _StartLocation; ?></th>
                        <th><?= _EndLocation; ?></th>
                        <th><?= _DepartureTime; ?></th>
                        <th><?= _AvailableSeats; ?></th>
                        <th><?= _Price; ?></th>
                        <th><?= _Status; ?></th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center ">
                                <a href="javascript:newA()" class="btn btn-sm btn-success bg-stlapse font-weight-bold"><?php echo _New; ?></a>
                            </div>
                        </th>
                    </thead>
                    <tbody>
                        <?php
                        if ($list != null) {
                            $L = count($list);
                            for ($i = 0; $i < $L; $i++) {
                                if ($list[$i]->getStatus() == "Arrived")
                                    $badge = "badge-success";
                                if ($list[$i]->getStatus() == "Started")
                                    $badge = "badge-warning";
                                if ($list[$i]->getStatus() == "Soon")
                                    $badge = "badge-danger";
                                if ($list[$i]->getStatus() == "Processing")
                                    $badge = "badge-info"; ?>
                                <tr>
                                    <td><?= $list[$i]->getStartLocation()->getName(); ?></td>
                                    <td><?= $list[$i]->getEndLocation()->getName(); ?></td>
                                    <td><?= $list[$i]->getDepartureTime(); ?></td>
                                    <td><?= $list[$i]->getAvailableSeats(); ?></td>
                                    <td><?= $list[$i]->getPrice(); ?></td>
                                    <td><span class="badge <?= $badge ?>"><?= $list[$i]->getStatus(); ?></span></td>
                                    <td class="text-center py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a title="Editer" href="javascript:edit(<?= $list[$i]->getId(); ?>)" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                            <a title="Visionner" href="javascript:show(<?= $list[$i]->getId(); ?>)" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            <a title="Supprimer" onclick="return deleteA(<?= $list[$i]->getId(); ?>)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
    <!-- /.col -->
</div>
<!-- /.row -->

<?php $content = ob_get_clean(); ?>

<?php require('Template.php'); ?>
<div id="redirect"></div>

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