<?php 
$this->load->view('template/meta');
$this->load->view('template/sidebar');
$this->load->view('template/header'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
	
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo lang('deactivate_heading');?></h1>
	</div>

	<!-- Edit data group -->
	<div class="card shadow mb-4">
      <div class="card-body">
		<div class="col-lg-7"> 
			<p><?php echo sprintf(lang('deactivate_subheading'), $user->{$identity}); ?></p>

			<?php echo form_open("auth/deactivate/".$user->id);?>

				<p>
					<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
					<input type="radio" name="confirm" value="yes" checked="checked" />
					<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
					<input type="radio" name="confirm" value="no" />
				</p>

				<?php echo form_hidden($csrf); ?>
				<?php echo form_hidden(['id' => $user->id]); ?>
				
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
				Edit Group
				</button>

			<?php echo form_close();?>
		</div>
	  </div>
    </div>
<!-- /.Edit data group -->

</div>
<!-- /.container-fluid -->
<?php $this->load->view('template/footer'); ?>