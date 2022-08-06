<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detai Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detai Data Siswa
                            <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id_siswa = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM siswa WHERE id='$id_siswa' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $siswa = mysqli_fetch_array($query_run);
                                ?>
                                    <div class="mb-3">
                                        <label>Nama Siswa</label>
                                        <p class="form-control">
                                            <?= $siswa['nama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tanggal Lahir</label>
                                        <p class="form-control">
                                            <?= $siswa['tanggal_lahir'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email Siswa</label>
                                        <p class="form-control">
                                            <?= $siswa['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nomer Handphone</label>
                                        <p class="form-control">
                                            <?= $siswa['no_hp'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Alamat</label>
                                        <p class="form-control">
                                            <?= $siswa['alamat'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jurusan</label>
                                        <p class="form-control">
                                            <?= $siswa['jurusan'];?>
                                        </p>
                                    </div>

                                    <?php
                            }
                            else {
                                echo "<h4>Data Siswa Tidak Ditemukan</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>