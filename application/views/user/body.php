<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" role="navigation">
    <a class="navbar-brand" href="<?php echo base_url('home');?>">PetsQu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <form class="form-inline mr-sm-5 my-lg-0" method="get" action="produk.php" name="ceknota">
          <input class="form-control mr-sm-2" type="text" placeholder="Makanan Kucing" name="idnota">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('user');?>">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('user/produk');?>">PRODUCT <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <?php $keranjang = $this->cart->total_items()?>
          <a class="nav-link" href="<?php echo base_url('user/beli');?>"> <i class="fa fa-shopping-cart">
          </i> <span class="badge badge-primary badge-counter"><?=$keranjang?></span><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="btn btn-secondary mr-sm-2 ml-sm-2" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
        </li>
        
      </ul>
    </div>
  </nav>