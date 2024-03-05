<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .nav-link:hover {
            color: red;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Pendaftaran Siswa</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="logout.php">Sign out</a>
        </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse vh-100">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <li class="nav-item">
                            <img src="template/smk.png" alt="" style="width: 50%;">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="sidebar.php">
                                <i class="fa-solid fa-house"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftar.php">
                                <i class="fa-solid fa-layer-group"></i>
                                Pendaftaran
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datasiswa.php">
                                <i class="fa-solid fa-users"></i>
                                Data Siswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="card mb-4 bg-#3c8dbc">
                        <div class="card-header text-white bg-secondary">
                            Data Siswa Baru
                        </div>

                        <div class="card-body" style="background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <form action="">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" name="cari">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button class="btn btn-primary">Cari</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <?php
                                        if (isset($_GET['cari'])) {
                                            $cari = $_GET['cari'];
                                            $sql2 = "SELECT * FROM tb_inputsiswa WHERE nama LIKE '%$cari%'";
                                        } else {

                                            $sql2 = "SELECT * FROM tb_inputsiswa";
                                        }
                                        ?>
                        </div>
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
                            <th scope="">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $sql2 = "SELECT * FROM tb_inputsiswa";
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
                                    <td scope="row">
                                        <a href="update_user_form.php?nis=<?php echo $nis; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <a href="delete.php?nis=<?php echo $nis; ?>" onclick="return confirm('Yakin Mau Hapus Data Ini?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>
                        <table>
                            <div class="col-12">
                                <td><input type="submit" name="tambah" value="ExsportToExel" class="btn btn-success" onclick="myFunction()"></td>
                                <script>
                                    function myFunction() {
                                        window.location.href = 'exel.php'
                                    }
                                </script>

                            </div>
                        </table>
      