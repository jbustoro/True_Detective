<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>True Detective</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="assets/css/grayscale.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/carcosa.png" type="image/png">
    <!-- Font awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#sypnosis">Sypnosis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#trailer">Trailer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#signUp">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Intro Header -->
    <header class="masthead">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <a href="#sypnosis" class="btn btn-circle js-scroll-trigger">
                            <i class="fa fa-angle-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Sypnosis Section -->
    <section id="sypnosis" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Sypnosis</h2>
                    <p>In 2012, Louisiana State Police Detectives Rust Cohle and Martin Hart are brought in to revisit a homicide case they worked in 1995. As the inquiry unfolds in present day through separate interrogations, the two former detectives narrate the story of their investigation, reopening unhealed wounds, and drawing into question their supposed solving of a bizarre ritualistic murder in 1995. The timelines braid and converge in 2012 as each man is pulled back into a world they believed they'd left behind. In learning about each other and their killer, it becomes clear that darkness lives on both sides of the law.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Trailer Section -->
    <section id="trailer">
        <div class="video-container">
            <!--<iframe width="560" height="349" src="https://www.youtube.com/embed/fVQUcaO4AvE?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>-->
            <video controls>
                <source src="assets/video/True_Detective-S01_Trailer.mp4" type="video/mp4"/>
            </video>
        </div>
    </section>
    <!-- Sign up to newsletter section -->
    <section id="signUp" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="form">
                        <h4>SIGN UP TO OUR NEWSLETTER</h4>
                        <form method="POST" action="signUp" class="form-inline">
                            {!! csrf_field() !!}
                            <input class="form-control" type="email" name="email" placeholder="Email Address">
                            <button class="btn btn-basic" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="container text-center">
            <img class="logo" src="assets/img/carcosa.png"/>
            <p>Copyright &copy; Jesus Busto Romero 2017</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="assets/js/grayscale.js"></script>
</body>
</html>
