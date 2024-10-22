<?php 
include("../includes/connect.php");

if (isset($_POST['insert_cat'])) {
    $catagory_title = mysqli_real_escape_string($con, $_POST['cat_title']);

    // Check for empty input
    if (empty($catagory_title)) {
        echo "<script>alert('Please enter a category title.');</script>";
        return; // Prevent further execution
    }

    // Select data from database 
    $select_query = "SELECT * FROM `catagorie` WHERE catagorie_title='$catagory_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('This category is already present in the database');</script>";
    } else {
        $insert_query = "INSERT INTO `catagorie` (catagorie_title) VALUES ('$catagory_title')";
        $result = mysqli_query($con, $insert_query);
        
        if ($result) {
            echo "<script>alert('Category has been inserted successfully');</script>";
        } else {
            // Improved error handling
            echo "<script>alert('Failed to insert category: " . mysqli_error($con) . "');</script>";
        }
    }
}
?>
<h2 class="text-center">Insert Catagories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group mb-2 w-90">
        <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-2 w-10 m-auto">

        <input type="submit" class=" bg-success border-0 p-2 my-3" name="insert_cat" value="Insert Categories">


    </div>
</form>