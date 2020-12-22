<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-white mb-2 shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content pt-5 pl-4 pr-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">IP SERVER</h5>
                        </div>
                        <a href="" title="View Data" data-toggle="modal" data-target="#right"
                            style="text-decoration :none;" class="bg-dark rounded">
                            <div class="primary coloured-icon row"><i
                                    class="fas fa-check fa-3x bg-primary mt-auto p-3 ml-2 rounded-left"></i>
                                <div class="ml-3 mt-4">
                                    <h3>NORMAL</h3>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
                <div class="bg-dark"></div>

                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">IP WEBSITE</h5>
                        </div>
                        <a href="" title="View Data" data-toggle="modal" data-target="#left"
                            style="text-decoration :none;" class="rounded">
                            <div class="primary coloured-icon row"><i
                                    class="fas fa-exclamation-triangle fa-3x bg-primary mt-auto p-3 ml-2 rounded-left"></i>
                                <div class="ml-3 mt-4">
                                    <h3>ABNORMAL</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->



<!-- Main Footer -->
<footer class="main-footer">
    <div class="text-center">
        <strong cl ass="text-center">Copyright &copy; <?= date('Y') ?> <a
                href="https://imaniprima.co.id/">ImaniPrima.co.id
            </a></strong>
    </div>
</footer>


<!-- REQUIRED SCRIPTS -->
<div class="modal fade" id="left" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalCenterTitle">List Abnormal</h3>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Server Name</th>
                            <th>Address</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                    <i class="fa fa-times"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Modal untuk websitie -->
<div class="modal fade" id="right" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalCenterTitle">List Abnormal</h3>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Server Name</th>
                            <th>Code</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>




                    </tbody>
                </table>
            </div>

      
      <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                    <i class="fa fa-times"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>