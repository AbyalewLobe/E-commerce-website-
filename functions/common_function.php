<?php 
include("includes/connect.php");

//getting products
function getProduct(){
    global $con;
    if(!isset($_GET['catagorie'])){
        if(!isset($_GET['brand'])){

        
   
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
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>
    ";
    }
}
}
}

// getting unique catagories 
function getUniqeCatagories (){
    global $con;
    if(isset($_GET['catagorie'])){

     $catagorie_id= $_GET['catagorie'];  
   
    $select_products = "Select * from `products` where catagorie_id='$catagorie_id'";
    $result_select = mysqli_query($con,$select_products);
    $num_of_row=mysqli_num_rows($result_select);
    if($num_of_row==0){
        echo "<h2 class='text-center'> No Stock for this catagorie</h2>";
    }
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
               <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>
    ";
  
}
}
}
// get uniqe brand 
function getUniqeBrand (){
    global $con;
    if(isset($_GET['brand'])){

     
        $brand_id= $_GET['brand'];  
   
    $select_products = "Select * from `products` where brand_id='$brand_id'";
    $result_select = mysqli_query($con,$select_products);
    $num_of_row=mysqli_num_rows($result_select);
    if($num_of_row==0){
        echo "<h2 class='text-center text-primary'> This Brand is not available for service!!</h2>";
    }
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
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>
    ";
  
}
}
}
// displaying brand in sidenav 
function displayBrand(){
    global $con;
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
}
// displaying catagories in sidenav 
function displayCatagorie(){
    global $con;
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
}

//get searching products

function search_result(){
    global $con;
   if(isset($_GET['search_data_product'])){
    
   
    $search_data_value=$_GET['search_data'];
    $search_product = "Select * from `products` where product_keyword like '%$search_data_value%'";
    $result_select = mysqli_query($con,$search_product);
    $num_of_row=mysqli_num_rows($result_select);
        if($num_of_row==0){
        echo "<h2 class='text-center text-primary'> No results match. No products found on this catagorie!!</h2>";
    }
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
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>
    ";
}
}
}

// get all products 
function getAllProduct(){
    global $con;
    if(!isset($_GET['catagorie'])){
        if(!isset($_GET['brand'])){

        
   
    $select_products = "Select * from `products` order by rand() ";
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
                <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
        </div>
    </div>
    ";
    }
}
}
}

// view details function 
function detailProducts(){
    global $con;
    if(isset(($_GET['product_id']))){
    if(!isset($_GET['catagorie'])){
        if(!isset($_GET['brand'])){
            $product_id=$_GET['product_id'];
            $select_products = "SELECT * FROM `products` WHERE product_id = $product_id ORDER BY RAND()";
    $result_select = mysqli_query($con,$select_products);
    
    while($row= mysqli_fetch_assoc($result_select)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_decscription = $row['product_description'];
    $product_key = $row['product_keyword'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
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
                <a href='index.php' class='btn btn-secondary'>Go Home</a>
            </div>
        </div> 
    </div>
    <div class='col md-8'> 
                  
                        <div class='row'>
                            <div class='col-md-12'>
                                <h4 class='text-center text-success mb-5'>Related Products</h4>
                            </div>
                            <div class='col-md-6'>
                            <img src='./admin-area/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                            </div>
                            <div class='col-md-6'>
                            <img src='./admin-area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
                            </div>
                        </div>
                     </div>
    ";
    }
}
}
}
}
?>