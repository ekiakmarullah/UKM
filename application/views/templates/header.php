<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/belajar-boostrap/UKM/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/belajar-boostrap/UKM/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/belajar-boostrap/UKM/assets/css/fixed.css">
	<link href="http://localhost/belajar-boostrap/UKM/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body data-spy="scroll" data-target="#nabvarResponsive">
	<div id="home">

	<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a href="#home" class="navbar-brand page-scroll"><img src="http://localhost/belajar-boostrap/UKM/assets/img/UUI-CYBER.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nabvarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="nabvarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?= base_url(); ?>" class="nav-link page-scroll"><i class="fas fa-home mr-2"></i>BERANDA</a>
					</li>

					<li class="nav-item">
						<a href="#daftar" class="nav-link page-scroll"><i class="fas fa-user mr-2"></i>DAFTAR</a>
					</li>

					<li class="nav-item">
						<a href="#proker" class="nav-link page-scroll"><i class="fas fa-briefcase mr-2"></i>PROGRAM KERJA</a>
					</li>

					<li class="nav-item">
						<a href="#resources" class="nav-link page-scroll"><i class="fas fa-bold mr-2"></i>RESOURCES</a>
					</li>

					<li class="nav-item">
						<a href="#struktural" class="nav-link page-scroll"><i class="fas fa-users mr-2"></i>KEPEMIMPINAN</a>
					</li>

					<li class="nav-item">
						<a href="#contact" class="nav-link page-scroll"><i class="fas fa-phone-alt mr-2"></i>KONTAK</a>
					</li>
				</ul>
			</div>
		</nav>
	<!-- End Navigation -->