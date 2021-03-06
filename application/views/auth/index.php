<?php 

$this->load->view('template/meta');
$this->load->view('template/sidebar');
$this->load->view('template/header'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Datatable -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"><?php echo lang('index_heading') ?></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="infoMessage"><?php echo $message;?></div>
				<table class="table table-bordered" id="dataTable" width="100%" cellpadding=0 cellspacing=10>
					<thead>
						<tr>
							<th><?php echo lang('index_fname_th');?></th>
							<th><?php echo lang('index_lname_th');?></th>
							<th><?php echo lang('index_email_th');?></th>
							<th><?php echo lang('index_groups_th');?></th>
							<th><?php echo lang('index_status_th');?></th>
							<th><?php echo lang('index_action_th');?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users as $user):?>
							<tr>
								<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
								<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
								<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
								<td>
									<?php foreach ($user->groups as $group):?>
										<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
									<?php endforeach?>
								</td>
								<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
								<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
				<p><?php echo anchor('auth/create-user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
			</div>
		</div>
	</div>
	<!-- /.Datatable -->
	
</div>
<!-- /.container-fluid -->
<?php $this->load->view('template/footer'); ?>
