<?php
session_start();
//mengatasi jika user langsung masuk menggunkan link, tanpa login
if(empty($_SESSION['id_user']) or empty($_SESSION['username'])){
   echo
   "<script>
   alert('Maaf, untuk mengakses halaman ini, Silahkan Logi terlebih dahulu...!!');
   document.location='index.php';
  </script>";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>E-ARSIP</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="?">E-ARSIP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?halaman=departemen">Data Departemen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?halaman=pengirim_surat">Data Pengirim Surat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?halaman=arsip_surat">Data Arsip Surat</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
      </div>
    </div>
  </nav>

  <div class="container">