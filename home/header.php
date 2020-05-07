<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> تدويناتي</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index_style.css">
</head>

<body class="bg-light">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="index.php">تدويناتي</a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">  معلومات عنا  </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="mix.php">منوعات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">تواصل معنا</a>
                    </li>
                    <!-- condition login & logout -->
                    <?php 
                    session_start();
                    if(! isset($_SESSION['id'])) : ?>
                    <li class="nav-item">

                        <a class="nav-link  font-weight-bold" href="logout.php"> 
                         تسجيل دخول  
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                         </a>
                    </li>
                    <?php  else : ?>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold"  href="categories.php">  لوحه التحكم </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" href="#" id="dropdownid"> 
                            <?php echo $_SESSION['name']; ?>
                         </a>
                         <div class="dropdown-menu" aria-labelledby="dropdownid" >
                            <a class="dropdown-item" href="logout.php"> تسجيل خروج </a>
                         </div>
                    </li>
                    <?php  endif ; ?>
                    <!-- /condition login & logout -->
                </ul>

            </div>
        </div>
    </nav>
    <!-- /Navbar -->
