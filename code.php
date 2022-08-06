<?php
session_start();
require 'koneksi.php';

if (isset($_POST['hapus_data_siswa'])) {
    $id_siswwa = mysqli_real_escape_string($con, $_POST['hapus_data_siswa']);

    $query = "DELETE FROM siswa WHERE id='$id_siswwa' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Data Siswa Berhasil Dihapus";
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Siswa Gagal Dihapus";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['ubah_data_siswa'])) {
    $id_siswwa = mysqli_real_escape_string($con, $_POST['id_siswa']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $tgl_lahir = mysqli_real_escape_string($con, $_POST['tanggal_lahir']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "UPDATE siswa SET nama='$nama', tanggal_lahir='$tgl_lahir', email='$email', no_hp='$no_hp', alamat='$alamat', jurusan='$jurusan' WHERE id='$id_siswwa' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Data Siswa Berhasil Diubah";
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Siswa Gagal Diubah";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['simpan'])) {
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $tgl_lahir = mysqli_real_escape_string($con, $_POST['tanggal_lahir']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "INSERT INTO siswa (nama,tanggal_lahir,email,no_hp,alamat,jurusan) VALUES ('$nama','$tgl_lahir','$email','$no_hp','$alamat','$jurusan')";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Data Siswa Berhasil Disimpan";
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Siswa Gagal Disimpan";
        header("Location: index.php");
        exit(0);
    }
}