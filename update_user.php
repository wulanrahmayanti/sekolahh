<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $jk = $_POST['jenis_kelamin'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $jurusan = $_POST['jurusan'];


    // Validasi data (tambahkan validasi sesuai kebutuhan)
    // Query untuk memperbarui data pengguna
    $query = "UPDATE tb_inputsiswa SET nama='$nama' , alamat='$alamat' , no_tlp='$no_tlp' , jenis_kelamin='$jk' , asal_sekolah='$asal_sekolah' , jurusan= '$jurusan' WHERE nis=$nis";


    if ($conn->query($query) === TRUE) {
        header("Location: datasiswa.php");
        die();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }


    // Tutup koneksi
    $conn->close();
}
