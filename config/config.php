<?php
//Proses Koneksi ke Database
$con = mysqli_connect("localhost", "root","", "posyandu");
if(mysqli_connect_error()){
    echo mysqli_connect_error();
}
