<?php 

$this->load->view('template/meta');
$this->load->view('template/sidebar');
$this->load->view('template/header'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
  </div>

  <!-- Create data group -->
  <div class="card shadow mb-4">
    <div class="card-body">
		<div class="col-lg-7"> 
			<?php echo lang('create_group_subheading');?>
			<!-- Form create data group -->
			<?php echo form_open("auth/create_group");?>

			<div class="form-group row">
				<div class="col-sm-6">
					<?php echo form_input($group_name);
						echo form_error('group_name','<small class="text-danger pl-3">','</small>');?>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-6">
					<?php echo form_input($description); 
						echo form_error('description','<small class="text-danger pl-3">','</small>');?>
				</div>
			</div>

			<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
				Create group
			</button>
			<?php echo form_close();?>
				<!-- /.Form create data group -->
  		</div>
	</div>
  </div>
  <!-- /.Create data group -->
<!-- /.container-fluid -->
<?php $this->load->view('template/footer'); ?>