<?php require "../config/config.php";
if(isset($_POST['Proses'])){
    $Jenis_vitamin = htmlspecialchars($_POST['Jenis_vitamin']);
    $Keterangan = htmlspecialchars($_POST['Keterangan']);
    
    $query = "INSERT INTO tb_vitamin VALUES (NULL, '$Jenis_vitamin' , '$Keterangan')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "
        <script>
            document.location.href='../Vitamin/index.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            document.location.href='../Vitamin/index.php';
        </script>
    ";
    }
}
?>