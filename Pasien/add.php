<?php require "../_header.php"; ?>
    <div class="box">
        <h1>Orangtua</h1>
        <h4>
            <small>Tambah Data Orangtua</small>
            <div class="pull-right">
                <a href="../Pasien/data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Pasien/prosessimpan.php" method="POST">
                    <div class="form-group">
                        <label for="Nama_Pasien">Nama Orangtua</label>
                        <input type="text" name="Nama_Pasien" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="number" name="NIK" maxlength="16" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="Jenis_kelamin">Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="Jenis_kelamin" value="P" required>Perempuan
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Jenis_kelamin" value="L" required>Laki - Laki
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="Tempat_lahir" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label for="Tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="Tanggal_lahir" class="form-control" value="<?=date('Y-m-d')?>" required >
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea input type="text" name="Alamat" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Telp">No. Telp</label>
                        <input type="number" name="Telp" maxlength="12" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="Proses" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require "../_footer.php"; ?>