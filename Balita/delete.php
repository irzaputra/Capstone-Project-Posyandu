<?php require "../config/config.php"; 
$id=$_GET['id'];
$query="DELETE FROM tb_balita WHERE id_bayi=$id";
$result=mysqli_query($con,$query);
if($result){
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href='../Balita/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href='../Balita/index.php';
        </script>
    ";
}


?>