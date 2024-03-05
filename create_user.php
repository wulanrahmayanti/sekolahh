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
    $error = "";
    $suskes = "";




    // Validasi data (tambahkan validasi sesuai kebutuhan)


    // Query untuk menambahkan data pengguna baru
    $query = "INSERT INTO tb_inputsiswa VALUES ('','$nis', '$nama', '$alamat', '$no_tlp','$jk', '$asal_sekolah','$jurusan')";
    $queryNis = mysqli_query($conn, "SELECT max(nis) as maxnis FROM tb_inputsiswa");
    $data = mysqli_fetch_array($queryNis);
    $maxnis = $data["maxnis"];




    if ($conn->query($query) === TRUE) {
        $suskes = "Berhasil Memasukan Data Baru";
        header("Location: datasiswa.php");
        die();
    } else {
        $error = "Gagal memasukan data";
        echo "Error: " . $query . "<br>" . $conn->error;
    }


    // Tutup koneksi
    $conn->close();
}
