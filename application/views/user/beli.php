  <!--Body-->
  <div class="container checkout-content">
    <table class="table table-bordered" style="background-color: aliceblue; margin:60px 0px 80px; text-align: center;">
      <thead>
        <tr>
          <th>No.</th>
          <th>Gambar Produk</th>
          <th>Nama Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $items['name'] ?></td>
            <td><?= $items['qty'] ?></td>
            <td>Rp <?= number_format($items['price'], 0, ',', '.') ?></td>
            <td>Rp <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td colspan="4"></td>
          <td>Rp <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
      </tbody>
    </table>
    <div class="container-fluid" style="padding-bottom: 100px;" id="total-section">
      <form class="form-horizontal mx-lg-n4">
        <center>
          <a class="btn btn-danger btn-sm mx-3" href="<?php echo base_url('/user/hapus_keranjang'); ?>">Hapus Keranjang</a>
          <a class="btn btn-success btn-sm mx-3" href="<?php echo base_url('/user/checkout'); ?>">Checkout</a>
        </center>
      </form>
    </div>
  </div>
  <footer>
    <!--about-->
    <div id="about" class="container-fluid padding">
      <div class="row text-center">

        <div class="col-md-4">
          <div class="panel-heading">
            <h1 class="navbar-brand"> <strong> PETSQU </strong></h1>
          </div>
        </div>

        <div class="col-md-4">
          <div class="panel-heading">
            <h5><strong> Business Hours </strong></h5>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 9.00 - 19.00</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="panel-heading">
            <h5> <strong> Social Media </strong></h5>
            <p><i class="fa fa-instagram"></i>Instagram : @petsqushop</p>
          </div>
        </div>

      </div>
      <!-- Copyright -->
      <div id="copyrght" class="footer-copyright text-center py-3">© 2021 PetsQu</div>
  </footer>