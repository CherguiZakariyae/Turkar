<?php $title = _Trips; ?>

<?php ob_start(); ?>

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
                        <th>Trip ID</th>
                        <th>Start Location</th>
                        <th>End Location</th>
                        <th>Departure Time</th>
                        <th>Available Seats</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center ">
                                <a href="javascript:newA()" class="btn btn-sm btn-success bg-stlapse font-weight-bold"><?php echo _New; ?></a>
                            </div>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                            <td>aaaaaa</td>
                            <td>bbbbbb</td>
                            <td>26/01/2024 12:00</td>
                            <td>2</td>
                            <td>100</td>
                            <td><span class="badge badge-success">Arrived</span></td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a title="Editer" href="javascript:edit(1)" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a title="Visionner" href="javascript:show(1)" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    <a title="Supprimer" onclick="return deleteA(1)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                            <td>cccccc</td>
                            <td>dddddd</td>
                            <td>26/01/2024 12:00</td>
                            <td>2</td>
                            <td>150</td>
                            <td><span class="badge badge-danger">Soon</span></td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a title="Editer" href="javascript:edit(1)" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a title="Visionner" href="javascript:show(1)" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    <a title="Supprimer" onclick="return deleteA(1)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <!-- <tr>
                            <th>Trip ID</th>
                            <th>Start Location</th>
                            <th>End Location</th>
                            <th>Departure Time</th>
                            <th>Available Seats</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr> -->
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