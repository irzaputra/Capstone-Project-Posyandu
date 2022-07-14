<?php require "../config/config.php";
if(isset($_POST['Proses'])){
    $Imunisasi = htmlspecialchars($_POST['Imunisasi']);
    $Keterangan = htmlspecialchars($_POST['Keterangan']);
    
    $query = "INSERT INTO tb_imunisasi VALUES (NULL, '$Imunisasi' , '$Keterangan')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href='../Imunisasi/index.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            document.location.href='../Imunisasi/index.php';
        </script>
    ";
    }
}
?>