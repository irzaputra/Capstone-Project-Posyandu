<?php require "../config/config.php";
if(isset($_POST['Proses'])){
    $Nama_Pasien = htmlspecialchars($_POST['Nama_Pasien']);
    $NIK = htmlspecialchars($_POST['NIK']);
    $Email = htmlspecialchars($_POST['Email']);
    $Jenis_kelamin = htmlspecialchars($_POST['Jenis_kelamin']);
    $Tempat_lahir = htmlspecialchars($_POST['Tempat_lahir']);
    $Tanggal_lahir = htmlspecialchars($_POST['Tanggal_lahir']);
    $Alamat = htmlspecialchars($_POST['Alamat']);
    $Telp = htmlspecialchars($_POST['Telp']);
    
    $query = "INSERT INTO tb_orangtua VALUES (NULL, '$Nama_Pasien', '$NIK' , '$Email' ,'$Jenis_kelamin','$Tempat_lahir','$Tanggal_lahir' , '$Alamat' , '$Telp' )";
    $result=mysqli_query($con,$query);
    if($result){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='../Pasien/data.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            document.location.href='../Pasien/data.php';
        </script>
    ";
    }
}
?>