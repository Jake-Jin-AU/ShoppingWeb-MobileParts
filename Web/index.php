<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CJ Mobile Shopping</title>
<!--bootstrap-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--bootstrap.js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- my scripts -->
    <link rel="stylesheet" href="./css/mycss.css">
    <script type="text/javascript" src="./javascript/myjs.js"></script>
</head>
<body>
   

    <header class="container">
        <section class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 class="myalign"><a href="">CJ Mobile Parts</a></h1>
            </div>
            <div class="col-sm-3">
            </div>
        </section>
        
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img src="https://6564test1.000webhostapp.com//resources/logo.png" width="150" alt=Logo></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- Left on Navbar -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!--
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Samsung Parts<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Galaxy</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Galaxy S21</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Note</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Note 20</a></li>
                                    </ul>
                                </li>
                                <!--
                                <li role="separator" class="divider"></li>
                                -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apple Parts<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">iPhone</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">iPhone 12</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">iPad</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">iPad7 10.2</a></li>
                                    </ul>
                                </li>
                                <!--
                                <li role="separator" class="divider"></li>
                                -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Samsung Accessories<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Case</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Case 1</a></li>
                                        <li><a href="">Case 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Cable</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Cable 1</a></li>
                                        <li><a href="">Cable 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Screen Protector</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Protector 1</a></li>
                                        <li><a href="">Protector 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apple Accessories<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Case</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Case 1</a></li>
                                        <li><a href="">Case 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Cable</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Cable 1</a></li>
                                        <li><a href="">Cable 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu"><a href="#" calss="dropdown-toggle" data-toggle="dropdown">Screen Protector</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Protector 1</a></li>
                                        <li><a href="">Protector 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <!-- Right on Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="members/sign-up.html">Register</a></li>
                        <?php 
                            if(isset($_SESSION['username']))
                            {
                                echo "Hello  ". $_SESSION["username"].', ';
                                echo '<li><a href="logout.php">Log out</a></li>';
                            }
                            else
                            {
                                echo '<li><a href="../members/sign-in.html">Sign-in</a></li>';
                            }
                        ?>
                        <li><a href="orders/checkout.html">Cart</a></li>  
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <section class="row">
            <h1 class="hidden-title">Search Form</h1>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form class="myalign end-margin" action="">
                    <fieldset>
                        <legend class="hidden-title">Search Input Field</legend>
                        <select>
                            <option value="all">All</option>
                            <option value="parts">Parts</option>
                            <option value="accessories">Accessories</option>
                        </select>
                        <input type="text" placeholder="Search...">
                        <button type="submit" value="Submit">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </fieldset>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </section>
    </header>
    
    <main class="container">
        <div id="myCarousel" class="carousel slide end-margin" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="New york" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
<!-- The latest products -->
<!-- Samsung products -->


        <h2>The latest products</h2>
        <div class="row end-margin">
        
<?php
include "./php/dbconnect.php";
//$pid = $_POST["p_id"];
//select products based on specific product id
$sql = "SELECT * FROM Product";
$results = mysqli_query($conn, $sql);

if (!$results){
    echo "Error";
}
else{
    while($row = mysqli_fetch_array($results)){
    $prod_id = $row["P_ID"];
    $prod_brand = $row["Brand"];
    $prod_model = $row["Model"];
    $prod_name = $row["P_Name"];
    $prod_price = $row["P_Price"];
    $prod_description = $row["Description"];

    echo "
    <div class='col-sm-6 col-md-4'>
        <div href='#' class='thumbnail'>
            <img src='https://www.w3schools.com/bootstrap/ny.jpg' alt='item'>
            <div class='caption'>
                <h3 name='p_id'>$prod_brand $prod_model $prod_name</h3>
                <p>
                    <a href='#' class='btn btn-primary' role='button'>
                        <span class='glyphicon glyphicon-shopping-cart'></span>
                    </a>
                </p>
            </div>
        </div>
    </div>
    ";
    }
}
?>
<!--
        <h2>The latest products</h2>
        <div class="row end-margin">
            <div class="col-sm-6 col-md-4">
                <div href="#" class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="item">
                    <div class="caption">
                        <h3>Galaxy S21 case</h3>

                        <p>Description</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div href="#" class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="item">
                    <div class="caption">
                        <h3>Galaxy S21 case</h3>
                        <p>Description</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </p>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4">
                <div href="#" class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="item">
                    <div class="caption">
                        <h3>Galaxy S21 case</h3>
                        <p>Description</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </p>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4">
                <div href="#" class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="item">
                    <div class="caption">
                        <h3>Galaxy S21 case</h3>
                        <p>Description</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </p>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4">
                <div href="#" class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="item">
                    <div class="caption">
                        <h3>Galaxy S21 case</h3>
                        <p>Description</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </p>
                    </div>
                </div>
                </div>
                <div class="col-sm-6 col-md-4">
                <div href="#" class="thumbnail">
                    <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="item">
                    <div class="caption">
                        <h3>Galaxy S21 case</h3>
                        <p>Description</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        -->        
<!-- The hottest deals -->
        <div class="row">
            <div class="row">
                <div class="col-md-9">
                    <h3>The hottest deals</h3>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right hidden-xs">
                        <a class="left glyphicon glyphicon-chevron-left btn"
                        href="#carousel-example" 
                        data-slide="prev">
                        </a>
                        <a class="right glyphicon glyphicon-chevron-right btn"
                        href="#carousel-example"
                        data-slide="next">
                        </a>
                    </div>
                </div>
            </div>

            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
<!-- IO; Item Name -->
                                                <h5>
                                                    Sample Product 1-1
                                                </h5>
<!-- IO; Item Price -->
                                                <h5 class="price-text-color">
                                                    $199.99
                                                </h5>
                                            </div>
                                            <div class="rating col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product 1-2
                                                </h5>
                                                <h5 class="price-text-color">
                                                    $249.99
                                                </h5>
                                            </div>
                                            <div class="rating  col-md-6">
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product 1-3
                                                </h5>
                                                <h5 class="price-text-color">
                                                    $149.99
                                                </h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product 1-4
                                                </h5>
                                                <h5 class="price-text-color">
                                                    $199.99
                                                </h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product 2-1
                                                </h5>
                                                <h5 class="price-text-color">
                                                    $199.99
                                                </h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product 2-2
                                                </h5>
                                                <h5 class="price-text-color">
                                                    $249.99
                                                </h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product 2-3
                                                </h5>
                                                <h5 class="price-text-color">
                                                    $149.99
                                                </h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Sample Product 2-4
                                                </h5>
                                                <h5 class="price-text-color">
                                                    $199.99</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i><a href="#cart">Add to cart</a></p>
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="#details">More details</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container footer-inner">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <div class="middle-heading title">Policy Info</div>
                <ul class="middle-content ">
                    <li><a class="underLineOnHover" href="#" data-abc="true">Privacy Policy</a></li>
                    <li><a class="underLineOnHover" href="#" data-abc="true">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="middle-heading title">Company</div>
                <ul class="middle-content">
                    <li><a class="underLineOnHover" href="#" data-abc="true">Sitemap</a></li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="middle-heading title" style="margin-left: 0px;">About Us</div>
                <span class="address">
                    CJ Mobile Parts, 13/120 Spencer St, Melbourne VIC 3000
                </span>
                <div>
                    <h5 style="color: #EF5350;">Social connect</h5>
                    <a href="#facebook">
                        <img src="https://img.icons8.com/color/24/000000/facebook.png">
                    </a>
                    <a href="#instagram">
                        <img src="https://img.icons8.com/office/20/000000/instagram-new.png">
                    </a>
                    <a href="#twitter">
                        <img src="https://img.icons8.com/color/24/000000/twitter-squared.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="container front-margin">
            <p class="myalign">Copyright &copy; 2021 CJ Mobile Parts. All Rights Reserved</p>
        </div>
    </footer>
<!--
    <footer class="container">
        <section class="myalign">
            <h1 class="hidden-title">Footer</h1>
            Copyright &copy; 2021 CJ Mobile Parts. All Rights Reserved
        </section>
    </footer>
-->
</body>
</html>