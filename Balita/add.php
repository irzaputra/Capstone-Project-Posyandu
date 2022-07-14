<?php require "../_header.php"; ?>
    <div class="box">
        <h1>Balita</h1>
        <h4>
            <small>Tambah Data Balita</small>
            <div class="pull-right">
                <a href="../Balita/index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Balita/prosessimpan.php" method="POST">
                    <div class="form-group">
                        <label for="Nama_bayi">Nama Balita</label>
                        <input type="text" name="Nama_bayi" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="NIK">NIK</label>
                        <input type="number" name="NIK" maxlength="16" class="form-control" required autofocus>
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
                        <label for="Berat_badan">Berat Badan</label>
                        <input type="number" name="Berat_badan" class="form-control" placeholder="Berat Badan saat lahir(kg)" required>
                    </div>
                    <div class="form-group">
                        <label for="Tinggi_badan">Tinggi Badan</label>
                        <input type="number" name="Tinggi_badan" class="form-control" placeholder="Tinggi Badan saat lahir(cm)" required>
                    </div>
                    <div class="form-group">
                        <label for="Lingkar_badan">Lingkar Badan</label>
                        <input type="number" name="Lingkar_badan" class="form-control" placeholder="Lingkar Badan saat lahir(cm)" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="Golongan_darah">Golongan Darah</label>
                        <input type="text" name="Golongan_darah" class="form-control" autofocus required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="Proses" value="Simpan" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require "../_footer.php"; ?>