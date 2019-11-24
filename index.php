<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fontawesome style -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- google font ubuntu -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- custom style -->
    <link rel="stylesheet" href="css/style.css">
    <title>CMS Project</title>
</head>
<body>
    <!-- start navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pl-5 fixed-top">
            <a href="index.php" class="navbar-brand">CMS Project</a>
            <span class="navbar-text">Custom CMS project</span>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mymenu">
                <ul class="navbar-nav pl-5 cms-nav-menu">
                    <li class="nav-item"><a href="index.php" class="nav-link pl-5">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link pl-5">About</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link pl-5">Services</a></li>
                    <li class="nav-item"><a href="#register" class="nav-link pl-5">Registration</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link pl-5">Login</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link pl-5">Contact</a></li>
                </ul>
            </div>
        </nav>
    <!-- nav end -->
        <!-- start jumbotron -->
        <header class="jumbotron cms-header-img" style="background-image:url(images/cmsprojectmain.jpg)">
            <div class="myclass">
                <h1 class="text-uppercase text-primary font-weight-bold">Welcome to CMS project site</h1>
                <p class="font-italic psize">We are happy to provide excellent CMS site for you</p>
                <a href="login.php" class="btn btn-success mr-4">Login</a>
                <a href="signup.php" class="btn btn-danger mr-4">Sign Up</a>
            </div>
        </header>
        <!-- start about us section -->
        <div class="container" id="about">
            <div class="jumbotron">
                <h3 class="text-center">About</h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam necessitatibus pariatur consequatur, maxime ad ducimus cupiditate obcaecati veritatis dolores magnam consectetur possimus voluptatum officiis ipsam! Sunt sapiente perferendis eos!
                    Officiis praesentium veritatis ratione obcaecati pariatur cumque soluta aliquid quidem nostrum distinctio nam nisi libero, tempore consequatur commodi necessitatibus. Nostrum necessitatibus nisi ipsum asperiores alias exercitationem aliquid aliquam? Pariatur, odit?
                    Veniam delectus maiores consequatur id? Laudantium eius tenetur consectetur expedita! Nam, iusto nulla eius mollitia rerum impedit molestias. Accusantium tempora perspiciatis hic unde voluptates incidunt quibusdam fuga mollitia rem eius?
                    Harum cupiditate rem corrupti assumenda eius corporis maxime possimus nihil, eveniet vero illum minima est veritatis at. Molestias tenetur nam laboriosam sint libero eveniet magni unde. Suscipit doloribus blanditiis alias?
                    Ipsa provident atque debitis minus quibusdam nesciunt laudantium dicta. Possimus esse quidem quia dolores iusto cumque! Aut doloremque laudantium aspernatur vitae eaque totam illum quaerat voluptas tenetur quas? Consequuntur, nemo?
                    Minus dolore nisi optio cupiditate. Facere, exercitationem illo nam voluptatibus sunt suscipit numquam aspernatur maiores porro consequatur perspiciatis. Reiciendis illum sed consequuntur consectetur asperiores! Odio pariatur ea ullam nesciunt ipsam!
                    Iusto blanditiis itaque consequatur unde provident quidem deserunt repellendus modi incidunt in nisi assumenda corrupti accusantium aut, porro architecto alias quo suscipit quibusdam possimus, culpa qui labore magni dignissimos? Tempora.
                    
                </p>

            </div>
        </div><!-- end about us section-->
        <div class="container text-center border-bottom" id="services">
            <h3>Our Services</h3>
            <div class="row mt-4">
                <div class="col-sm-4">
                        <a href=""><i class="fas fa-tv fa-8x text-primary"></i></a>
                        <h4 class="mt-4">Computer Desktop</h4>
                </div>
                <div class="col-sm-4">
                        <a href=""><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                        <h4 class="mt-4">Maintainence</h4>
                </div>
                <div class="col-sm-4">
                        <a href=""><i class="fas fa-drafting-compass fa-8x text-primary"></i></a>
                        <h4 class="mt-4">Graphics Design</h4>
                </div>
            </div>
        </div>
    <!-- End services section -->
    <!-- Start registration form -->
     <?php include_once 'UserRegistration.php'; ?>

    <!-- end registration form -->
    <!-- Start Customer Review -->
        <div class="jumbotron bg-danger">
            
            <div class="container">
            <h2 class="text-center text-white">Customer Review</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                        <img src="images/client1.jpg" alt="customer1" class="img-fluid" style="border-radius:100px">
                        <h4 class="card-title">Customer 1</h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iusto cum deleniti, 
                            officiis.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                        <img src="images/client2.jpg" alt="customer2" class="img-fluid" style="border-radius:100px">
                        <h4 class="card-title">Customer 2</h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iusto cum deleniti, 
                            officiis.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                        <img src="images/client1.jpg" alt="customer3" class="img-fluid" style="border-radius:100px">
                        <h4 class="card-title">Customer 3</h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iusto cum deleniti, 
                            officiis.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                        <img src="images/client2.jpg" alt="customer4" class="img-fluid" style="border-radius:100px">
                        <h4 class="card-title">Customer 4</h4>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iusto cum deleniti, 
                            officiis.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>

    <!-- End customer review -->

    <!-- contact form -->
    <div class="container-fluid" id="contact">
       
        <div class="row ml-5 pt-5">
            <div class="col-md-8">
            <h2 class="text-center">Contact US</h2>
                <h6 class="text-center">Have an enquiry? Fill in the form below and we will get back to you as soon as possible.</h5>
               <?php include_once('contact.php') ?>
            </div>
            <!-- form section end  -->
            <div class="col-md-4 mt-5">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                   <h5>Our Address:</h5>
                   <p>92 Plumstead Highstreet
                   London<br>
                   United Kingdom<br>
                   SE18 1SL</p>
                </div>
            </div>
                <div class="row">
                <div class="col-sm-6 offset-sm-3">
                <h5>Company Detail:</h5>
                   <p> Registration no: 00071 <br>
                   Telephone: 0000123<br>
                   website : <a href="#" target="_blank"> www.customproject.com</a>
                  </p>
                </div></div>
            </div>
        </div>
    </div>
    <!-- end contact form -->
    <!-- footer section -->
   <?php require_once'footer.php';?>
<!-- Javascript  -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>