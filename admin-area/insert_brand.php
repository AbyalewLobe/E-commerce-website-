<?php 
include("../includes/connect.php");

if (isset($_POST['insert_brand'])) {
    $brand_title = mysqli_real_escape_string($con, $_POST['brand_title']);

    // Check for empty input
    if (empty($brand_title)) {
        echo "<script>alert('Please enter a brand title.');</script>";
        return; // Prevent further execution
    }

    // Select data from database 
    $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('This brand is already present in the database');</script>";
    } else {
        $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($con, $insert_query);
        
        if ($result) {
            echo "<script>alert('brand has been inserted successfully');</script>";
        } else {
            // Improved error handling
            echo "<script>alert('Failed to insert brand: " . mysqli_error($con) . "');</script>";
        }
    }
}
?>
<h2 class="text-center">Insert Brand</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group mb-2 w-90">
        <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-2 w-10 m-auto">

        <input type="submit" class="border-0 p-2 my-3 bg-success" name="insert_brand" value="Insert Categories">


    </div>
</form>