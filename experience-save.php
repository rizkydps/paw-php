<?php
require_once('koneksi/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = strip_tags(mysqli_escape_string($connectDb, $_POST['title']));
    $tools = strip_tags(mysqli_escape_string($connectDb, $_POST['tools']));
    $dateStart = strip_tags(mysqli_escape_string($connectDb, $_POST['date_start']));
    $dateEnd = strip_tags(mysqli_escape_string($connectDb, $_POST['date_end']));
    $description = strip_tags(mysqli_escape_string($connectDb, $_POST['description']));

    $query = "INSERT INTO experience(
                    date_start,
                    date_end,
                    title,
                    tools,
                    description
                ) VALUES(
                    '{$dateStart}', 
                    '{$dateEnd}',
                    '{$title}',
                    '{$tools}',
                    '{$description}'
                )";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:manajemen-pengalaman.php?tambah=sukses');
    } else {
        header('location:manajemen-pengalaman.php?tambah=gagal');
    }
} else {
    header('location:manajemen-pengalaman.php');
}