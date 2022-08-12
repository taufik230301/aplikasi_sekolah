<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/components/header');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/AdminLTELogo.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view('admin/components/navbar');?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('admin/components/sidebar');?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Siswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Siswa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Emails</th>
                                                <th>Nama Lengkap</th>
                                                <th>Alamat</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Agama</th>
                                                <th>NIK</th>
                                                <th>Jenis Kelamin</th>
                                                <th>NIDN</th>
                                                <th>Ijazah</th>
                                                <th>SKHUN</th>
                                                <th>Foto</th>
                                                <th>Kelas</th>
                                                <th>Nilai IPA</th>
                                                <th>Nilai IPS</th>
                                                <th>Nilai MTK</th>
                                                <th>Nilai Bahasa Inggris</th>
                                                <th>Nilai Bahasa Indonesia</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                                <td>X</td>

                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover">
                                                            <a type="button" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit">
                                                                Edit <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover">
                                                            <a type="button" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#hapus">
                                                                Hapus <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>


                                            </tr>

                                            <!-- Modal Edit Siswa -->
                                            <div class="modal fade" id="edit" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Siswa
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Hapus Siswa -->
                                            <div class="modal fade" id="hapus" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Siswa
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('admin/components/js'); ?>
</body>

</html>