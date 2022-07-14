<?php require "../_header.php"; ?>
    <div class="box">
        <h1>Imunisasi</h1>
        <h4>
            <small>Tambah Data Imunisasi</small>
            <div class="pull-right">
                <a href="../Imunisasi/index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Imunisasi/prosessimpan.php" method="POST">
                    <div class="form-group">
                        <label for="Imunisasi">Jenis Imunisasi</label>
                        <input type="text" name="Imunisasi" class="form-control" required autofocus>
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