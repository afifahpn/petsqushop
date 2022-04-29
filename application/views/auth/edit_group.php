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
	
	<!-- Edit data group -->
	<div class="card shadow mb-4">
      <div class="card-body">
		<div class="col-lg-7"> 
			<p><?php echo lang('edit_group_subheading');?></p>
			<!-- Form Edit data group -->
			<?php echo form_open(current_url());?>

			<div class="form-group row">
				<div class="col-sm-6">
					<?php echo lang('edit_group_name_label', 'group_name');?>
				</div>
				<div class="col-sm-6">
					<?php echo form_input($group_name);
					echo form_error('group_name','<small class="text-danger pl-3">','</small>');?>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-6">
					<?php echo lang('edit_group_desc_label', 'description');?>
				</div>
				<div class="col-sm-6">
					<?php echo form_input($group_description);?>
				</div>
			</div>

			<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
			Edit Group
			</button>
			<?php echo form_close();?>
			<!-- /.Form Edit data group-->
		</div>
	  </div>
    </div>
<!-- /.Edit data group -->

</div>
<!-- /.container-fluid -->
<?php $this->load->view('template/footer'); ?>