<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="<?= base_url('assets/'); ?>css/order.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>Platinum Kitchen</title>
</head>

<body>

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top  ">
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
                <h5>Contact us : <strong>062-123457</strong></h5>
        </div>
    </div>

    <!-- Menu -->
    <div class="container">
        <div class="order-list mt-5
      \">

            <h3 class="text-center font-weight-bold">ORDER LIST</h3>

        </div>
        <table class="table table-bordered table-striped table-hover" id="example">
            <thead class="thead-light">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Sub-Total</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no=1;
                foreach ($this->cart->contents() as $items) :?>

                   <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $items['name'] ?></td>
                      <td><?php echo $items['qty'] ?></td>
                      <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.')  ?></td>
                      <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                      
                   </tr>
                 <?php endforeach;?>

                 <tr>
                    <td colspan="4"></td>
                    <td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
                </tr>
            </tbody>
        </table>
        <div align="right">
          <a href="<?php echo base_url('auth/delete') ?>"><div class="btn btn-sm btn-danger" >Delete List</div></a> 
          <a href="<?php echo base_url('auth/order') ?>"onclick="return confirm('ORDER PROCESSSED')"><div class="btn btn-sm btn-success">Order</div></a> 

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
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();

        });
    </script>
</body>
</html>