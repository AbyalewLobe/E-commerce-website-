<!-- connect file  -->
<?php 
 include("includes/connect.php");
 include("functions/common_function.php");
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="display_all.php ">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <sup><?php cartItems(); ?></sup> </a>
                        </li>
                       
                    </ul>
                  
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
         <div class="container">
            <div class="row">
                <table class="table table-bordered text-center">
        <thead>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove</th>
            <th>Operations</th>
        </thead>
        <tbody>
            <tr>
                <td>Aple</td>
                <td><img src="./assets/apple fruite.jpg" class='card-img-top' alt=""></td>
                <td><input type="text" name='' id=''></td>
                <td>9000</td>
                <td><input type="checkbox"></td>
                <td>
                    <p>Update</p>
                    <p>Remove</p>
                </td>
            </tr>
        </tbody>
                </table>
                <!-- subtotal  -->
                 <div class="d-flex mb-5">
                    <h4 class='px-3'>Subtotal:<strong class='text-success'><?php total_price(); ?></strong</h4>
                    <a href="index.php" class=''><button class='bg-success rounded  mx-3 px-3 py-2 border-0 '>Continue Shoping</button></a>
                    <a href="index.php" class=''><button class='bg-secondary px-3 rounded py-2 border-0 '>checkout</button></a>
                 </div>
            </div>
         </div>

        
        <!-- last child  -->
        <?php
       include("./includes/footer.php");
       ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>