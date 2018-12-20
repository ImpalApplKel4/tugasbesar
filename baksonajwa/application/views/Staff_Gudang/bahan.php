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

  <title>Kelola Bahan</title>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.min.css" />

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
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light"> <a href="<?php echo base_url(); ?>StaffGudang/welcome_page_staffgudang" class="nav-link d-inline-flex justify-content-center align-items-center text-light text-center"><i class="fa fa-fw fa-home fa-2x" style="color:white;"></i>HOME</a> </li>
          <li class="nav-item mx-2 d-inline-flex justify-content-center align-items-center text-light"> <a href="<?php echo base_url(); ?>Auth/logout" class="nav-link text-light text-center d-inline-flex justify-content-center align-items-center"><i class="fa fa-fw fa-sign-out fa-2x" style="color:white;"></i>LOGOUT</a> </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
  <?php if ( $this->session->flashdata('alert') ) : ?>
          <p></p>
          <div class="alert alert-warning alert-dismissible" >
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $this->session->flashdata( 'alert' ); ?></strong>
          </div>         
    <?php endif; ?>
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-2 text-center">Data Bahan</h1>
      </div>
    </div>
  </div>

  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
        <button type="button" data-toggle="modal" data-target="#Input" class="btn btn-outline-primary text-center text-dark btn-lg text-capitalize justify-content-center align-items-center flex-grow-0 d-inline-flex border-0" style=""><i class="fa fa-fw fa-plus-square-o pull-left text-dark fa-2x" style="color:white"></i>Input</button></div>
      </div>
    </div>
  </div>
  
  <div class="h-50">
    <div class="container">
      <div class="row">
        <div class="col-md-12 shadow-none">
          <table id="bahan-table" class="table shadow table-bordered responsive" style="background-color: rgba(64, 147, 194, 0.8); border-radius:10px;color:white">
            <thead>
              <tr>
                <th class="text-center" >ID</th>
                <th class="text-center" >Nama</th>
                <th class="text-center" >Tanggal</th>
                <th class="text-center" >Stock</th>
                <th class="text-center" >Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              if($bahan !== false ){
              foreach($bahan as $row)
              {
            ?>
              <tr style="background-color: rgba(64, 147, 194, 0.8); ">
                <td class="text-center">BHN<?php echo $row->idBahan; ?></td>
                <td class="text-center" ><?php echo $row->NamaBahan; ?></td>
                <td class="text-center" ><?php echo $row->tglBahan; ?></td>
                <td class="text-center" ><?php echo $row->stockBahan; ?></td>
                <td class="w-25">
                  <button data-toggle="modal" data-target="#edit<?php echo $row->idBahan; ?>" class="btn btn-success mx-3 shadow text-center align-items-center justify-content-center" style="	backgroud-color: #1E8D4D;	border-radius: 20px;	margin-bottom:5px;width: 76.65px;	height: 35px;">Edit</button>
                  <button data-toggle="modal" data-target="#delete<?php echo $row->idBahan; ?>" class="btn btn-danger mx-3 shadow" style="	backgroud-color: #9B1C1C;	border-radius: 20px;	width: 76.65px;	height: 35px;margin-bottom:5px;">Delete</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <?php 
      foreach($bahan as $row){
    ?>

    <!--EDIT-->
    <div class="modal fade" id="edit<?php echo $row->idBahan; ?>" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <?php echo form_open("StaffGudang/editbahan"); ?>
        <div class="modal-content" style="background-color: #4093C2;">
          <div class="modal-header" style="background-color: white;margin:0px">
            <h4 class="modal-title">Edit Bahan</h4>
            <button type="button" class="btn btn-danger" style="border-radius: 100px" data-dismiss="modal">&times;</button>          
          </div>
          <div class="modal-body" style="background-color: #4093C2;margin:0px">
            <input type="hidden" name="idBahan" value="<?php echo $row->idBahan; ?>">
            <div class="form-group">
              <label for="NamaBahan" style="color: white;"><b>Nama: </b></label>
              <input type="text" maxlength="20" class="form-control" id="NamaBahan" name="NamaBahan" value="<?php echo $row->NamaBahan; ?>" placeholder="Nama Bahan" required>           
            </div>
            <div class="form-group">
              <label for="tglBahan" style="color: white;"><b>Tanggal: </b></label>
              <input type="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="form-control" id="tglBahan" name="tglBahan"  value="<?php echo $row->tglBahan; ?>" placeholder="Tanggal" required>           
            </div>
            <div class="form-group">
              <label for="stockBahan" style="color: white;"><b>Stock: </b></label>
              <input type="number" step="0.01" maxlength="11" class="form-control" id="stockBahan" name="stockBahan" value="<?php echo $row->stockBahan; ?>" placeholder="Stock Bahan" required>           
            </div>
          </div>
          <div class="modal-footer" style="background-color: #4093C2; margin:0px">
            <button type="submit" class="btn btn-success mx-3 shadow text-center align-items-center justify-content-center" style="	backgroud-color: #1E8D4D;	border-radius: 20px;	width: 76.65px;	height: 35px;">Submit</button>
          </div>
        <?php echo form_close(); ?>
        </div>
      </div>
    </div>

<!-- Delete -->
<?php echo form_open("StaffGudang/deleteBahan"); ?>
  <div class="modal fade" id="delete<?php echo $row->idBahan; ?>" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <input type="hidden" name="idBahan" value="<?php echo $row->idBahan; ?>">
          <p>Apakah Anda yakin ingin menghapus data bahan <?php echo $row->NamaBahan; ?>?</p>
          <button type="submit" class="btn btn-success mx-5 shadow" style="border-radius: 20px;width: 76.65px;	height: 35px">YES</button>
          <button type="button" class="btn btn-danger mx-5 shadow" style="border-radius: 20px;width: 76.65px;	height: 35px" data-dismiss="modal">NO</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
  <?php }} ?>

<div class="modal fade" id="Input" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <?php echo form_open("StaffGudang/insertBahan"); ?>
    <div class="modal-content" style="background-color: #4093C2; margin:0px">
      <div class="modal-header" style="background-color: white; margin:0px">
        <h4 class="modal-title">Input Bahan</h4>
        <button type="button" class="btn btn-danger" style="border-radius: 100px" data-dismiss="modal">&times;</button>          
      </div>
      <div class="modal-body" style="background-color: #4093C2;">
        <div class="form-group">
          <label for="NamaBahan" style="color: white;"><b>Nama: </b></label>
          <input type="text" maxlength="20" class="form-control" id="NamaBahan" name="NamaBahan" placeholder="Nama Bahan" required>           
        </div>
        <div class="form-group">
          <label for="tglBahan" style="color: white;"><b>Tanggal: </b></label>
          <input type="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="form-control" id="tglBahan" name="tglBahan"  placeholder="Tanggal" required>           
        </div>
        <div class="form-group">
          <label for="stockBahan" style="color: white;"><b>Stock: *Satuan KG</b></label>
          <input type="number" step="0.01" maxlength="11" class="form-control" id="stockBahan" name="stockBahan" placeholder="Stock Bahan" required>*  
        </div>
      </div>
      <div class="modal-footer" style="opacity: 0%;">
        <button type="submit" class="btn btn-success mx-3 shadow text-center align-items-center justify-content-center" data-toggle="modal" style=" backgroud-color: #1E8D4D; border-radius: 20px;  width: 76.65px; height: 35px;"> Submit</button>
      </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#bahan-table').DataTable({
      responsive:true
    });
});
</script>
</body>

</html>