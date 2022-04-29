<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Content Row -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
		</div>
		<div class="card-body">
			<?php if($this->session->flashdata('pesan')): ?>
				<div class="alert <?php echo $this->session->flashdata('alert');?>"><?php echo $this->session->flashdata('pesan');?></div>
			<?php endif; ?>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellpadding=0 cellspacing=10>
					<thead>
						<tr>
							<th> No </th>
							<th> Id Pembelian</th>
							<th> Id Produk</th>
							<th> Id Pelanggan</th>
							<th> Tanggal pembelian</th>
							<th> Jumlah</th>
							<th> Harga </th>
							<th> Total </th>
							<th> Aksi </th>
						</tr>
					</thead>
					<tbody>	
					<?php $nomor=1;?>
						<?php foreach ($tampil->result() as $row ) :?>
							<tr>
								<td> <?php echo $nomor;?> </td>
								<td> <?php echo $row->id_pembelian;?></td>
								<td> <?php echo $row->id_produk;?></td>
								<td> <?php echo $row->harga_produk;?></td>
								<td>
									<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editmodal<?php echo $row->id_produk;?>"><i class="fa fa-edit"></i> Ubah</button>
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusmodal<?php echo $row->id_produk;?>"><i class="fa fa-trash"></i> Hapus</button>
								</td>
							</tr>
							<?php $nomor++;?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
