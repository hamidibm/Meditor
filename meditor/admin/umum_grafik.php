<?php
require '../conf/function.php';

$data = query("SELECT 
                        (SELECT COUNT(*) 
                            FROM berobat b
                            WHERE b.poli = p.poli
                            AND CURDATE() = b.tgl_berobat)
                    FROM poli p
                    GROUP BY p.poli
                    ORDER BY p.id_poli");
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
        <a href="#" class="brand"> Meditor</a>
        <ul class="side-menu">
            <li><a href="index.php"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>


            <li class="divider" data-text="main">Main</li>
            <li><a href="pendaftaran.php"><i class='bx bxs-chart icon'></i> Pendaftaran</a></li>
            <li><a href="pelayanan.php"><i class='bx bxs-widget icon'></i> Pelayanan</a></li>
            <li><a href="poli.php" class="active"><i class='bx bxs-widget icon'></i> Daftar poli</a></li>
            <li><a href="pegawai.php"><i class='bx bxs-widget icon'></i> Pegawai</a></li>
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
            <h1 class="title">Daftar Poli</h1>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Daftar Poli</a></li>
            </ul>

            <ul class="breadcrumbs">
                <li><a href="poli.php" class="active">Total</a></li>
                <li class="divider">/</li>
                <li><a href="poli harian.php">Harian</a></li>
                <li class="divider">/</li>
                <li><a href="poli bulanan.php" >Bulanan</a></li>
                <li class="divider">/</li>
                <li><a href="poli tahunan.php" >Tahunan</a></li>
            </ul>


            <div class="info-data">
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Umum</h2>

                        </div>
                        <h3><?= implode(" ", $data[0]); ?></h3>
                    </div>
                </div>
            </div>

            <div class="info-data">
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Januari</h2>
                            <img src="../media/img/ispa.png">
                        </div>
                        <h3><?= implode(" ", $data[4]); ?></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Februari</h2>
                            <img src="../media/img/gigi.png">
                        </div>
                        <h3><?= implode(" ", $data[5]); ?></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Maret</h2>
                            <img src="../media/img/bedah.png">
                        </div>
                        <h3><?= implode(" ", $data[6]); ?></h3>
                    </div>

                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>April</h2>
                            <img src="../media/img/kesehatan jiwa.png">
                        </div>
                        <h3><?= implode(" ", $data[7]); ?></h3>
                    </div>
                </div>
            </div>

            <div class="info-data">
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Mei</h2>
                            <img src="../media/img/ispa.png">
                        </div>
                        <h3><?= implode(" ", $data[4]); ?></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Juni</h2>
                            <img src="../media/img/gigi.png">
                        </div>
                        <h3><?= implode(" ", $data[5]); ?></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Juli</h2>
                            <img src="../media/img/bedah.png">
                        </div>
                        <h3><?= implode(" ", $data[6]); ?></h3>
                    </div>

                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Agustus</h2>
                            <img src="../media/img/kesehatan jiwa.png">
                        </div>
                        <h3><?= implode(" ", $data[7]); ?></h3>
                    </div>
                </div>
            </div>

            <div class="info-data">
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>September</h2>
                            <img src="../media/img/ispa.png">
                        </div>
                        <h3><?= implode(" ", $data[4]); ?></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Oktober</h2>
                            <img src="../media/img/gigi.png">
                        </div>
                        <h3><?= implode(" ", $data[5]); ?></h3>
                    </div>
                </div>

                <div class="card">
                    <div class="head">
                        <div>
                            <h2>November</h2>
                            <img src="../media/img/bedah.png">
                        </div>
                        <h3><?= implode(" ", $data[6]); ?></h3>
                    </div>

                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>Desember</h2>
                            <img src="../media/img/kesehatan jiwa.png">
                        </div>
                        <h3><?= implode(" ", $data[7]); ?></h3>
                    </div>
                </div>
            </div>

            
            
            

           
        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/dashboard_script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../assets/js/scripts_donut.js"></script>
</body>

</html>