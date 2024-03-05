<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>

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
        .nav-link:hover{
        color: red;
      }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<?php
$queryNis = mysqli_query($conn, "SELECT max(nis) as maxnis FROM tb_inputsiswa");
$data = mysqli_fetch_array($queryNis);
$maxnis = $data["maxnis"] + 1;
?>

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
                    <div class="mx-auto">
                        <div class="card w-100">
                            <div class="card-header text-white bg-secondary">
                                Tambah Siswa Baru
                            </div>
                            <div class="card-body" style="background: rgb(238,174,202);background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
                                <form action="create_user.php" method="post">
                                    <div class="row">
                                        <label for="nis" class="col col-form-label">NIS</label>
                                        <div class="col">
                                            <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $maxnis ?>" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="Nama" class="col col-form-label">Nama</label>
                                        <div class="col">
                                            <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="alamat" class="col col-form-label">Alamat</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="no.tlp" class="col col-form-label">No Tlp</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="no.tlp" name="no.tlp" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="jenis kelamin" class="col col-form-label">Jenis Kelamin</label>
                                        <div class="col">
                                            <select class="form-control" id="jenis kelamin" name="jenis kelamin" required>
                                                <option value="">->Pilih<- </option>
                                                <option value="Laki Laki">Laki Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="asal_sekolah" class="col col-form-label">Asal Sekolah</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="jurusan" class="col col-form-label">Jurusan</label>
                                        <div class="col">
                                            <select class="form-control" id="jurusan" name="jurusan" required>
                                                <option value="">->Pilih Jurusan<- </option>
                                                <option value="rpl">RPL</option>
                                                <option value="tbsm">TBSM</option>
                                                <option value="atph">ATPH</option>
                                            </select>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-primary" value="Kirim">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
