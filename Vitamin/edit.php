<?php require "../_header.php"; ?>

<?php require "../config/config.php"; 
$id=(int)$_GET['id'];
$query="SELECT * FROM tb_vitamin WHERE id_vitamin=$id";
$result=mysqli_query($con,$query);



?>
    <div class="box">
        <h1>Vitamin</h1>
        <h4>
            <small>Edit Data Vitamin</small>
            <div class="pull-right">
                <a href="../Vitamin/index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Vitamin/proses.php" method="POST">
                    <?php while ($data=mysqli_fetch_array($result)){ ?>
                        <input type="hidden" name="id_vitamin" value="<?php echo $data['id_vitamin'] ?>">

                    <div class="form-group">
                        <label for="Jenisvitamin">Jenis Vitamin</label>
                        <input type="text" name="Jenis_vitamin" value="<?php echo $data['Jenis_vitamin']?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea input type="text" name="Keterangan" class="form-control"><?php echo $data['Keterangan']?></textarea>
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