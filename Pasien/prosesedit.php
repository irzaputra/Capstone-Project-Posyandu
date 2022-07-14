<?php require "../config/config.php"; 
if(isset($_POST['edit'])){
    $id=($_POST['idorangtua']);
    $Nama_Pasien = htmlspecialchars($_POST['Nama_Pasien']);
    $NIK = htmlspecialchars($_POST['NIK']);
    $Email = htmlspecialchars($_POST['Email']);
    $Jenis_kelamin = htmlspecialchars($_POST['Jenis_kelamin']);
    $Tempat_lahir = htmlspecialchars($_POST['Tempat_lahir']);
    $Tanggal_lahir = htmlspecialchars($_POST['Tanggal_lahir']);
    $Alamat = htmlspecialchars($_POST['Alamat']);
    $Telp = htmlspecialchars($_POST['Telp']);


    $query = "UPDATE tb_orangtua SET Nama_Pasien='$Nama_Pasien', NIK='$NIK', Email='$Email', Jenis_kelamin='$Jenis_kelamin', Tempat_lahir='$Tempat_lahir', 
    Tanggal_lahir='$Tanggal_lahir', Alamat='$Alamat'  WHERE idorangtua='$id'";
    
    $result=mysqli_query($con,$query);
    if ($result) {
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href='../Pasien/data.php';
        </script>
        ";
    
    } else {
        echo "
        <script>
        alert('data gagal diupdate');
        document.location.href='../Pasien/data.php';
        </script>
        ";
    }
}
?>