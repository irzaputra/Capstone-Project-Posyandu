<?php require "../_header.php"; ?>

    <div class="box">
        <h1>Laporan</h1>
        <h4>
            <small>Data Laporan Posyandu</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="../Laporan/add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Laporan Posyandu</a>
            </div>
        </h4>
        </div>
        <div class="table-responsive">
            <table class="table table-stripted table-bordered table-hover" id="laporan">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama Orangtua </th>
                        <th> Nama Balita </th>
                        <th> Jenis Vitamin </th>
                        <th> Jenis Imunisasi </th>
                        <th> Tanggal Periksa </th>
                        <th> Keterangan </th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1; 
                    $query = "SELECT tb_laporan.id_laporan, tb_orangtua.Nama_Pasien, tb_balita.Nama_bayi, tb_vitamin.Jenis_vitamin, tb_laporan.tgl_periksa, tb_laporan.keterangan, 
                    GROUP_CONCAT(tb_imunisasi.Imunisasi) as 'imunisasi' FROM tb_laporan 
                    INNER JOIN tb_orangtua ON tb_laporan.idorangtua = tb_orangtua.idorangtua 
                    INNER JOIN tb_balita ON tb_laporan.id_bayi = tb_balita.id_bayi 
                    INNER JOIN tb_vitamin ON tb_laporan.id_vitamin = tb_vitamin.id_vitamin 
                    INNER JOIN tb_imunisasi ON tb_laporan.id_imunisasi = tb_imunisasi.id_imunisasi 
                    GROUP BY tb_laporan.id_bayi";
                    $sql_laporan = mysqli_query($con, $query) or die (mysqli_error($con));
                    while($data = mysqli_fetch_array($sql_laporan)) { ?>
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?php echo $data ['Nama_Pasien']?> </td>
                            <td> <?php echo $data ['Nama_bayi']?> </td>
                            <td> <?php echo $data ['Jenis_vitamin']?> </td>
                            <td> <?php echo $data ['imunisasi']; ?></td>
                            <td> <?php echo $data ['tgl_periksa']?> </td>
                            <td> <?php echo $data ['keterangan']?> </td>
                            <td class="text-center">
                                <a href="../Laporan/delete.php?id=<?php echo $data['id_laporan']?>" onclick="return confirm('Hapus?');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <script type="text/javascript">
            $(document).ready( function () {
    $('#laporan').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel' , 'pdf' , 'print' , 'copy' , 'csv'
        ]
    });
} );
        </script>
    </div>
<?php require "../_footer.php"; ?>