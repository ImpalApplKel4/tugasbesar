<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- Script Saya-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/loginpage.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme.css">
  <script src="<?php echo base_url(); ?>assets/js/hallogin.js"></script>
</head>

<body class="login">
  <div class="container-login" style="background-image: url(<?php echo base_url(); ?>assets/images/background.png);">
    <div class="row justify-content-md-center">
      <!-- form login -->
      <?php echo form_open('Auth/login'); ?>
      <div class="form" style="margin:0px;padding:10px;width:465.15px;height:385px;">
        <form class="login-form" method="post">
          <h1>Bakso Najwa</h1>
          <div class="form-group username" style="margin:0px;border-radius: 15px 15px 0px 0px;">
              <input id="username" class="form-control" type="text" name="username" placeholder="Username" required autofocus>
          </div>
          <div class="form-group password" style="margin:0px;border-radius: 0px 0px 15px 15px;position: relative">
              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
              <div id="passeye-toggle">
                  <span class="lnr lnr-eye"></span>
            </div>
          </div>
          <button type="submit" name="submit">Login</button>
        </form>
        <?php echo form_close(); ?>
        <?php if ( $this->session->flashdata( 'message' ) ) : ?>
          <p></p>
          <div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $this->session->flashdata( 'message' ); ?></strong>
          </div>         
        <?php endif; ?>
			  <!-- end of form login -->
      </div> 
    </div>
  </div>
</body>

</html>