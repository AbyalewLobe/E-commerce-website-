<?php 
include("../includes/connect.php");

if (isset($_POST['insert_cat'])) {
    $catagory_title = mysqli_real_escape_string($con, $_POST['cat_title']);
    $insert_query = "INSERT INTO `catagorie` (catagorie_title) VALUES ('$catagory_title')";
    $result = mysqli_query($con, $insert_query);
    
    if ($result) {
        echo "<script>alert('Category has been inserted successfully');</script>";
    } else {
        die("Query failed: " . mysqli_error($con));
    }
}
?>

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