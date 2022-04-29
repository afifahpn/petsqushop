<body>
    <div style="position: relative;">
        <div class="divider" class="container-fluid">
            <div class="text-center">
                <img src="<?php echo base_url() . 'assets/images/cat2.jpg'; ?>" width="30%">
            </div>
        </div>
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" fill="#F8F9FA" fill-opacity="1"></path>
        </svg>
    </div>
    <br> <br><br>
    <main>
        <center>
            <h1>Produk</h1>
        </center> <br>
        <div class="container">
            <!-- Dogs-Food -->
            <div class="section-dog">
                <h3>Makanan Anjing</h3> <br>
                <div class="row">
                    <?php foreach ($anjing->result() as $row) : ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 15rem; background-color:#7BA377;">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->gambar_produk; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row->nama_produk ?></h5>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <p class="card-text">Harga : Rp <?= $row->harga_produk ?></p>
                                        </div>
                                        <a href="<?php echo base_url('/user/tambah_keranjang/' . $row->id_produk) ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div> <br>
            <div class="section-cat">
                <h3>Makanan Kucing</h3> <br>
                <div class="row">
                    <?php foreach ($kucing->result() as $row) : ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 15rem; background-color:#7BA377;">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->gambar_produk; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row->nama_produk ?></h5>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <p class="card-text">Harga : Rp <?= $row->harga_produk ?></p>
                                        </div>
                                        <a href="<?php echo base_url('/user/tambah_keranjang/' . $row->id_produk) ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div> <br>
            <div class="section-bird">
                <h3>Makanan burung</h3> <br>
                <div class="row">
                    <?php foreach ($burung->result() as $row) : ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 15rem; background-color:#7BA377;">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->gambar_produk; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row->nama_produk ?></h5>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <p class="card-text">Harga : Rp <?= $row->harga_produk ?></p>
                                        </div>
                                        <a href="<?php echo base_url('/user/tambah_keranjang/' . $row->id_produk) ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div> <br><br>
            <div class="section-fish">
                <h3>Makanan Ikan</h3> <br>
                <div class="row">
                    <?php foreach ($ikan->result() as $row) : ?>
                        <div class="col-sm-3">
                            <div class="card" style="width: 15rem; background-color:#7BA377;">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->gambar_produk; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row->nama_produk ?></h5>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <p class="card-text">Harga : Rp <?= $row->harga_produk ?></p>
                                        </div>
                                        <a href="<?php echo base_url('/user/tambah_keranjang/' . $row->id_produk) ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div> <br><br>

        </div>
    </main>
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
</body>
<!-- End Bagian wrapper -->