<?php
   session_start();
   require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <?php include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit Data Siswa
                            <a href="index.php" class="btn btn-danger float-end"> Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php  
                             if (isset($_GET['id'])) {
                               $id_siswa = mysqli_real_escape_string($con, $_GET['id']);
                               $query = "SELECT * FROM siswa WHERE id='$id_siswa' ";
                               $query_run = mysqli_query($con, $query);

                               if(mysqli_num_rows($query_run) > 0){
                                $siswa = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="post">
                                    <input type="hidden" name="id_siswa" value="<?= $siswa['id']; ?>">
                            <div class="mb-3">
                                <label>Nama Siswa</label>
                                <input type="text" name="nama" class="form-control" value="<?= $siswa['nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control" value="<?= $siswa['tanggal_lahir']; ?>">
                            </div>
                            <div class="mb-3">
                                <label>Email Siswa</label>
                                <input type="email" name="email" class="form-control" value="<?= $siswa['email']; ?>">
                            </div>
                            <div class="mb-3">
                                <label>Nomer Handphone</label>
                                <input type="text" name="no_hp" class="form-control" value="<?= $siswa['no_hp']; ?>">
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $siswa['alamat']; ?>">
                            </div>
                            <div class="mb-3">
                                <label>Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="<?= $siswa['jurusan']; ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="ubah_data_siswa" class="btn btn-primary">Ubah Data Siswa</button>
                            </div>
                        </form>
                        <?php
                               }
                               else{
                                echo "<h4>Data Siswa Tidak Ditemukan</h4>";
                               }
                             }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>