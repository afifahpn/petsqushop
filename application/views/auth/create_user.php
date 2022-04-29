<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>
<!-- Begin Page Content -->
<?php $this->load->view('template/home/body');?>
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            </div>
			<?php echo lang('create_user_subheading');?>
	
			<!-- Form create data user -->
				<?php echo form_open("auth/create_user");?>
					
				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
					<?php echo form_input($first_name);
					echo form_error('first_name','<small class="text-danger pl-3">','</small>');?>
					</div>

					<div class="col-sm-6">
					<?php echo form_input($last_name);?>
					</div>
				</div>

				<?php
					if($identity_column!=='email') {
					echo '<p>';
					echo lang('create_user_identity_label', 'identity');
					echo '<br />';
					echo form_error('identity');
					echo form_input($identity);
					echo '</p>';
					}
					?>

				<div class="form-group">
					<?php echo form_input($email);
					echo form_error('email','<small class="text-danger pl-3">','</small>');?>
				</div>

				<div class="form-group row"> 
					<div class="col-sm-6">
					<?php echo form_input($phone);
					echo form_error('phone','<small class="text-danger pl-3">','</small>');?>
					</div>
				</div>

				<div class="form-group">
					<?php echo form_input($alamat);
					echo form_error('alamat','<small class="text-danger pl-3">','</small>');?>
				</div>

				<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
					<?php echo form_input($password);
					echo form_error('password','<small class="text-danger pl-3">','</small>');?>
					</div>

					<div class="col-sm-6">
					<?php echo form_input($password_confirm);
					echo form_error('password_confirm','<small class="text-danger pl-3">','</small>');?>
					</div>
				</div>
	
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
				Create User
				</button>
				<?php echo form_close();?><br><br><br>
        <!-- /.Form create data user -->
        	</div>
		</div>
   </div>
  <!-- /.Create data user -->
<!-- /.container-fluid -->