<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>

  <title>Kelola Produk</title>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.min.css" />

</head>

<body style="" class="rounded-circle">
  <nav class="navbar navbar-expand-md navbar-dark bg-primary py-1">
    <div class="container"> <a class="navbar-brand" href="#" style="font-size:30px;">
        <b class="text-white"> BAKSO NAJWA</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light text-center"> <a href="<?php echo base_url(); ?>Service/welcome_page_service" class="nav-link d-inline-flex justify-content-center align-items-center text-light text-center"><i class="fa fa-fw fa-home fa-2x" style="color:white;"></i>HOME</a> </li>
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light text-center"> <a href="<?php echo base_url(); ?>Auth/logout" class="nav-link text-light text-center d-inline-flex justify-content-center align-items-center"><i class="fa fa-fw fa-sign-out fa-2x" style="color:white;"></i>LOGOUT</a> </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-2 text-center">Data Produk</h1>
      </div>
    </div>
  </div>
    
    <div class="h-50">
      <div class="container">
        <div class="row">
          <div class="col-md-12 shadow-none">
            <table id="produk-table" class="table shadow table-bordered responsive" style="background-color: rgba(64, 147, 194, 0.8); border-radius:10px; color:white">
              <thead>
                <tr>
                  <th class="text-center">ID</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Harga</th>
                  <th class="text-center">Tipe</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                if($produk !== FALSE )
                {
                foreach($produk as $row)
                {
              ?>
                <tr  style="background-color: rgba(64, 147, 194, 0.8); ">
                  <td class="text-center">PRD<?php echo $row->idProduk; ?></td>
                  <td class="text-center"><?php echo $row->NamaProduk; ?></td>
                  <td class="text-center"><?php echo $row->HargaProduk; ?></td>
                  <td class="text-center"><?php echo $row->TipeProduk; ?></td>
                </tr>
                <?php } ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

<script type="text/javascript">
$(document).ready(function() {
    $('#produk-table').DataTable({
      responsive:true
    });
});
</script>
</body>

</html>