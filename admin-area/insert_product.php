<?php 
 include("../includes/connect.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
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

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">
            Insert Product
        </h1>
        <!-- form  -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" autocomplete="off"
                    placeholder="Enter Product Title" required>
            </div>
            <!-- description  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Description</label>
                <input type="text" name="product_des" id="product_des" class="form-control" autocomplete="off"
                    placeholder="Enter Product Description" required>
            </div>

            <!-- keywords  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_key" class="form-label">Product keywords</label>
                <input type="text" name="product_key" id="product_key" class="form-control" autocomplete="off"
                    placeholder="Enter Product keywords" required>
            </div>

            <!-- catagories  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_catagories" id="" class="form-select">
                    <option value=''>Select catagorie</option>
                    <?php
                    $product_catagorie = "Select * from `catagorie` ";
                    $result_product = mysqli_query($con, $product_catagorie);
                    while( $row_data = mysqli_fetch_assoc(( $result_product))){
                        $catagory_title = $row_data["catagorie_title"];
                         $catagory_id = $row_data["catagorie_id"];
                        echo "<option value='$catagory_id'>$catagory_title</option>";
                    }
                    ?>

                </select>
            </div>
            <!-- brand  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="" class="form-select">
                    <option value="">Select Brand</option>
                    <?php
                    $product_brand = "Select * from `brands` ";
                    $result_product = mysqli_query($con, $product_brand);
                    while( $row_data = mysqli_fetch_assoc(( $result_product))){
                        $brand_title = $row_data["brand_title"];
                         $brand_id = $row_data["brand_id"];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>


                </select>
            </div>
            <!-- Image 1  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_img1" class="form-label">Product Image 1</label>
                <input type="file" name="product_img1" id="product_img1" class="form-control" autocomplete="off"
                    required>
            </div>
            <!-- Image 2  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_img2" class="form-label">Product Image 2</label>
                <input type="file" name="product_img2" id="product_img2" class="form-control" autocomplete="off"
                    required>
            </div>
            <!-- Image 3  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_img3" class="form-label">Product Image 3</label>
                <input type="file" name="product_img3" id="product_img3" class="form-control" autocomplete="off"
                    required>
            </div>
            <!-- price  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product keywords</label>
                <input type="text" name="product_price" id="product_price" class="form-control" autocomplete="off"
                    placeholder="Enter Product keywords" required>
            </div>
            <!-- price  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-success mb-3 px-3" value="Inset Product">
            </div>
        </form>
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