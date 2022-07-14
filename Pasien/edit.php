<?php require "../_header.php"; ?>

<?php require "../config/config.php"; 
$id=(int)$_GET['id'];
$query="SELECT * FROM tb_orangtua WHERE idorangtua=$id";
$result=mysqli_query($con,$query);



?>
    <div class="box">
        <h1>Orangtua</h1>
        <h4>
            <small>Edit Data Orangtua</small>
            <div class="pull-right">
                <a href="../Pasien/data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Pasien/prosesedit.php" method="POST">
                    <?php while ($data=mysqli_fetch_array($result)){ ?>
                        <input type="hidden" name="idorangtua" value="<?php echo $data['idorangtua'] ?>">

                    <div class="form-group">
                        <label for="nama">Nama Orangtua</label>
                        <input type="text" name="Nama_Pasien" value="<?php echo $data['Nama_Pasien']?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="NIK" value="<?php echo $data['NIK']?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="Email" value="<?php echo $data['Email']?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="Jenis_kelamin" value="P" <?php if($data['Jenis_kelamin']=='P') echo 'checked'?>>Perempuan
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="Jenis_kelamin" value="L" <?php if($data['Jenis_kelamin']=='L') echo 'checked'?>>Laki-Laki
                            </label>
                            
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="Tempatlahir">Tempat Lahir</label>
                        <input type="text" name="Tempat_lahir" value="<?php echo $data['Tempat_lahir'] ?>" class="form-control"  >
                    </div>

                    <div class="form-group">
                        <label for="Tanggallahir">Tanggal Lahir</label>
                        <input type="date" name="Tanggal_lahir" value="<?php echo $data['Tanggal_lahir'] ?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea input type="text" name="Alamat" class="form-control"><?php echo $data['Alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="telp">No.Telp</label>
                        <input type="number" name="telp" value="<?php echo $data['Telp'] ?>" class="form-control" >
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit"  name="edit" class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php 
}  ?>

<?php require "../_footer.php"; ?>