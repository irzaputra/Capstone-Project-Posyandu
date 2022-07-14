<?php require "../config/config.php"; 
if(isset($_POST['edit'])){
    $id=($_POST['id_vitamin']);
    $Jenis_vitamin = htmlspecialchars($_POST['Jenis_vitamin']);
    $Keterangan = htmlspecialchars($_POST['Keterangan']);  
    
    $query = "UPDATE tb_vitamin SET Jenis_vitamin='$Jenis_vitamin', Keterangan='$Keterangan' WHERE id_vitamin='$id'";
    
    $result=mysqli_query($con,$query);
    if ($result) {
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href='../Vitamin/index.php';
        </script>
        ";
    
    } else {
        echo "
        <script>
        alert('data gagal diupdate');
        document.location.href='../Vitamin/index.php';
        </script>
        ";
    }
}
?>