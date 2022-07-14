<?php require "../_header.php"; ?>
    <div class="box">
        <h1>Vitamin</h1>
        <h4>
            <small>Tambah Data Vitamin</small>
            <div class="pull-right">
                <a href="../Vitamin/index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Vitamin/prosessimpan.php" method="POST">
                    <div class="form-group">
                        <label for="Jenis_vitamin">Jenis Vitamin</label>
                        <input type="text" name="Jenis_vitamin" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <textarea input type="text" name="Keterangan" class="form-control" required></textarea>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="Proses" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require "../_footer.php"; ?>