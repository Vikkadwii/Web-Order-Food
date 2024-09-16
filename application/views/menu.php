<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="<?= base_url('assets/'); ?>css/menu.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>Platinum Kitchen</title>
</head>

<body>

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg  fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="home.html"><strong>Platinum Kitchen</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/home'); ?>">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>HOME</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/menu'); ?>">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>MENU</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/order'); ?>">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>ORDER</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user'); ?>">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>LOGOUT</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap open -->
    <div class="container">
        <div class="judul text-center " style="margin-top:80px">
            <h3 class="font-weight-bold">Platinum Kitchen</h3>
            <h6>We are only available online for Telkom University area
                <br>Open <strong>06:30 - 23:00</strong></h5>
                <h5>Contact us : <strong>062-123457</strong></h5><br><br>
        </div>
    </div>

    <!-- Menu -->
    <div class="container-fluid">
        <div class="row text-center">

            <?php foreach($barang as $brg) : ?>
                <div class="card ml-4" style="width: 18rem;">
                   <img src="<?php echo base_url().'/assets/Photo/'.$brg->gambar ?>" class="card-img-top" alt="...">
                   <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5>
                    <small><?php echo $brg->keterangan?></small><br>
                    <span class="badge badge-pill badge-secondary mb-3">Rp. <?php echo number_format($brg->harga,0,',','.') ?></span><br>
                    <!-- <a href="#" class="btn btn-sm btn-info">BUY</a> -->
                    <?php echo anchor('Auth/Buy/'.$brg->id_brg,'<div class="btn btn-sm btn-info">BUY</div>')?>
                 </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <hr class="footer">
    <div class="container">
        <div class="row footer-body">
            <div class="col-md-6">
                <div class="copyright">
                    <i class="far fa-copyright"></i> 2022 - Platinum Kitchen - 4404</p>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
