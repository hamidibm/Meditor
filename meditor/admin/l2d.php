<?php 
    require '../conf/function.php';

	$data = query("SELECT nama
					FROM wilayah_kabupaten
					WHERE provinsi_id = 
						(SELECT id 
						FROM wilayah_provinsi
						WHERE nama = 'Di Yogyakarta') 
					");

	$data2 = query("SELECT nama
					FROM wilayah_kabupaten
					WHERE provinsi_id = 
						(SELECT id 
						FROM wilayah_provinsi
						WHERE nama = 'Di Yogyakarta') 
					");

$kabupaten = $_POST['kabupaten']; 
						
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
			<li><a href="index.php" ><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			
			
			<li class="divider" data-text="main">Main</li>
			<li><a href="pendaftaran.php" ><i class='bx bxs-chart icon' ></i> Pendaftaran</a></li>
			<li><a href="pelayanan.php" class="active"><i class='bx bxs-widget icon' ></i> Pelayanan</a></li>
            <li><a href="poli_harian.php"><i class='bx bxs-widget icon'></i> Daftar poli</a></li>
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
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<h1 class="title">Wilayah</h1>
			<ul class="breadcrumbs">
				<li><a href="">Provinsi</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Yogyakarta</a></li>
			</ul>

			<div class="info-data">
                <div>
                    <form method="POST">

						<div class="row mb-3">
                            <label for="inputjabatan" class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-10 form-floating">
                                <select name="kabupaten" id="inputjabatan" class="form-select">

									<?php foreach($data as $row) : ?>
										<option value="<?= $row["nama"]; ?>">
											<?= $row["nama"]; ?>
											<?php ?>
											<?php $selected = $row["nama"]; ?>
											
										</option>
									<?php endforeach; ?>

									<?= $kabupaten ?>

                                </select>
								<?php echo($selected); ?>
                                <label for="inputpoli" class="form-label">Select list (select one):</label>
                            </div>
                        </div>

						<div class="row mb-3">
                            <label for="inputjabatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10 form-floating">
                                <select name="poli" id="inputjabatan" class="form-select">

									<?php foreach($data2 as $row) : ?>
										<option value="<?= $row["nama"]; ?>">
											<?= $row["nama"]; ?>
										</option>
									<?php endforeach; ?>

                                </select>

								<? $kabupaten; ?>
                                <label for="inputpoli" class="form-label">Select list (select one):</label>
                            </div>
                        </div>

							

                        <div class="row">
                            <button name="" type="submit" class="btn btn-primary">Tambah</button>
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