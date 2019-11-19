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
                    <li class="nav-item"><a href="index.php" class="nav-link pl-5">About</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link pl-5">Services</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link pl-5">Registration</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link pl-5">Login</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link pl-5">Contact</a></li>
                </ul>
            </div>
        </nav>
    <!-- nav end -->
        <!-- start jumbotron -->
        <header class="jumbotron cms-header-img" style="background-image:url(images/vision.jpg)">
            <div class="myclass">
                <h1 class="text-uppercase text-primary font-weight-bold">Welcome to CMS project site</h1>
                <p class="font-italic psize">We are happy to provide excellent CMS site for you</p>
                <a href="login.php" class="btn btn-success">Login</a>
                <a href="signup.php" class="btn btn-danger mr-4">Sign Up</a>
            </div>
        </header>
        <!-- start about us section -->
        <div class="container">
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
        <div class="container text-center border-bottom">
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
        <div class="coinainter pt-5">
            <h2 class="text-center">Register to make new account</h2>
            <div class="row mt-4 mb-4">
                <div class="col-md-4 offset-md-4">
                    <form action="" class="shadow-lg p-4" method="POST">
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <label for="name" class="font-weight-bold pl-2">Name</label>
                            <input type="text" class="form-control" name="rName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <label for="email" class="font-weight-bold pl-2">Email</label>
                            <input type="email" class="form-control" name="rEmail" placeholder="Email">
                            <small class="form-text">We will never share you email with any one</small>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <label for="password" class="font-weight-bold pl-2">Password</label>
                            <input type="password" class="form-control" name="rPass" placeholder="Password">
                        </div>
                        <button class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                        <em style="font-size:10px">Note- By clicking sign up, you agree to our Terms , Data Policy and Cookie Ploicy</em>
                    </form>
                </div>
            </div>



        </div>

    <!-- end registration form -->
<!-- Javascript  -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>