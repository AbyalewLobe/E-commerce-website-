<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <!-- css style link  -->
    <link rel="stylesheet" href="../style.css">
    </link>
    <!-- bottstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </link>
    <!-- font awosem link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
.admin-image {
    width: 100px;
    object-fit: contain;
}
</style>

<body>
    <!-- navbar  -->
    <div class="container-fluid p-0">
        <!-- first child  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
                <img src="../assets/logo.webp" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text-white">Welcom Guest</a>
                        </li>
                    </ul>
                </nav>


            </div>
        </nav>
        <!-- second child  -->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>
        <!-- third child  -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-3">
                    <a href=""><img src="../assets/jacket.jpg" alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>

                <div class="button text-center">
                    <button class="rounded-2 border-1 my-3"><a href="#"
                            class="btn btn-success rounded-button px-4 py-2">
                            Click Me!
                        </a></button>
                    <button class="rounded-2 border-1"><a href="insert_product.php"
                            class="btn btn-success rounded-button px-2 py-2">
                            Insert Product</a></button>
                    <button class="rounded-2 border-1"><a href="" class="btn btn-success rounded-button px-2 py-2">
                            View Product</a></button>
                    <button class="rounded-2 border-1"><a href="index.php?insert_catagories"
                            class="btn btn-success rounded-button px-2 py-2">
                            Insert Catagories</a></button>
                    <button class="rounded-2 border-1"><a href="" class="btn btn-success rounded-button px-2 py-2">
                            View Catagories</a></button>
                    <button class="rounded-2 border-1"><a href="index.php?insert_brand"
                            class="btn btn-success rounded-button px-2 py-2">
                            Insert Brand</a></button>
                    <button class="rounded-2 border-1"><a href="" class="btn btn-success rounded-button px-2 py-2">
                            View Brand</a></button>
                    <button class="rounded-2 border-1"><a href="" class="btn btn-success rounded-button px-2 py-2">
                            All Orders</a></button>
                    <button class="rounded-2 border-1"><a href="" class="btn btn-success rounded-button px-2 py-2">
                            All Payments</a></button>
                    <button class="rounded-2 border-1"><a href="" class="btn btn-success rounded-button px-2 py-2">
                            List Users</a></button>
                    <button class="rounded-2 border-1"><a href=""
                            class="btn btn-success rounded-button px-2 py-2">Logout</a></button>
                </div>
            </div>
        </div>

        <!-- fourth child  -->
        <div class="container my-3">
            <?php 
            if(isset($_GET['insert_catagories'])){
                include('insert_catagories.php');
            }if(isset($_GET['insert_brand'])){
                include('insert_brand.php');}
            ?>

        </div>

        <!-- last child  -->
        <div class="bg-secondary p-3 text-center ">
            <p>All right reserved ©- Designed by Abyalew 2024</p>
        </div>
    </div>
    <!-- bootstrap script link  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>