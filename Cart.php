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
  background-color: url('https://images8.alphacoders.com/836/836103.jpg');
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
                  
                  
</body>
</html>




<style>
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: #f4f4f4;
    align-content: center;
    min-height: 100vh;
}

@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}

.card-registration .select-arrow {
top: 13px;
}

.bg-grey {
background-color: #eae8e8;
}

@media (min-width: 992px) {
.card-registration-2 .bg-grey {
border-top-right-radius: 16px;
border-bottom-right-radius: 16px;
}
}

@media (max-width: 991px) {
.card-registration-2 .bg-grey {
border-bottom-left-radius: 16px;
border-bottom-right-radius: 16px;
}
}

</style>
<?php
    
		//Connect to the database
		$dbconn =  mysqli_connect("localhost","id20627285_postgres","^p*%+5}=Xt2cYx$*","id20627285_blooms");

		//Check if connection was successful
		if(!$dbconn){
			echo "Database connection error.";
			exit;
		}

		//Fetch products from database
		$result = mysqli_query($dbconn, "SELECT cart.*, flowers.*, inventory.price 
FROM cart 
JOIN flowers ON cart.product_code = flowers.id 
JOIN inventory ON flowers.id = inventory.flower_id 
WHERE cart.username = '$name'");
	
echo '<section class="h-100 h-custom" style="background-color: #d2c9ff;">';
echo'  <div class="container py-5 h-100">';

echo'    <div class="row d-flex justify-content-center align-items-center h-100">';
     echo' <div class="col-12">';
        echo'<div class="card card-registration card-registration-2" style="border-radius: 15px;">';
      echo'    <div class="card-body p-0">';
           echo' <div class="row g-0">';
              echo'<div class="col-lg-8">';
               echo' <div class="p-5">';
    echo'              <div class="d-flex justify-content-between align-items-center mb-5">';
    echo'                <h1 class="fw-bold mb-0 text-black">Shopping Cart  -  '.$name.'</h1>';
if(mysqli_num_rows($result) > 0)  {
    $total = 0;
while($row = mysqli_fetch_assoc($result)){
    
    $price = $row['price'];
                $name = $row['name'];
                $quantity = $row['quantity'];
echo'    <h6 class="mb-0 text-muted"></h6>';
     echo'   </div>';

echo'            <hr class="my-4">';

        echo'          <div class="row mb-4 d-flex justify-content-between align-items-center">';
           echo'         <div class="col-md-2 col-lg-2 col-xl-2">';
             echo '<img src="'.$row['Images'].'" alt="'.$row['name'].'" width="200" height="150">';
                       
         echo'           </div>';   
           echo'         <div class="col-md-3 col-lg-3 col-xl-3">';
            echo          '<h6 class="text-muted">'.$row['name'].'</h6>';
            echo'          <h6 class="text-black mb-0">'.$row['price'].'</h6>';
            echo'          <h6 class="text-black mb-0">'.$row['quantity'].'</h6>';
            $subtotal = $price * $quantity;
                $total += $subtotal;
                echo'      </div>'; 
                 echo'         <div class="col-md-4 col-lg-4 col-xl-4">';
           echo'          <h6 class="text-black mb-0">'.$subtotal.'</h6>';
              echo'      </div>'; 
              
			//Display each product in a div with class "product"
			
	
			
			}
	
       
              
			echo '<h2 class="mb-0 text-muted">Total: ₹' . $total . '</h2>';
		echo'	<form method="post">';
			echo'<input type="submit" name="submit"></input>';
	echo'		</form>';
			 echo'</section>';
		
    }
    
		else{
			echo "No products found.";
		}  
		
		
	if(isset($_POST['submit'])){
    
        // Fetch items from the cart table in the database
$query = "SELECT * FROM cart WHERE username = ?";
$stmt = mysqli_prepare($dbconn, $query);
mysqli_stmt_bind_param($stmt, "i", $name);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Iterate through the results and insert each item into the orders table
while ($row = mysqli_fetch_assoc($result)) {
    $quantity = $row['quantity'];
    $product_code = $row['product_code'];
    $username = $row['username'];

    $query = "INSERT INTO orders (quantity, flower_id, customer_name, order_date) VALUES (?, ?, ?, NOW())";
    $stmt = mysqli_prepare($dbconn, $query);
    mysqli_stmt_bind_param($stmt, "iss", $quantity, $product_code, $username);
    mysqli_stmt_execute($stmt);

    // Update inventory stock for the flower
    $update_query = "UPDATE inventory SET stock = stock - ? WHERE flower_id = ?";
    $update_stmt = mysqli_prepare($dbconn, $update_query);
    mysqli_stmt_bind_param($update_stmt, "ii", $quantity, $product_code);
    mysqli_stmt_execute($update_stmt);
}

// Delete the cart items for the current user
$query = "DELETE FROM cart WHERE username = ?";
$stmt = mysqli_prepare($dbconn, $query);
mysqli_stmt_bind_param($stmt, "i", $name);
mysqli_stmt_execute($stmt);
  
 echo'<br><br><br><h1>Your order has been registered</h1>';   
}

    ?>