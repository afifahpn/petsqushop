<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Content Row -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"><?php echo ("Manage " . $title); ?>
				<a href="<?php echo base_url('/produk/tambah'); ?>" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah</a> <br>
			</h6>
		</div>
		<div class="card-body">
			<?php if ($this->session->flashdata('pesan')) : ?>
				<div class="alert <?php echo $this->session->flashdata('alert'); ?>"><?php echo $this->session->flashdata('pesan'); ?></div>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellpadding=0 cellspacing=10>
					<thead>
						<tr>
							<th> No </th>
							<th> Nama Produk</th>
							<th> Gambar Produk</th>
							<th> Deskripsi Produk</th>
							<th> Harga Produk</th>
							<th> Aksi </th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1; ?>
						<?php foreach ($tampil->result() as $row) : ?>
							<tr>
								<td> <?php echo $nomor; ?> </td>
								<td> <?php echo $row->nama_produk; ?></td>
								<td> <img src="<?php echo base_url() . 'assets/images/' . $row->gambar_produk; ?>" width="100"></td>
								<td> <?php echo $row->deskripsi_produk; ?></td>
								<td> <?php echo $row->harga_produk; ?></td>
								<td>
									<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editmodal<?php echo $row->id_produk; ?>"><i class="fa fa-edit"></i> Ubah</button>
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusmodal<?php echo $row->id_produk; ?>"><i class="fa fa-trash"></i> Hapus</button>
								</td>
							</tr>
							<?php $nomor++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Gambar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<!-- Form create data produk -->
				<?php echo form_open_multipart(base_url('/produk/prosesTambah')); ?>
				<div class="form-group">
					<label for="name">Nama Produk</label>
					<input type="text" name="nama" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Deskripsi Produk</label>
					<textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
				</div>

				<div class="form-group">
					<label for="name">Foto</label>
					<input type="file" name="userfile" id="userfile" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Harga Produk</label>
					<input type="number" name="harga" class="form-control">
				</div>

				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-primary"> Create
				</div>
				<?php echo form_close(); ?>
				<!-- /.Form create data produk -->
			</div>
		</div>
	</div>
</div>
<!--  akhir Modal tambah-->

<!-- Modal edit-->
<?php $no = 0;
foreach ($tampil->result() as $row) : $no++
?>
	<div class="modal fade" id="editmodal<?php echo $row->id_produk; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<?php echo form_open_multipart(base_url('/Produk/prosesEdit/' . $row->id_produk)); ?>

					<div class="form-group">
						<label class="control-label">Nama Produk</label>
						<?php
						$data = array(
							'type'  => 'text',
							'name'  => 'nama',
							'id'    => 'nama',
							'class' => 'form-control',
							'value' => set_value('nama', $row->nama_produk)
						);
						echo form_input($data);
						?>
					</div>
					<div class="form-group">
						<label class="control-label">Deskripsi</label>
						<?php
						$data = array(
							'type'  => 'text',
							'name'  => 'deskripsi',
							'id'    => 'deskripsi',
							'class' => 'form-control',
							'value' => set_value('deskripsi', $row->deskripsi_produk),
							'placeholder' => 'Grow with happy'
						);
						echo form_textarea($data);
						?>
					</div>
					<div class="form-group">
						<label for="name">Foto</label>
						<input type="file" name="userfile" id="userfile" class="form-control">
						<img src="<?php echo base_url() . 'assets/images/' . $row->gambar_produk; ?>" width="100">
					</div>
					<div class="form-group">
						<label class="control-label">Harga Produk</label>
						<?php
						$data = array(
							'type'  => 'number',
							'name'  => 'harga',
							'id'    => 'harga',
							'class' => 'form-control',
							'value' => set_value('harga', $row->harga_produk),
							'placeholder' => 'Rp 500.000'
						);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="modal-footer">
					<button type="reset" class="btn btn-secondary"> Reset </button>
					<button type="submit" name="submit" class="btn btn-primary"> Edit Produk </button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- akhir Modal edit-->

<!-- Modal hapus-->
<?php $no = 0;
foreach ($tampil->result() as $row) : $no++
?>
	<div class="modal fade" id="hapusmodal<?php echo $row->id_produk; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php echo form_open(base_url('/produk/hapus/' . $row->id_produk)); ?>
				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-danger"> Hapus
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<td>
	<?php
	if ($listkuesioner['jumlah_pegawai_tetap'] != 0) {
		$persentasetetap = $listkuesioner['jumlah_responden_tetap_skkp'] / $listkuesioner['jumlah_pegawai_tetap'] * 100;
	} else {
		$persentasetetap = 0;
	}
	?>
	<div class="progress progress-xs">
		<div class="progress-bar 
		<?php if ($persentasetetap <= 30) {
			echo "progress-bar-danger";
		} elseif ($persentasetetap >= 31 && $persentasetetap <= 60) {
			echo "progress-bar-warning";
		} elseif ($persentasetetap >= 61 && $persentasetetap <= 99) {
			echo "progress-bar-success";
		} ?>" role="progressbar" aria-valuenow="<?= number_format($persentasetetap, 2); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= number_format($persentasetetap, 2); ?>%;"></div>
	</div>
	<small>Progress : <?= number_format($persentasetetap, 2); ?>%</small>
</td>
<!-- akhir Modal hapus-->