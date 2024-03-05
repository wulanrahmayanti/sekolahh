​​<?php
    include 'connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Ambil nilai ID pengguna
        $nis = $_GET['nis'];
        //echo $nis;
        // Query untuk menghapus data pengguna
        $query = "DELETE FROM tb_inputsiswa WHERE nis = $nis";

        $q1    = mysqli_query($conn, $query);


        // Tutup koneksi
        $conn->close();
        header("location: datasiswa.php");
    }

    ?>