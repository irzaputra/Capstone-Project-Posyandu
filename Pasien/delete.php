<?php require "../config/config.php"; 
$id=$_GET['id'];
$query="DELETE FROM tb_orangtua WHERE idorangtua=$id";
$result=mysqli_query($con,$query);
if($result){
    echo "
        <script>
            document.location.href='../Pasien/data.php';
        </script>
    ";
} else {
    echo "
        <script>
            document.location.href='../Pasien/data.php';
        </script>
    ";
}


?>