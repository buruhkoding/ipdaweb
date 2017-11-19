<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/mycss.css">	
    <script src="<?= base_url();?>assets/js/jquery-3.1.1.slim.min.js"></script>
	<script src="<?= base_url();?>assets/js/tether.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>

</head>
<body class="bg">
<div class="container">

<!-- Login Form -->
<div class="nb-login">
	<img src="<?= base_url();?>assets/img/default.jpg" class=" rounded-circle mx-auto d-block" with="100px" height="100px" alt="">
	<h3 class="text-center">Sign In</h3>
	<form action="<?= base_url('auth/cek_login');?>" method="post">
		<div class="form-group">
			<input type="text" class="form-control" name="noA" placeholder="Masukan No. Anggota">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="pass" placeholder="Masukan Password">
		</div>
		<button type="submit" class="btn btn-block">Sign In</button>
	</form>
<h3 class="text-center">IPDA - ANTAREJO ANGGI</h3>
<h3 class="text-center">Coding With 😻 by Rahmat Fauzi </h3>
</div>

</div>
</body>
</html>