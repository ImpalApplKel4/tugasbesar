<!DOCTYPE html>
<html>

<head>
  <title>Selamat Datang</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <style> body {
      width: 100%;
      height: 100%;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      list-style: none;
      font-family: "Lato";
    }

    nav {
      background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(img/background.png);
      background-size: cover;
      width: 100%;
      height: 70px;
      position: absolute;
      top: 0;
      left: 0;
      overflow: hidden;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.25);
    }

    nav>ul {
      width: 100%;
      height: 100%;
      text-align: left;
      padding: 15px;
    }

    nav>ul>li {
      padding: 0.5em;
      float: right;
      margin-right: 15px;
    }

    nav>ul>div>li>a {
      float: right;
      text-decoration: none;
      color: #ffffff;
      font-family: "Lato";
      font-size: 20px;
      margin-right: 30px;
      padding: 10px 15px 0 0;
      font-weight: normal;
    }

    h1 {
      font-family: : "Lato";
      font-size: 42px;
    }

    .logo {
      float: left;
      font-size: 40px;
      color: #ffffff;
      margin-left: 15px;
    }

    .left-image {
      float: right;
      margin: 5px 10px 0 0;
      height: 30px;
      width: 30px;
    }

    .content {
      float: left;
      position: relative;
      width: 50%;
      height: 100%;
      margin-top: 220px;
      margin-left: 380px;
    }

    .button1 {
      font-family: "Lato";
      background: #4093C2;
      padding: 7px;
      width: 15%;
      margin-top: 30px;
      border-radius: 15px;
      font-size: 16px;
      color: #ffffff;
      cursor: pointer;
    }

    .button2 {
      font-family: "Lato";
      background: #4093C2;
      padding: 7px;
      width: 20%;
      margin-top: 30px;
      margin-left: 10px;
      border-radius: 15px;
      font-size: 16px;
      color: #ffffff;
      cursor: pointer;
    }

    .button3 {
      font-family: "Lato";
      background: #4093C2;
      padding: 7px;
      width: 18%;
      margin-top: 30px;
      margin-left: 10px;
      border-radius: 15px;
      font-size: 16px;
      color: #ffffff;
      cursor: pointer;
    }

    .button4 {
      font-family: "Lato";
      background: #4093C2;
      padding: 7px;
      width: 22%;
      margin-top: 30px;
      margin-left: 10px;
      border-radius: 15px;
      font-size: 16px;
      color: #ffffff;
      cursor: pointer;
    }
  </style>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary py-1">
    <div class="container"> <a class="navbar-brand" href="#" style="font-size:30px;">
        <b class="text-white"> BAKSO NAJWA</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2"> <a href="<?php echo base_url(); ?>Service/welcome_page_service" class="nav-link d-inline-flex justify-content-center align-items-center text-light text-center"><i class="fa fa-fw fa-home fa-2x" style="color:white;"></i>HOME</a> </li>
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light"> <a href="<?php echo base_url(); ?>Auth/logout" class="nav-link text-light text-center d-inline-flex justify-content-center align-items-center"><i class="fa fa-fw fa-sign-out fa-2x" style="color:white;"></i>LOGOUT</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-2">
    <div class="container mt-5">
      <h1>Selamat Datang,</h1>
      <h2>Mochammad Aria Putra Suwantra</h2>
      <p class="welcome" style="margin-top: 20px;"> Admin Service bertugas untuk mengelola data pemesanan serta melihat data produk pada sistem pencatatan Baso Najwa. Apa yang ingin anda lakukan hari ini ?</p>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
         <a href="<?php echo base_url(); ?>Service/kelolaPemesanan" ><button class="btn mx-1 btn-primary" type="button" style="border-radius:20px;">Kelola Pemesanan</button></a>
        </div>
        <div class="col-md-3">
          <a href="<?php echo base_url(); ?>Service/ViewProduk" ><button class="btn mx-1 btn-primary" type="button" style="border-radius:20px;">View Produk</button></a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>