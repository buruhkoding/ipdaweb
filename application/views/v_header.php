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
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse  bg-primary">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon d-inline-block align-top"></span>
  </button>
  <a class="navbar-brand" href="#" style="margin-bottom: 2px;"><i class="fa fa-commenting"></i> IPDA</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= site_url("home/lihat_data");?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= site_url("home/anggota");?>">Anggota</a>
      </li>
    </ul>
    <ul class="navbar-nav">
    <li class="nav dropdown">
        <a class="test nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          <img src="<?=base_url();?>upload/img/<?= $foto = $this->session->userdata('foto'); ?>" class="d-inline-block align-top rounded-circle" width="25" height="25" alt="">
          <span class="display-6">Welcome,</span> <b><?= $nama = $this->session->userdata('nama'); ?></b>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="<?= site_url('home/logout/');?>"><i class="fa fa-power-off"></i> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br><br>