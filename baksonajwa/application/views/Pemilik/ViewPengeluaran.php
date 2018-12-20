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
 
  <title>Kelola Pengeluaran</title>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>

</head>
<body style="" class="rounded-circle">
<nav class="navbar navbar-expand-md navbar-dark bg-primary py-1" style="background-color: #4093C2;">
    <div class="container"> <a class="navbar-brand" href="#" style="font-size:30px;">
        <b class="text-white"> BAKSO NAJWA</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light"> <a href="<?php echo base_url(); ?>Pemilik/welcome_page_pemilik" class="nav-link d-inline-flex justify-content-center align-items-center text-light text-center"><i class="fa fa-fw fa-home fa-2x" style="color:white;"></i>HOME</a> </li>
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light"> <a href="<?php echo base_url(); ?>Auth/logout" class="nav-link text-light text-center d-inline-flex justify-content-center align-items-center"><i class="fa fa-fw fa-sign-out fa-2x" style="color:white;"></i>LOGOUT</a> </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-2 text-center">Data Pengeluaran</h1>
      </div>
    </div>
  </div>

  <div class="h-50">
    <div class="container">
      <div class="row">
        <div class="col-md-12 shadow-none">
          <table id="pengeluaran-table" class="table shadow table-bordered responsive" style="margin:auto;background-color: rgba(64, 147, 194, 0.8); border-radius:10px;color:white">
            <thead>
              <tr>
                <th class="text-center" >ID</th>
                <th class="text-center" >Keterangan</th>
                <th class="text-center" >Harga Pengeluaran</th>
                <th class="text-center" >Tanggal Pengeluaran</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              if($pengeluaran !== FALSE )
              {
              foreach($pengeluaran as $row)
              {
            ?>
              <tr style="color:white;background-color: rgba(64, 147, 194, 0.8)">
                <td class="text-center"PGL><?php echo $row->idPengeluaran; ?></td>
                <td class="text-center"><?php echo $row->keterangan; ?></td>
                <td class="text-center"><?php echo $row->hargaPengeluaran; ?></td>
                <td class="text-center"><?php echo $row->tglPengeluaran; ?></td>
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
    $('#pengeluaran-table').DataTable( {
        responsive: true
      });
});
</script>
</body>

</html>