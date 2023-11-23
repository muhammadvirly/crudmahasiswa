<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Static Navigation - SB Admin</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand ps-3" href="index.html">BPF 22 TI B</a>
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
				class="fas fa-bars"></i></button>
		<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
					aria-describedby="btnNavbarSearch" />
				<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
						class="fas fa-search"></i></button>
			</div>
		</form>
		<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
					aria-expanded="false">
					<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama'] ?></span>
					<img src="<?= base_url('assets/img/profile/') . $user['gambar'] ?>" alt="" style="width: 27px;" class="img-profile rounded-circle">
				</a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#!">Settings</a></li>
					<li><a class="dropdown-item" href="#!">Activity Log</a></li>
					<li>
						<hr class="dropdown-divider" />
					</li>
					<li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<div class="sb-sidenav-menu-heading"></div>
						<a class="nav-link" href="index.html">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Dashboard
						</a>
						<div class="sb-sidenav-menu-heading">Menu</div>
						<?php
						if($user['role'] == 'Admin'){?>
						<a class="nav-link" href="<?= site_url('Mahasiswa/') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
							Mahasiswa
						</a>
						<a class="nav-link" href="<?= site_url('Prodi/') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
							Prodi
						</a>
						<?php } else{?>
							<a class="nav-link" href="<?= site_url('Profil/') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
							Profil
						</a>
							<a class="nav-link" href="<?= site_url('Auth/logout') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
							Logout
						</a>
				<?php } ?>
					</div>
				</div>
			
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
