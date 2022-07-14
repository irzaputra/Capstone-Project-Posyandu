<?php require "../_header.php"; ?>

<?php require "../config/config.php"; 
$id=(int)$_GET['id'];
$query="SELECT * FROM tb_balita WHERE id_bayi=$id";
$result=mysqli_query($con,$query);



?>
    <div class="box">
        <h1>Balita</h1>
        <h4>
            <small>Edit Data Balita</small>
            <div class="pull-right">
                <a href="../Balita/index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Balita/proses.php" method="POST">
                    <?php while ($data=mysqli_fetch_array($result)){ ?>
                        <input type="hidden" name="id_bayi" value="<?php echo $data['id_bayi'] ?>">

                    <div class="form-group">
                        <label for="nama">Nama Balita</label>
                        <input type="text" name="Nama_bayi" value="<?php echo $data['Nama_bayi']?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="NIK" value="<?php echo $data['NIK']?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="Jenis_kelamin" value="P" <?php if($data['Jenis_kelamin']=='P') echo 'checked'?>>Perempuan
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="Jenis_kelamin" value="L" <?php if($data['Jenis_kelamin']=='L') echo 'checked'?>>Laki - Laki
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
                        <label for="beratbadan">Berat Badan</label>
                        <input type="number" name="Berat_badan" value="<?php echo $data['Berat_badan'] ?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="tinggibadan">Tinggi Badan</label>
                        <input type="number" name="Tinggi_badan" value="<?php echo $data['Tinggi_badan'] ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="lingkarbadan">Lingkar Badan</label>
                        <input type="number" name="Lingkar_badan" value="<?php echo $data['Lingkar_badan'] ?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="golongandarah">Golongan Darah</label>
                        <input type="text" name="Golongan_darah" value="<?php echo $data['Golongan_darah'] ?>" class="form-control" >
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