<?php
session_start();

   $name=$_SESSION['username'];


    
?>

<html lang="en">
    <head>
        <title>BLOOM'S</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
<style>
body {
  background-image: url('https://wallpapercave.com/wp/u1bLT9F.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
body{
    display: block;
    overflow-x: hidden;
}


nav{
    background-color: white;
}

.navbar-brand img {
    max-height: 50px;
}



.navbar-brand{
    font-size: 24px;
    text-transform: uppercase;
    font-weight: 900;
    color: #683aa4;
}

nav ul li a{
    color: #a9a9a9;
    font-size: 22px;
    margin: auto 10px; 
}

nav ul li a:hover{
    color: #683aa4;
}

section{
    padding-top: 50px;
    padding-bottom: 50px;
}
 
section h1{
    text-transform: uppercase;
    font-weight: 900;
    color: #683aa4;
    text-align: left;
    margin-bottom: 20px;
} 

section p{
    font-size: 16px;
    font-weight: 300;
}

button{
    max-width: 50%;
    border-radius: 50px !important;
}


.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #04AA6D;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}



</style>
    </head>
    <body>

<!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
<nav class="py-3 navbar navbar-expand-lg fixed-top auto-hiding-navbar navbar-light bg-light">
     <div class="container">
       <a class="navbar-brand" href="#"> BLOOM'S</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="https://blooms-123.000webhostapp.com/index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="https://blooms-123.000webhostapp.com/products_2.php">Products</a>
           </li>
            <li class="nav-item">
             <a class="nav-link" href="https://blooms-123.000webhostapp.com/Deal.php">Deals</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="https://blooms-123.000webhostapp.com/aboutus2.php">About Us</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="https://blooms-123.000webhostapp.com/ContactUs.php">Contact</a>
           </li>
	     <li class="nav-item">
             <a class="nav-link" href="https://blooms-123.000webhostapp.com/Cart.php">Cart</a>
           </li>
          <li class="nav-item">
            <?php
              
	         if (isset($_SESSION['username'])){
	              echo'   <a class="nav-link" href="https://blooms-123.000webhostapp.com/YourOrders.php">YourOrders</a>';}
         
          ?>
           </li>
           <li class="nav-item">
            <?php
              
	         if (isset($_SESSION['username'])){
	              echo'   <a class="nav-link" href="https://blooms-123.000webhostapp.com/YourQueries.php">YourQueries</a>';}
         
          ?>
           </li>
	     <li class="nav-item">
	         <?php
	         if (isset($_SESSION['username'])){
          echo'   <a class="nav-link" href="https://blooms-123.000webhostapp.com/loginform.php">Logout</a>';}
          else{
          echo' <a class="nav-link" href="https://blooms-123.000webhostapp.com/loginform.php">Login</a>';
          }
          ?>
           </li>
         </ul>
       </div>
     </div>
  </nav>
<br>
<br>
                       
                  
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
	@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap');

:root{
    --white-light: rgba(255, 255, 255, 0.5);
    --alice-blue: #f8f9fa;
    --carribean-green: #40c9a2;
    --gray: #ededed;

}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
}
body{
    font-family: 'Quicksand', sans-serif;
    
}

/* Utility stylings */
img{
    width: 100%;
    display: block;
}
.container{
    width: 88vw;
    margin: 0 auto;
}
.lg-title,
.md-title,
.sm-title{
    font-family: 'Roboto', sans-serif;
    padding: 0.6rem 0;
    text-transform: capitalize;
}
.lg-title{
    font-size: 2.5rem;
    font-weight: 500;
    text-align: center;
    padding: 1.3rem 0;
    opacity: 0.9;
}
.md-title{
    font-size: 2rem;
    font-family: 'Roboto', sans-serif;
}
.sm-title{
    font-weight: 300;
    font-size: 1rem;
    text-transform: uppercase;
}
.text-light{
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    opacity: 0.5;
    margin: 0.4rem 0;
}

/* product section */
.products{
    background: var(--alice-blue);
    
    padding: 3.2rem 0;
}
.products .text-light{
    text-align: center;
    width: 70%;
    margin: 0.9rem auto;
}
.product{
    margin: 2rem;
    position: relative;
    
}
.product-content{
    background: var(--gray);
 
    padding: 3rem 0.5rem 2rem 0.5rem;
    cursor: pointer;
}
.product-img{
    background: var(--white-light);
    box-shadow: 0 0 20px 10px var(--white-light);
    width: 200px;
    height: 200px;
    margin: 0 auto;
    border-radius: 50%;
    transition: background 0.5s ease;
}
.product-btns{
    display: flex;
    justify-content: center;
    margin-top: 1.4rem;
    opacity: 0;
    transition: opacity 0.6s ease;
}
.btn-cart, .btn-buy{
    background: transparent;
    border: 1px solid black;
    padding: 0.8rem 0;
    width: 125px;
    font-family: inherit;
    text-transform: uppercase;
    cursor: pointer;
    border: none;
    transition: all 0.6s ease;
}
.btn-cart{
    background: black;
    color: white;
}
.btn-cart:hover{
    background: var(--carribean-green);
}
.btn-buy{
    background: white;
}
.btn-buy:hover{
    background: var(--carribean-green);
    color: #fff;
}
.product-info{
    background: white;
    padding: 2rem;
}
.product-info-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.rating span{
    color: var(--carribean-green);
}
.product-name{
    color: black;
    display: block;
    text-decoration: none;
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: bold;
}
.product-price{
    padding-top: 0.6rem;
    padding-right: 0.6rem;
    display: inline-block;
}
.product-price:first-of-type{
    text-decoration: line-through;
    color: var(--carribean-green);
}
.product-img img{
    transition: transform 0.6s ease;
}
.product:hover .product-img img{
    transform: scale(1.1);
}
.product:hover .product-img{
    background: var(--carribean-green);
}
.product:hover .product-btns{
    opacity: 1;
}
.off-info .sm-title{
    background: var(--carribean-green);
    color: white;
    display: inline-block;
    padding: 0.5rem;
    position: absolute;
    top: 0;
    left: 0;
    writing-mode: vertical-lr;
    transform: rotate(180deg);
    z-index: 1;
    letter-spacing: 3px;
    cursor: pointer;
}

/* product collection */
.product-collection{
    padding: 3.2rem 0;
}
.product-collection-wrapper{
    padding: 3.2rem 0;
}
.product-col-left{
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-1.jpg") center/cover no-repeat;
}
.product-col-r-top{
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-2.png") center/cover no-repeat;
}
.flex{
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 50vh;
    padding: 2rem 1.5rem 3.2rem;
    margin: 5px;
}
.product-col-r-bottom > div:first-child{
    background: #eaa001;
}
.product-col-r-bottom > div:last-child{
    background: #0090ff;
}
.product-col-content{
    text-align: center;
    color: white;
}
.product-collection .text-light{
    opacity: 1;
    font-size: 0.8;
    font-weight: 400;
    line-height: 1.7;
}
.btn-dark{
    background: black;
    color: white;
    outline: 0;
    border-radius: 25px;
    padding: 0.7rem 1rem;
    border: 0;
    margin-top: 1rem;
    cursor: pointer;
    transition: all 0.6s ease;
    font-size: 1rem;
    font-family: inherit;
}
.btn-dark:hover{
    background: var(--carribean-green);
}







/* Media Queries */
@media screen and (min-width: 992px){
    .product-items{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .product-col-r-bottom{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}
@media screen and (min-width: 1200px){
    .product-items{
        grid-template-columns: repeat(3, 1fr);
    }
    .product{
        margin-right: 1rem;
        margin-left: 1rem;
    }
    .products .text-light{
        width: 50%;
    }
}

@media screen and (min-width: 1336px){
    .product-items{
        grid-template-columns: repeat(4, 1fr);
    }
    .product-collection-wrapper{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .flex{
        height: 60vh;
    }
    .product-col-left{
        height: 121.5vh;
    }
}
	</style>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
	<?php

		//Connect to the database
		$dbconn = mysqli_connect("localhost","id20627285_postgres","^p*%+5}=Xt2cYx$*","id20627285_blooms");

		//Check if connection was successful
		if(!$dbconn){
			echo "Database connection error.";
			exit;
		}

		//Fetch products from database
		$query = "SELECT * FROM inventory 
          JOIN flowers ON inventory.flower_id = flowers.id 
          WHERE inventory.Date IS NOT NULL 
          AND inventory.Date < DATE_SUB(NOW(), INTERVAL 5 DAY)";
$result = mysqli_query($dbconn, $query);

// Check if there are any products
if(mysqli_num_rows($result) > 0){
    // Display each product in a div with class "product"
    

	echo'	 <div class = "products">';
        echo'	    <div class = "container">';
       echo'	         <h1 class = "lg-title">LIMITED TIME DEALS</h1>';
       
   
        echo'	        <h4 align="middle" style="color :#FFC0CB">Available till stocks last!</h4>';
         echo'	        <h5 align="middle" style="color :#FFC0CB">Dated after fresh Flowers-Must GO Sale</h5>';

         echo'	       <div class = "product-items">';
         
         echo'	           <!-- single product -->';
         while($row = mysqli_fetch_assoc($result)){
             $sql = "UPDATE inventory SET price = 1200 WHERE flower_id = " . $row['id'];
$result2 = mysqli_query($dbconn, $sql);
$sql = "select * from inventory WHERE flower_id = " . $row['id'];
$result3 = mysqli_query($dbconn, $sql);
$row2 = mysqli_fetch_assoc($result3);

           echo'	         <div class = "product">';
             echo'	           <div class = "product-content">';
           
             echo'	               <div class = "product-img">';
              echo'	                 <img src = "'.$row['Images'].'"  alt="'.$row['name'].'" width="200" height="200">';
              echo'	              </div>';
               echo'	             <div class = "product-btns">';
                echo '<form method="post">';
               echo'	                 <button type="submit" name="add_to_cart" class = "btn-cart"> Add to cart';
               echo'	                     <span><i class = "fas fa-plus"></i></span>';
               echo'	                 </button>';
              
               echo'	                 <button type = "button" class = "btn-buy"> buy now';
               echo'	                     <span><i class = "fas fa-shopping-cart"></i></span>';
               
                echo'	                </button>';
                
                echo '<input type="hidden" name="product_id" value="'.$row['id'].'">';
                echo'</form>';
                echo'	            </div>';
                echo'	        </div>';

                   echo'	     <div class = "product-info">';
                      echo'	      <div class = "product-info-top">';
                        echo'	        <h2 class = "sm-title">Review:</h2>';
                        echo'	        <div class = "rating">';
                        echo'	            <span><i class = "fas fa-star"></i></span>';
                         echo'	           <span><i class = "fas fa-star"></i></span>';
                         echo'	           <span><i class = "fas fa-star"></i></span>';
                          echo'	          <span><i class = "fas fa-star"></i></span>';
                          echo'	          <span><i class = "far fa-star"></i></span>';
                         echo'	       </div>';
                         echo'	   </div>';
                          echo  '<a href = "#" class = "product-name">'.$row['name'].'</a>';
					
                         echo'	   <p class = "product-price">₹ 1500.00</p>';
                          echo '<p class="product-price">'.$row2['price'].'</p>';
               //         echo'   <h2 class = "sm-title">'.$row['description'].'</h2>';
                     echo'	   </div>';

                   echo'	     <div class = "off-info">';
                        echo'	    <h2 class = "sm-title">BLOOM</h2>';
                        
                        echo'	  </div>';
 echo'	  </div>';


        
    }
} else {
    echo "No products found.";
}


// Check if the "Add to Cart" button was clicked
if(isset($_POST['add_to_cart'])){
   if (isset($_SESSION['username'])){
     
    // Retrieve the product ID from the form data
    $product_id = $_POST['product_id'];
    
    // Prepare a query to insert the product into the cart table
    
    // = "INSERT INTO cart (product_code, quantity,username) VALUES ($product_id, 1,'$name') ON DUPLICATE KEY UPDATE quantity = quantity + 1;";
    $query = "INSERT INTO cart (product_code, quantity, username) 
          VALUES ($product_id, 1, '$name')
          ON DUPLICATE KEY UPDATE quantity = quantity + 1 ";

    // Execute the query
    $result = mysqli_query($dbconn, $query);

    // Check if the query was executed successfully
    if($result){
        echo "Product added to cart.";
    } else {
        echo "Error adding product to cart: " . mysqli_error($dbconn);
    }
}
else
{
    echo '<script>window.location.replace("https://blooms-123.000webhostapp.com/loginform.php");</script>';
}
}


       

mysqli_close($dbconn);

?>
       
    </body>
</html>