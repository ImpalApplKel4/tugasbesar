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
  

  <title>Kelola Karyawan</title>
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
  <?php if ( $this->session->flashdata('alert') ) : ?>
          <p></p>
          <div class="alert alert-warning alert-dismissible" >
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $this->session->flashdata( 'alert' ); ?></strong>
          </div>         
    <?php endif; ?>
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-2 text-center">Data Karyawan</h1>
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
          <table id="karyawan-table" class="table shadow table-bordered responsive" style="margin:auto;color:white;background-color: rgba(64, 147, 194, 0.8); border-radius:10px">
            <thead>
              <tr >
                <th class="text-center">NIK</th>
                <th class="text-center">Nama Karyawan</th>
                <th class="text-center">Gaji</th>
                <th class="text-center">Nomor Hp</th>
                <th class="text-center">Divisi</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              if($karyawan !== false){
              foreach($karyawan as $row)
              {
            ?>
              <tr style="background-color: rgba(64, 147, 194, 0.8)">
                <td class="text-center" >KRYW<?php echo $row->NIK; ?></td>
                <td class="text-center" ><?php echo $row->NamaKar; ?></td>
                <td class="text-center" >Rp <?php echo $row->Gaji; ?></td>
                <td class="text-center" ><?php echo $row->noHP; ?></td>
                <td class="text-center" ><?php echo $row->Divisi; ?></td>
                <td class="w-25">
                  <button data-toggle="modal" data-target="#edit<?php echo $row->NIK; ?>" class="btn btn-success mx-3 shadow text-center align-items-center justify-content-center" style="	backgroud-color: #1E8D4D;	border-radius: 20px;	margin-bottom:5px;width: 70px;	height: 35px;">Edit</button>
                  <button data-toggle="modal" data-target="#delete<?php echo $row->NIK; ?>" class="btn btn-danger mx-3 shadow" style="backgroud-color: #9B1C1C;	border-radius: 20px;	width: 70px;	height: 35px;margin-bottom:5px;">Delete</button>
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
      foreach($karyawan as $row){
     ?>

      <!--EDIT-->
      <div class="modal fade" id="edit<?php echo $row->NIK; ?>" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <?php echo form_open("Pemilik/editkaryawan"); ?>
          <div class="modal-content" style="background-color: #4093C2;">
            <div class="modal-header" style="background-color: white;margin:0px">
              <h4 class="modal-title">Edit Karyawan</h4>
              <button type="button" class="btn btn-danger" style="border-radius: 100px" data-dismiss="modal">&times;</button>          
            </div>
            <div class="modal-body" style="background-color: #4093C2;margin:0px">
              <input type="hidden" name="NIK" value="<?php echo $row->NIK; ?>">
              <div class="form-group">
                <label for="Nama" style="color: white;"><b>Nama: </b></label> 
                <input type="text"  maxlength="50" class="form-control" id="NamaKar" name="NamaKar" value="<?php echo $row->NamaKar; ?>" placeholder="Nama Karyawan" required>           
              </div>
              <div class="form-group">
                <label for="Gaji" style="color: white;"><b>Gaji: </b></label>
                <input type="number" min="500000" class="form-control" id="Gaji" name="Gaji"  value="<?php echo $row->Gaji; ?>" placeholder="Gaji" required>           
              </div>
              <div class="form-group">
                <label for="nohp" style="color: white;"><b>No HP: </b></label>
                <input type="text" minlength="7" maxlength="13" class="form-control" id="noHP" name="noHP" value="<?php echo $row->noHP; ?>" placeholder="ex:089xxxxxx" required>           
              </div>
              <div class="form-group">
                <label for="Divisi" style="color: white;"><b>Divisi: </b></label>
                <select class="form-control" id="Divisi" name="Divisi" required>  
                  <option><?php echo $row->Divisi; ?></option>
                  <option>Keuangan</option>
                  <option>Staff Gudang</option>
                  <option>Staff produksi</option>
                  <option>Service</option>
                </select>         
              </div>
            </div>
            <div class="modal-footer" style="background-color: #4093C2; margin:0px">
              <button type="submit" class="btn btn-success mx-3 shadow text-center align-items-center justify-content-center" style="	backgroud-color: #1E8D4D;	border-radius: 20px;	width: 76.65px;	height: 35px;">Submit</button>
            </div>
          <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
        

<!-- Delete -->
<?php echo form_open("Pemilik/deleteKaryawan"); ?>
  <div class="modal fade" id="delete<?php echo $row->NIK; ?>" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <input type="hidden" name="NIK" value="<?php echo $row->NIK; ?>">
          <p>Apakah Anda yakin ingin menghapus data karyawan bernama <?php echo $row->NamaKar; ?>?</p>
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
        <?php echo form_open('Pemilik/insertKaryawan') ?>
          <div class="modal-content" style="background-color: #4093C2; margin:0px">
            <div class="modal-header" style="background-color: white; margin:0px">
              <h4 class="modal-title">Input Karyawan</h4>
              <button type="button" class="btn btn-danger" style="border-radius: 100px" data-dismiss="modal">&times;</button>          
            </div>
            <div class="modal-body" style="background-color: #4093C2;">
              <div class="form-group">
                <label for="Nama" style="color: white;"><b>Nama: </b></label>
                <input type="text" class="form-control" maxlength="50" id="NamaKar" name="NamaKar" placeholder="Nama Karyawan" required>           
              </div>
              <div class="form-group">
                <label for="Gaji" style="color: white;"><b>Gaji: </b></label>
                <input type="number" class="form-control" id="Gaji" name="Gaji" min="500000"placeholder="ex: 500000" required>           
              </div>
              <div class="form-group">
                <label for="nohp" style="color: white;"><b>No HP: </b></label>
                <input type="text" minlength="7" maxlength="13" class="form-control" id="noHP" name="noHP" placeholder="ex:089xxxxxx" required>           
              </div>
              <div class="form-group">
                <label for="Divisi" style="color: white;"><b>Divisi: </b></label>
                <select class="form-control" id="Divisi" name="Divisi" required>
                  <option>Keuangan</option>
                  <option>Staff Gudang</option>
                  <option>Staff produksi</option>
                  <option>Service</option>
                </select>           
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
    $('#karyawan-table').DataTable({
      responsive:true
    });
});
</script>
</body>

</html>