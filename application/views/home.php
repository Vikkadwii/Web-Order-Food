<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link href="<?= base_url('assets/'); ?>css/home.css" rel="stylesheet">
    <title>Platinum Kitchen</title>
</head>

<body>

    <!-- Bootstrap awal -->
    <img alt="Image" style="width:1263px;height:350px" src=" <?= base_url('Photo/home1.jpeg'); ?>">
    <div class="container-fluid" id="footers">

        <h1 class="text-center" style="font-weight:bold ;padding-top:50px; position: absolute;
			left: 350px;
			top: 45px;
			color: white;
            font-size:60px;">Platinum Kitchen <br>
        </h1>

        <p class="text-center" style="font-weight:bold ;padding-top:30px; position: absolute;
			left: 550px;
			top: 150px;
			color: white;">Do you wanna eat ? <br>
            We are here</p>
    </div>

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg" id="myheader">
        <div class="container">
            <a class="navbar-brand text-white"><strong>Platinum Kitchen</a>
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
                            <?php
                              $Buy = ''.$this->cart->total_items().'item'
                            ?>
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
    <div class="content">
        <div class="container ">
            <div class="judul text-center mt-5">
                <h3 class="font-weight-bold">Platinum Kitchen</h3>
                <h6>We are only available online for Telkom University area
                    <br>Open <strong>06:30 - 23:00</strong></h5>
                    <h5>Contact us : <strong>062-123457</strong></h5>
            </div>
        </div>

        <!-- Desc quality of our menu -->
        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <img class="img-profile rounded-circle" src="<?= base_url('Photo/home2.jpg'); ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <center>AFFORDABLE</center>
                        </h5>
                    </div>
                </div>
                <div class="card">
                    <img class="img-profile rounded-circle" src="<?= base_url('Photo/home3.jpg'); ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <center>BEST QUALITY</center>
                        </h5>
                    </div>
                </div>
                <div class="card">
                    <img class="img-profile rounded-circle" src="<?= base_url('Photo/home4.jpg'); ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <center>FAST</center>
                        </h5>
                    </div>
                </div>
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
    </div>
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        // Get the header
        var header = document.getElementById("myheader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>

</body>


</html>