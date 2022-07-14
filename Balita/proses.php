<?php require "../config/config.php"; 
if(isset($_POST['edit'])){
    $id=($_POST['id_bayi']);
    $Nama_bayi = htmlspecialchars($_POST['Nama_bayi']);
    $NIK = htmlspecialchars($_POST['NIK']);
    $Jenis_kelamin = htmlspecialchars($_POST['Jenis_kelamin']);
    $Tempat_lahir = htmlspecialchars($_POST['Tempat_lahir']);
    $Tanggal_lahir = htmlspecialchars($_POST['Tanggal_lahir']);
    $Berat_badan = htmlspecialchars($_POST['Berat_badan']);
    $Tinggi_badan = htmlspecialchars($_POST['Tinggi_badan']);
    $Lingkar_badan = htmlspecialchars($_POST['Lingkar_badan']);
    $Golongan_darah = htmlspecialchars($_POST['Golongan_darah']);

    $query = "UPDATE tb_balita SET Nama_bayi='$Nama_bayi', NIK='$NIK', Jenis_kelamin='$Jenis_kelamin', Tempat_lahir='$Tempat_lahir', 
    Tanggal_lahir='$Tanggal_lahir', Berat_badan='$Berat_badan' , Tinggi_badan='$Tinggi_badan' , Lingkar_badan='$Lingkar_badan' , Golongan_darah='$Golongan_darah' WHERE id_bayi='$id'";
    
    $result=mysqli_query($con,$query);
    if ($result) {
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href='../Balita/index.php';
        </script>
        ";
    
    } else {
        echo "
        <script>
        alert('data gagal diupdate');
        document.location.href='../Balita/index.php';
        </script>
        ";
    }
}
?>