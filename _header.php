<?php
session_start();
if($_SESSION['admin_username']== ''){
    header("Location:../auth/login.php");
    exit();
} 
require "../config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Posyandu</title>
    <link rel="stylesheet" href="../Assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets1/css/simple-sidebar.css">
    <link rel="stylesheet" href="../Assets1/DataTables/datatables.min.css">     
</head>
<body>
    <script src="../Assets1/js/jquery.js"></script>
    <script src="../Assets1/js/bootstrap.min.js"></script>
    <script src="../Assets1/DataTables/datatables.min.js"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>Posyandu</b></span></a>
                </li>
                <li>
                    <a href="../Dashboard/Home.php">Home</a>
                </li>
                <li>
                    <a href="../Pasien/data.php">Orangtua</a>
                </li>
                <li>
                    <a href="../Balita/index.php">Balita</a>
                </li>
                <li>
                    <a href="../Imunisasi/index.php">Imunisasi</a>
                </li>
                <li>
                    <a href="../Vitamin/index.php">Vitamin</a>
                </li>
                <li>
                    <a href="../Laporan/index.php">Laporan</a>
                </li>
                <li>
                    <a href="../auth/logout.php"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">