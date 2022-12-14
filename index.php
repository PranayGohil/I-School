<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSchool</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet" />

    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <!--Start Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-5">
        <a class="navbar-brand" href="index.php">iSchool</a>
        <span class="navbar-text">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav custom-nav">
                <li class="nav-item custom-nav-item active">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item custom-nav-item ">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item custom-nav-item ">
                    <a class="nav-link" href="#">Payment</a>
                </li>
                <li class="nav-item custom-nav-item ">
                    <a class="nav-link" href="#">My Profile</a>
                </li>
                <li class="nav-item custom-nav-item ">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item custom-nav-item ">
                    <a class="nav-link" href="#">Logout</a>
                </li>
                <li class="nav-item custom-nav-item ">
                    <a class="nav-link" href="#">Signup</a>
                </li>
                <li class="nav-item custom-nav-item ">
                    <a class="nav-link" href="#">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--End Navbar-->

    <!-- start back video -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted>
                <source src="video/">
            </video>
        </div>
    </div>
    <!-- end back video -->


    
    <!-- Link JQuery and Bootstrap Javascripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>

</body>

</html>