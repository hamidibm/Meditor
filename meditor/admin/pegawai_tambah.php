<?php
require '../conf/function.php';

if (isset($_POST["tambahpegawai"])) {

    $nip = mysqli_real_escape_string($conn, $_POST["nip"]);
    $duplikat = "SELECT nip FROM pegawai WHERE nip = '$nip' ";
    $cek = mysqli_query($conn, $duplikat);
    $count = mysqli_num_rows($cek);

    if ($count > 0) {
        echo "<script>
                    alert('NIP ini sudah terdaftar!');
                  </script>";
    } else {
        if (tambah_pegawai($_POST) > 0) {
            echo "<script>
                        alert('Pegawai baru berhasil di tambahkan!');
                        document.location.href = 'pegawai.php'
                      </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/dashboard_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Meditor</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img src="../media/img/logo.png" alt="" style="max-width: 177px; margin-left: -11px; margin-top: 10px; margin-bottom: 0">
        </a>
        <ul class="side-menu">
			<li><a href="index.php" ><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
			<li class="divider" data-text="main">Main</li>
			<li><a href="pendaftaran.php"><i class='bx bxs-chart icon'></i> Pendaftaran</a></li>
			<li><a href="pelayanan.php"><i class='bx bxs-notepad icon' ></i> Pelayanan</a></li>
			<li><a href="poli_harian.php"><i class='bx bx-plus-medical icon' ></i> Daftar Poli</a></li>
			<li><a href="pegawai.php" class="active"><i class='bx bxs-user-badge icon'></i> Pegawai</a></li>
		</ul>
        <div class="logout" style="margin-left: 35px; margin-bottom: 30px; position: absolute; bottom: 0; ">
            <a href="logout.php" style="text-decoration: none; color: inherit;"><i class='fas fa-sign-out-alt' style='font-size:29px'></i></a>
        </div>
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>



        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <h1 class="title">Pegawai</h1>
            <ul class="breadcrumbs">
                <li><a href="">Pegawai</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Tambah Pegawai</a></li>
            </ul>

            <div class="info-data">
                <div>
                    <form method="POST">
                        <div class="row mb-3">
                            <label for="inputnama" class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                                <input required name="nip" autocomplete="off" type="number" class="form-control" id="inputnama">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputnik" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required name="nama" autocomplete="off" type="text" class="form-control" id="inputnik">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputtgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" required name="tgl_lahir" id="inputtgllahir" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10 form-floating">
                                <select name="jabatan" id="inputjabatan" class="form-select">
                                    <!-- <option disable="disable"></option> -->
                                    <option value="Dokter">Dokter</option>
                                    <option value="Perawat">Perawat</option>
                                    <option value="Apoteker">Apoteker</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Laboran">Laboran</option>
                                    <option value="Janitor">Janitor</option>

                                </select>
                                <label for="inputjabatan" class="form-label">Select list (select one):</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input required name="alamat" autocomplete="off" type="text" class="form-control" id="inputalamat">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputsex" class="col-sm-2 col-form-label">Kelamin</label>
                            <div class="col-sm-10 form-floating">
                                <select name="kelamin" class="form-select" id="inputsex">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                                <label for="inputsex" class="form-label">Select list (select one):</label>
                            </div>
                        </div>

                        <div class="row">
                            <button name="tambahpegawai" type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>

            </div>





        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->

    <style>
        input[type="date"] {
            position: relative;
        }

        /* create a new arrow, because we are going to mess up the native one
        see "List of symbols" below if you want another, you could also try to add a font-awesome icon.. */
        input[type="date"]:after {
            content: "";
            color: #555;
            padding: 0 5px;
        }

        /* change color of symbol on hover */
        input[type="date"]:hover:after {
            color: #1775f1;
        }

        /* make the native arrow invisible and stretch it over the whole field so you can click anywhere in the input field to trigger the native datepicker*/
        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/dashboard_script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>