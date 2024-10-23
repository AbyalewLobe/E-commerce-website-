<!-- connect file  -->
<?php 
 include("includes/connect.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Store </title>
    <!-- style link  -->
    <link rel="stylesheet" href="style.css">
    </link>
    <!-- bottstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </link>
    <!-- font awosem link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- nav bar  -->
    <div class="container-fluid p-0">
        <!-- first child  -->
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-fluid">
                <img src="./assets/logo.webp" alt="logo" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <sup>1</sup> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price:100/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success text-white" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>


        <!-- second child  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <ul class="navbar-nav me-auto  ">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Login</a>
                </li>
            </ul>
        </nav>


        <!-- third child  -->
        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communication is at the heart of e-commerse and community</p>
        </div>


        <!-- fourth child  -->

        <div class="row">
            <div class="col-md-10">
                <!-- products  -->
                <div class="row">
                    <!-- fetching phroducts  -->
                    <?php 
                    $select_products = "Select * from `products` order by rand() limit 0,9";
                    $result_select = mysqli_query($con,$select_products);
                  
                   while($row= mysqli_fetch_assoc($result_select)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_decscription = $row['product_description'];
                    $product_key = $row['product_keyword'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $catagorie_id = $row['catagorie_id'];
                    $brand_id = $row['brand_id'];
                    $product_id = $row['product_id'];
                    echo "
                    <div class='col-md-4 mb-2'>
                        <div class='card'>
                            <img src='./admin-area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_decscription</p>
                                <a href='#' class='btn btn-success'>Add to Cart</a>
                                <a href='#' class='btn btn-secondary'>View More</a>
                            </div>
                        </div>
                    </div>
                    ";
                   }
                    ?>
                  
                    <!-- row end   -->
                </div>
                    <!-- col end  -->
            </div>
            <div class="col-md-2 bg-secondary p-0">
                <!-- brands to be displayed  -->
                <ul class="navbar-nav me-auto text-center ">
                    <li class="nav-item bg-success">
                        <a href="" class="nav-link text-white">
                            <h4>Delivery</h4>
                        </a>
                    </li>

                    <?php
                    $select_brand = "Select * from brands";
                    $result_brands = mysqli_query($con, $select_brand);
                   
                    while($row_data = mysqli_fetch_assoc($result_brands)){
                        $brand_title = $row_data['brand_title'];
                        $brand_id = $row_data['brand_id'];
                        echo "<li class='nav-item'>
                        <a href='index.php?brand=$brand_id' class='nav-link text-white'>
                            $brand_title
                        </a>
                    </li>";
                    }
                    ?>

                </ul>
                <!-- catagories to be displayed  -->
                <ul class="navbar-nav me-auto text-center ">
                    <li class="nav-item bg-success">
                        <a href="" class="nav-link text-white">
                            <h4>Catagories</h4>
                        </a>
                    </li>

                    <?php
                    $select_catagories = "Select * from catagorie";
                    $result_catagories = mysqli_query($con, $select_catagories);
                    
                    while($row_data = mysqli_fetch_assoc($result_catagories)){
                        $cat_title = $row_data['catagorie_title'];
                        $cat_id = $row_data['catagorie_id'];
                        echo "<li class='nav-item'>
                        <a href='index.php?catagorie=$cat_id' class='nav-link text-white'>
                            $cat_title
                        </a>
                    </li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
        <!-- last child  -->
        <div class="bg-secondary p-3 text-center ">
            <p>All right reserved ©- Designed by Abyalew 2024</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>