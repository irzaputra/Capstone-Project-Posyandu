<?php require "../_header.php"; ?>

    <div class="box">
        <h1>Orangtua</h1>
        <h4>
            <small>Data Orangtua</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="../Pasien/add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
            </div>
        </h4>
        <div style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="POST">
                <div class="form-group">
                    <input type="text" name="cari" autocomplete="" autofocus class="form-control" placeholder=>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-stripted table-bordered table-hover">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama Orangtua </th>
                        <th> NIK </th>
                        <th> Email </th>
                        <th> Jenis Kelamin </th>
                        <th> Tempat/tgl.lahir </th>
                        <th> Alamat </th>
                        <th> No. Telp </th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $edge=3;
                    $page= @$_GET['page'];
                    if(empty($page)){
                        $posi =0;
                        $page =1;
                    } else {
                        $posi = ($page-1) * $edge;
                    }
                    $no = 1;
                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $cari = trim(mysqli_real_escape_string($con, $_POST['cari']));
                        if($cari != '') {
                            $sql = "SELECT * FROM tb_orangtua WHERE Nama_Pasien LIKE '%$cari%'";
                            $query = $sql;
                            $queryjmlh = $sql;
                        } else {
                            $query = "SELECT * FROM tb_orangtua LIMIT $posi, $edge";
                            $queryjmlh = "SELECT * FROM tb_orangtua";
                            $no = $posi + 1;
                    }
                } else {
                    $query = "SELECT * FROM tb_orangtua LIMIT $posi, $edge";
                    $queryjmlh = "SELECT * FROM tb_orangtua";
                    $no = $posi + 1;
                }
                    
                    $sql_ortu = mysqli_query($con, $query) or die (mysqli_error($con));
                    if (mysqli_num_rows($sql_ortu) > 0){
                        while($data = mysqli_fetch_array($sql_ortu)) { ?>
                            <tr>
                                <td> <?php echo $no++; ?> </td>
                                <td> <?php echo $data ['Nama_Pasien']; ?> </td>
                                <td> <?php echo $data ['NIK']; ?> </td>
                                <td> <?php echo $data ['Email']; ?> </td>
                                <td> <?php echo $data ['Jenis_kelamin']; ?> </td>
                                <td> <?php echo $data ['Tempat_lahir'] . "/" . $data['Tanggal_lahir']; ?> </td>
                                <td> <?php echo $data ['Alamat']; ?> </td>
                                <td> <?php echo $data ['Telp']; ?> </td>
                                <td class="text-center">
                                    <a href="../Pasien/edit.php?id=<?php echo $data['idorangtua'] ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a> 
                                    <a href="../Pasien/delete.php?id=<?php echo $data['idorangtua'] ?>" onclick="return confirm('Hapus');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                        
                            </tr>
                        <?php
                        }
                    } else {
                        echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php 
        if(@$_POST['cari'] == ''){ ?>
            <div style="float:left;">
                <?php
                $jmlh = mysqli_num_rows(mysqli_query($con,$queryjmlh));
                echo "Jumlah Data: <b>$jmlh</b>";
                ?>
            </div>
            <div style="float:right;">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php
                    $jumlahPagination = ceil($jmlh / $edge);
                    for ($i=1; $i <= $jumlahPagination; $i++) {
                        if($i != $page) {
                            echo "<li><a href=\"?page=$i\">$i</a></li>";
                        } else {
                            echo "<li class=\"active\"><a>$i</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
            <?php
            
        } else {
            echo "<div style=\"float:left;\">";
            $jmlh = mysqli_num_rows(mysqli_query($con,$queryjmlh));
            echo "Data Hasil Pencarian: <b>$jmlh</b>";
            echo "</div";
        } 
        ?>
    </div>

<?php require "../_footer.php"; ?>