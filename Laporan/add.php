<?php require "../_header.php"; ?>
    <div class="box">
        <h1>Laporan</h1>
        <h4>
            <small>Tambah Data Laporan Posyandu</small>
            <div class="pull-right">
                <a href="../Laporan/index.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="../Laporan/proses.php" method="POST">
                    <div class="form-group">
                        <label for="Nama_Pasien">Nama Orangtua</label>
                        <select name="Nama_Pasien" id="Nama_Pasien" class="form-control" required>
                            <option value="">-- Pilih Nama Orangtua --</option>
                            <?php 
                            $sql_ortu = mysqli_query($con,"SELECT * FROM tb_orangtua ") or die 
                            (mysqli_error($con));
                            while($data_pasien = mysqli_fetch_array($sql_ortu)){
                                echo '<option value = "'.$data_pasien['idorangtua'].'" >'.$data_pasien['Nama_Pasien'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Nama_bayi">Nama Balita</label>
                        <select name="Nama_bayi" id="Nama_bayi" class="form-control" required>
                            <option value="">-- Pilih Nama Balita --</option>
                            <?php 
                            $sql_bayi = mysqli_query($con,"SELECT * FROM tb_balita ") or die 
                            (mysqli_error($con));
                            while($data_bayi = mysqli_fetch_array($sql_bayi)){
                                echo '<option value = "'.$data_bayi['id_bayi'].'" >'.$data_bayi['Nama_bayi'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Imunisasi">Jenis Imunisasi</label>
                        <select multiple name="jenisImunisasi[]" id="Imunisasi" size="5" class="form-control" >
                            <option value="">-- Pilih Imunisasi --</option>
                            <?php 
                            $sql_imun = mysqli_query($con,"SELECT * FROM tb_imunisasi ") or die 
                            (mysqli_error($con));
                            while($data_imun = mysqli_fetch_array($sql_imun)){
                                echo '<option value = "'.$data_imun['id_imunisasi'].'" >'.$data_imun['Imunisasi'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jenis_vitamin">Jenis Vitamin</label>
                        <select name="Jenis_vitamin" id="Jenis_vitamin" class="form-control" >
                            <option value="">-- Pilih Vitamin --</option>
                            <?php 
                            $sql_vitamin = mysqli_query($con,"SELECT * FROM tb_vitamin ") or die 
                            (mysqli_error($con));
                            while($data_vitamin = mysqli_fetch_array($sql_vitamin)){
                                echo '<option value = "'.$data_vitamin['id_vitamin'].'" >'.$data_vitamin['Jenis_vitamin'].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_periksa">Tanggal Periksa</label>
                        <input type="date" name="tgl_periksa" id="tgl" value="<?=date('Y-m-d')?>" class="form-control" required >
                    </div>
                    
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea input type="text" name="keterangan" id="ket" class="form-control" required></textarea>
                    </div>
    
                    <div class="form-group pull-right">
                        <input type="submit" name="Proses" value="Simpan" class="btn btn-success">
                        <input type="reset" name="reset" value="Reset" class="btn btn-default">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require "../_footer.php"; ?>