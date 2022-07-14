<?php
session_start();
require "../config/config.php";
$username="";
$password="";
$err = "";

if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username =='' or $password == '') {
        $err = "silahkan masukan semua isian";
    }else{
        $sql1= "SELECT * FROM admin WHERE username = '$username'";
        $q1 = mysqli_query($con,$sql1);
        $r1 = mysqli_fetch_array($q1);
        $n1 = mysqli_num_rows($q1);

        if($n1 < 1){
            $err = "Username tidak ditemukan";
        }elseif($r1['password']!=md5($password)){
            $err = "password tidak sesuai";
        }else{
            $_SESSION['admin_username'] = $username;
            header("location:../Dashboard/Home.php");
            exit();
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Administrasi Posyandu</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 


</head>


<form action="" method="POST">
    <?php
    if($err){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Yo!</strong> <?php echo $err ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    }
    ?>
    <div class="container">
        <div class="form-group">
            <form>
                <h1>LOGIN ADMIN</h1> 
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?php echo $username?>"/>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" />
                <button type="submit" class="btn btn-primary" name="Login">LOGIN</button>
            </form>
        </div>
        <div class="image">
            <img src="../assets/images/contoh.jpg" width="300">
        </div>
    </div>
</form>

</body>

</html>