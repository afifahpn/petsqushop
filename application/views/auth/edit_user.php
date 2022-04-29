<?php 
$this->load->view('template/meta');
$this->load->view('template/sidebar');
$this->load->view('template/header'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
	
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo lang('edit_user_heading');?></h1>
	</div>

      <!-- Edit data group -->
	<div class="card shadow mb-4">
      <div class="card-body">
		<div class="col-lg-7"> 
			<p><?php echo lang('edit_user_subheading');?></p>

			<?php echo form_open(uri_string());?>
				<div class="form-group row">
					<div class="col-sm-6">
						<?php echo lang('edit_user_fname_label', 'first_name');?> 
					</div>	
					<div class="col-sm-6">
						<?php echo form_input($first_name);
						echo form_error('first_name','<small class="text-danger pl-3">','</small>');?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<?php echo lang('edit_user_lname_label', 'last_name');?> 
					</div>	
					<div class="col-sm-6">
						<?php echo form_input($last_name);
						echo form_error('last_name','<small class="text-danger pl-3">','</small>');?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<?php echo lang('edit_user_alamat_label', 'alamat');?> 
					</div>	
					<div class="col-sm-6">
						<?php echo form_input($alamat);
						echo form_error('alamat','<small class="text-danger pl-3">','</small>');?>
					</div>
				</div>
				
				<div class="form-group row">
					<div class="col-sm-6">
						<?php echo lang('edit_user_phone_label', 'phone');?> 
					</div>	
					<div class="col-sm-6">
						<?php echo form_input($phone);
						echo form_error('phone','<small class="text-danger pl-3">','</small>');?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<?php echo lang('edit_user_password_label', 'password');?>
					</div>	
					<div class="col-sm-6">
						<?php echo form_input($password);?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
					</div>	
					<div class="col-sm-6">
						<?php echo form_input($password_confirm);?>
					</div>
				</div>

				<?php if ($this->ion_auth->is_admin()): ?>

					<h3><?php echo lang('edit_user_groups_heading');?></h3>
					<?php foreach ($groups as $group):?>
						<label class="checkbox">
						<input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>>
						<?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
						</label>
					<?php endforeach?>

				<?php endif ?>

				<?php echo form_hidden('id', $user->id);?>
				<?php echo form_hidden($csrf); ?>

				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
				Edit User
				</button>

			<?php echo form_close();?>
		</div>
	  </div>
    </div>
</div>
<?php $this->load->view('template/footer'); ?>