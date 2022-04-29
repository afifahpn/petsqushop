<div class="container"> <br><br>
    <center>
        <div class="btn btn-sm btn-success">
        <?php $grand_total = 0;
        if ($keranjang = $this->cart->contents())
        {
            foreach ($keranjang as $item)
            {
                $grand_total = $grand_total + $item['subtotal'];
            }
            echo "<h4>Total Belanja Anda: Rp ".number_format($grand_total,0,',','.');
        
            ?>
        </div><br><br>
        <h3>Input Alamat Pengiriman dan Pembayaran</h3> <br><br>
    </center>
    <?php echo form_open_multipart(base_url('User/prosesCheckout/'));?>
		<div class="form-group row">
			<label class="control-label col-2">Nama</label>
				<div class="col-9">
                    <?php 
						$data = array(
							'type'  => 'text',
							'name'  => 'nama',
							'id'    => 'nama',
							'class' => 'form-control',
							'value' => set_value('nama', $this->session->userdata('identity'))
						);
						echo form_input($data);
						?>
				</div>
        </div>
		
        <div class="form-group row">
			<label class="control-label col-2">Alamat</label>
				<div class="col-9">
                    <?php 
						$data = array(
							'type'  => 'text',
							'name'  => 'alamat',
							'id'    => 'alamat',
							'class' => 'form-control',
						);
						echo form_input($data);
						?>
				</div>
        </div>
        
        <div class="form-group row">
			<label class="control-label col-2">No. Telp</label>
				<div class="col-9">
                    <?php 
						$data = array(
							'type'  => 'text',
							'name'  => 'no.telp',
							'id'    => 'no.telp',
							'class' => 'form-control',
						);
						echo form_input($data);
						?>
				</div>
        </div>
        <div class="form-group row">
            <label class="control-label col-2">Jasa Pengiriman</label>
            <div class="col-9">
                <select class="form-control" name="bank" id="bank">
                    <option disabled selected> Pilih</option>
                    <option> JNE</option>
                    <option> J&T</option>
                    <option> Sicepat</option>
                    <option> Grab</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label class="control-label col-2">Pilih Bank</label>
            <div class="col-9">
                <select class="form-control" name="bank" id="bank">
                    <option disabled selected> Pilih</option>
                    <option> BCA - 123587</option>
                    <option> BNI - 1245378302</option>
                    <option> BRI - 091377622</option>
                    <option> DKI - 1983516892</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"> Pesan </button>
        <?php echo form_close();?>
    <?php 
    } else {
        echo " <div class='btn btn-sm btn-light'> Keranjang belanja anda masih kosong </div>";
    } ?>
</div>
