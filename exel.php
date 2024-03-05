<?php include 'connection.php';

header("Content-type: application/vnd-md--excel");
header("Content-Disposition: attachement; filename= Data Siswa.xls");
header("pragama: no=-cache");
header("Expires:0");
?>


<table border="1">
<thead>
    <tr>
        <th colspan="6">Data Siswa</th>
    </tr>
                                    <tr>
                                        <th scope="">#</th>
                                        <th scope="">Nis</th>
                                        <th scope="">Nama</th>
                                        <th scope="">Alamat</th>
                                        <th scope="">No.tlp</th>
                                        <th scope="">JK</th>
                                        <th scope="">Asal Sekolah</th>
                                        <th scope="">Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql2 = "SELECT * FROM tb_inputsiswa";
                                    $data  = mysqli_query($conn, $sql2);
                                    $urut   = 1;

                                    while ($r2 = mysqli_fetch_array($data)) {
                                        $nis         = $r2['nis'];
                                        $nama        = $r2['nama'];
                                        $alamat      =  $r2['alamat'];
                                        $no_tlp      =  $r2['no_tlp'];
                                        $jk          =  $r2['jenis_kelamin'];
                                        $asal_sekolah =  $r2['asal_sekolah'];
                                        $jurusan     = $r2['jurusan'];

                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $urut++ ?></th>
                                            <td scope="row"><?php echo $nis ?></td>
                                            <td scope="row"><?php echo $nama ?></td>
                                            <td scope="row"><?php echo $alamat ?></td>
                                            <td scope="row"><?php echo $no_tlp ?></td>
                                            <td scope="row"><?php echo $jk ?></td>
                                            <td scope="row"><?php echo $asal_sekolah ?></td>
                                            <td scope="row"><?php echo $jurusan ?></td>
                                            <?php 
                                    }?>
                                    </tbody>
                                    </table>