<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/components/header');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Ditambahkan!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_file_gambar_berita')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Ditambahkan!",
        icon: "error"
    });
    </script>
    <?php } ?>

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
                            <h1 class="m-0">Data Pengumuman</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pengumuman</li>
                            </ol>
                        </div><!-- /.col -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary ml-2 mt-3" data-toggle="modal"
                            data-target="#tambah">
                            Tambah Pengumuman
                        </button>


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
                                                <th>Judul Pengumuman</th>
                                                <th>Isi Pengumuman</th>
                                                <th>Foto Pengumuman</th>
                                                <th>Tanggal Publish</th>
                                                <th>Penulis Pengumuman</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 0;
                                            foreach($pengumuman as $i)
                                            :
                                            $no++;
                                            $id_pengumuman = $i['id_pengumuman'];
                                            $judul_pengumuman = $i['judul_pengumuman'];
                                            $isi_pengumuman = $i['isi_pengumuman'];
                                            $foto_pengumuman = $i['foto_pengumuman'];
                                            $created_at = $i['created_at'];
                                            $penulis_pengumuman = $i['penulis_pengumuman'];
                                            ?>

                                            <tr>
                                                <td><?=$no?></td>
                                                <td><?=$judul_pengumuman?></td>
                                                <td><?=$isi_pengumuman?>
                                                </td>
                                                <td>
                                                    <center>

                                                        <a href="<?=base_url();?>assets/gambar/<?=$foto_pengumuman?>"
                                                            target="_blank" rel="Gambar Pengumuman">

                                                            <img src="<?=base_url();?>assets/gambar/<?=$foto_pengumuman?>"
                                                                alt="Gambar Pengumuman" style="width: 25%">

                                                        </a>

                                                    </center>
                                                </td>
                                                <td><?=$created_at?></td>
                                                <td><?=$penulis_pengumuman?></td>

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

                                            <!-- Modal Edit Pengumuman -->
                                            <div class="modal fade" id="edit" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                Pengumuman
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form
                                                                action="<?=base_url();?>Data_Pengumuman/edit_pengumuman"
                                                                enctype="multipart/form-data" method="POST">

                                                                <div class="form-group">
                                                                    <label for="judul_pengumuman">Judul
                                                                        Pengumuman</label>
                                                                    <input type="text" class="form-control"
                                                                        id="judul_pengumuman" name="judul_pengumuman"
                                                                        aria-describedby="emailHelp"
                                                                        value="<?=$judul_pengumuman?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="isi_pengumuman">Isi Pengumuman</label>
                                                                    <textarea class="form-control" id="isi_pengumuman"
                                                                        name="isi_pengumuman"
                                                                        rows="3"><?=$isi_pengumuman?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_pengumuman">Foto Pengumuman</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_pengumuman" name="foto_pengumuman"
                                                                        aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="created_at">Tanggal Publish</label>
                                                                    <input type="date" class="form-control"
                                                                        id="created_at" name="created_at"
                                                                        aria-describedby="emailHelp"
                                                                        value="<?=$created_at?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="penulis_pengumuman">Penulis
                                                                        Pengumuman</label>
                                                                    <input type="text" class="form-control"
                                                                        id="penulis_pengumuman"
                                                                        name="penulis_pengumuman"
                                                                        aria-describedby="emailHelp"
                                                                        value="<?=$penulis_pengumuman?>">
                                                                </div>

                                                                <input type="text" value="<?=$foto_pengumuman?>"
                                                                    name="foto_pengumuman_old" hidden>

                                                                <input type="text" value="<?=$id_pengumuman?>"
                                                                    name="id_pengumuman" hidden>


                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Hapus Pengumuman -->
                                            <div class="modal fade" id="hapus" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus
                                                                Pengumuman
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form
                                                                action="<?=base_url();?>Data_Pengumuman/hapus_pengumuman"
                                                                enctype="multipart/form-data" method="POST">
                                                                <div class="row">
                                                                    <div class="col">

                                                                        <input type="text" name="id_pengumuman"
                                                                            value="<?=$id_pengumuman?>" hidden>

                                                                        <input type="text" name="foto_pengumuman_old"
                                                                            value="<?=$foto_pengumuman?>" hidden>

                                                                        <p>Apakah kamu yakin ingin menghapus data
                                                                            ini?</i></b></p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal">Tidak</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Ya</button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- Modal Tambah Pengumuman -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah
                                            Pengumuman
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?=base_url();?>Data_pengumuman/tambah_pengumuman"
                                            enctype="multipart/form-data" method="POST">
                                            <div class="form-group">
                                                <label for="judul_pengumuman">Judul Pengumuman</label>
                                                <input type="text" class="form-control" id="judul_pengumuman"
                                                    name="judul_pengumuman" aria-describedby="emailHelp" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="isi_pengumuman">Isi Pengumuman</label>
                                                <textarea class="form-control" id="isi_pengumuman" name="isi_pengumuman"
                                                    rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="foto_pengumuman">Foto Pengumuman</label>
                                                <input type="file" class="form-control" id="foto_pengumuman"
                                                    name="foto_pengumuman" aria-describedby="emailHelp" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="created_at">Tanggal Publish</label>
                                                <input type="date" class="form-control" id="created_at"
                                                    name="created_at" aria-describedby="emailHelp" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="penulis_pengumuman">Penulis Pengumuman</label>
                                                <input type="text" class="form-control" id="penulis_pengumuman"
                                                    name="penulis_pengumuman" aria-describedby="emailHelp" required>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
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