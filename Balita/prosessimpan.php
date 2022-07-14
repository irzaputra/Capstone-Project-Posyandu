<?php require "../config/config.php";
if(isset($_POST['Proses'])){
    $Nama_bayi = htmlspecialchars($_POST['Nama_bayi']);
    $NIK = htmlspecialchars($_POST['NIK']);
    $Jenis_kelamin = htmlspecialchars($_POST['Jenis_kelamin']);
    $Tempat_lahir = htmlspecialchars($_POST['Tempat_lahir']);
    $Tanggal_lahir = htmlspecialchars($_POST['Tanggal_lahir']);
    $Berat_badan = htmlspecialchars($_POST['Berat_badan']);
    $Tinggi_badan = htmlspecialchars($_POST['Tinggi_badan']);
    $Lingkar_badan = htmlspecialchars($_POST['Lingkar_badan']);
    $Golongan_darah = htmlspecialchars($_POST['Golongan_darah']);
    
    $query = "INSERT INTO tb_balita VALUES (NULL, '$Nama_bayi' , 'NIK' , '$Jenis_kelamin', '$Tempat_lahir' , '$Tanggal_lahir' , '$Berat_badan' , '$Tinggi_badan', '$Lingkar_badan' , '$Golongan_darah' )";
    $result=mysqli_query($con,$query);
    if($result){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='../Balita/index.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            document.location.href='../Balita/index.php';
        </script>
    ";
    }
}
?>