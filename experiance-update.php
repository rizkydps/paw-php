<?php
require_once('koneksi/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $perusahaan = $_POST['nama_perusahaan'];
    $jabatan = $_POST['jabatan'];
    $mulai = $_POST['mulai'];
    $akhir = $_POST['akhir'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE penglaman SET nama_perusahaan='$perusahaan', jabatan='$jabatan', mulai='$mulai', akhir='$akhir', deskripsi='$deskripsi' WHERE id='$id'";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:manajemen-pengalaman.php?update=sukses');
    } else {
        header('location:manajemen-pengalaman.php?update=gagal');
    }
} else {
    header('location:manajemen-pengalaman.php');
}