<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/headfoot.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/comment.css">

        <title>Hello, world!</title>
    </head>
    <body>
        <!--  Navbar jangan lupa dihapus dan diganti include 'header.php'-->
        <nav class="navbar navbar-expand-md navbar-light sticky-top header-top">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 twocollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mr-auto order-0">
                <button class="navbar-toggler justify-content-start" type="button" data-toggle="collapse" data-target=".twocollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand brand mx-auto" href="#">Savoy</a>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 twocollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign up</a>
                    </li>
                </ul>
            </div>
            <ul class="nav ml-auto order-md-4 order-sm-0">
                <li class="nav-item cart">
                    <a href="#" class="nav-link">Cart <sup id="quantityCart">0</sup></a>
                </li>
            </ul>
        </nav>

        <!--Comment Section-->

        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                    <div class="row" style="background-color: #eeeeee; height: 250px;">
                        <div class="col-md-3">
                            <img src="<?php echo base_url()?>/assets/img/product/<?php echo $barang->nama?>.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h1 style="margin-top: 2.5em;"><?php echo $barang->nama?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 text-center mt-5">
                    <form action="">
                        <div class="form-group">
                            <textarea class="form-control" id="cmtUser" name="cmtUser" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn form-control btn-cmt">Comment</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                    <div class="line-comment"></div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">

                <div class="col-sm-12 col-md-8">
                    <!-- Comments people: maximum per halaman ialah 5 comment -->
                    <div class="otr-cmt">
                        <h4 class="ml-4 mt-4">Name</h4>
                        <p class="ml-4 mr-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus earum facere sunt voluptas rem velit totam ratione ad quo placeat maxime illum unde sint, voluptate eaque facilis officia temporibus corporis.</p>
                    </div>
                    <div class="otr-cmt">
                        <h4 class="ml-4 mt-4">Name</h4>
                        <p class="ml-4 mr-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus earum facere sunt voluptas rem velit totam ratione ad quo placeat maxime illum unde sint, voluptate eaque facilis officia temporibus corporis.</p>

                    </div>
                    <div class="otr-cmt">
                        <h4 class="ml-4 mt-4">Name</h4>
                        <p class="ml-4 mr-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus earum facere sunt voluptas rem velit totam ratione ad quo placeat maxime illum unde sint, voluptate eaque facilis officia temporibus corporis.</p>

                    </div>
                    <div class="otr-cmt">
                        <h4 class="ml-4 mt-4">Name</h4>
                        <p class="ml-4 mr-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus earum facere sunt voluptas rem velit totam ratione ad quo placeat maxime illum unde sint, voluptate eaque facilis officia temporibus corporis.</p>

                    </div>
                    <div class="otr-cmt">
                        <h4 class="ml-4 mt-4">Name</h4>
                        <p class="ml-4 mr-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus earum facere sunt voluptas rem velit totam ratione ad quo placeat maxime illum unde sint, voluptate eaque facilis officia temporibus corporis.</p>

                    </div>

                    <!-- Pagination, kalau bisa di php jadi si li page-item ini digenerate dengan sebanyak commnentnya -->

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Atau kalau mau simple jadi begini saja dibikin iterasi 5 generate buat commentnya, mangga dipilih -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#
                                   " aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!--footer jangan lupa dihapus footernya dan diganti include 'footer.php'  -->
        <footer>
            <nav class="navbar for-footer">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Order Tracking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
