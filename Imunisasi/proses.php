<?php require "../config/config.php"; 
if(isset($_POST['edit'])){
    $id=($_POST['id_imunisasi']);
    $Imunisasi = htmlspecialchars($_POST['Imunisasi']);
    $Keterangan = htmlspecialchars($_POST['Keterangan']);  
    
    $query = "UPDATE tb_imunisasi SET Imunisasi='$Imunisasi', Keterangan='$Keterangan' WHERE id_imunisasi='$id'";
    
    $result=mysqli_query($con,$query);
    if ($result) {
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href='../Imunisasi/index.php';
        </script>
        ";
    
    } else {
        echo "
        <script>
        alert('data gagal diupdate');
        document.location.href='../Imunisasi/index.php';
        </script>
        ";
    }
}
?>