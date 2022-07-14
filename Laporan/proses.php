<?php require "../config/config.php";
if(isset($_POST['Proses'])){
    $Nama_Pasien = htmlspecialchars($_POST['Nama_Pasien']);
    $Nama_bayi = htmlspecialchars($_POST['Nama_bayi']);
    $jenisImunisasi = $_POST['jenisImunisasi'];
    $Jenis_vitamin = htmlspecialchars($_POST['Jenis_vitamin']);
    $tgl_periksa = htmlspecialchars($_POST['tgl_periksa']);
    $keterangan = htmlspecialchars($_POST['keterangan']);

    $countTotalInsert = count($jenisImunisasi);
    
    for ($i = 0; $i < $countTotalInsert; $i++) {
        $sql = "INSERT INTO tb_laporan (id_laporan, idorangtua, id_bayi, id_imunisasi, id_vitamin, tgl_periksa, keterangan) VALUES (NULL,'$Nama_Pasien', '$Nama_bayi', '$jenisImunisasi[$i]', '$Jenis_vitamin', '$tgl_periksa', '$keterangan')";
        $query = mysqli_query($con, $sql) or die (mysqli_error($con));
    }
    
    echo "<script>window.location='../Laporan/index.php'</script>";
}
?>