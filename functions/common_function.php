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
                <p class='card-text'>price: $product_price /-</p>
                 <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
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
                <p class='card-text'>price: $product_price /-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
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
                <p class='card-text'>price: $product_price /-</p>
                 <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
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
                 <p class='card-text'>price: $product_price /-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
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
                 <p class='card-text'>price: $product_price /-</p>
                 <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
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
                <p class='card-text'>price: $product_price /-</p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to Cart</a>
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
// get user ip address 
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// echo 'User Real IP - '.getUserIpAddr();


// cart function 
function cart() {
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_product_id = $_GET['add_to_cart'];

        $get_ip_address = getUserIpAddr();
        $select_query = "SELECT * FROM `card_details` WHERE ip_address='$get_ip_address' AND product_id='$get_product_id'";
        
        // Check the query result
        $result = mysqli_query($con, $select_query);
        if (!$result) {
            die("Database query failed: " . mysqli_error($con));
        }

        $num_of_row = mysqli_num_rows($result);
        if ($num_of_row > 0) {
            echo "<script>alert('This item is already added to the cart');</script>";
            echo "<script>window.open('index.php', '_self');</script>";
        } else {
            $insert_query = "INSERT INTO `card_details` (product_id, ip_address, quantity) VALUES ('$get_product_id', '$get_ip_address', 0)";
            $result = mysqli_query($con, $insert_query);
            if (!$result) {
                die("Database insert failed: " . mysqli_error($con));
            }
            echo "<script>alert('The item is added to the cart');</script>";
            echo "<script>window.open('index.php', '_self');</script>";
        }
    }
}
// function to get cart item number   
function cartItems()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $get_ip_address = getUserIpAddr();
        $select_query = "SELECT * FROM ` ` WHERE ip_address='$get_ip_address' ";

        // Check the query result
        $result = mysqli_query($con, $select_query);

        $count_items = mysqli_num_rows($result);
    } else {
        global $con;
        $get_ip_address = getUserIpAddr();
        $select_query = "SELECT * FROM `card_details` WHERE ip_address='$get_ip_address' ";

        // Check the query result
        $result = mysqli_query($con, $select_query);


        $count_items = mysqli_num_rows($result);

    }
    echo $count_items;
}
// display total price s
function total_price() {
    global $con;
    $get_ip_address = getUserIpAddr();
    $total_price = 0;

    // Ensure to use quotes around $get_ip_address in the SQL query
    $select_product = "SELECT * FROM `card_details` WHERE ip_address = '$get_ip_address'";
    $product_result = mysqli_query($con, $select_product);

    // Check if the query was successful
    if (!$product_result) {
        die("Query Failed: " . mysqli_error($con));
    }

    while ($row = mysqli_fetch_array($product_result)) {
        $product_id = $row['product_id'];

        // Ensure to use quotes around $product_id in the SQL query
        $select_products = "SELECT * FROM `products` WHERE product_id = '$product_id'";
        $product_id_result = mysqli_query($con, $select_products);

        // Check if the query was successful
        if (!$product_id_result) {
            die("Query Failed: " . mysqli_error($con));
        }

        while ($row_id = mysqli_fetch_array($product_id_result)) {
            $product_price = $row_id['product_price'];
            $total_price += $product_price; // Correctly adding product price to total
        }
    }

    echo $total_price; // Output the total price
}

   

?>