<?php
session_start();
if (isset($_POST['username'])) {
   $name=$_SESSION['username'];
}

              
              
          ?>
<html lang="en">
    <head>
        <title>BLOOM'S</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
<style>
body {
  background-color: #FFE0E3;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
body{
    display: block;
    overflow-x: hidden;
}


nav{
    background-color: #FFE0E3;
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
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: #FFE0E3;
    align-content: center;
    min-height: 100vh;
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

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: #4CAF50;
  color: white;
}
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


<?php

if (isset($_SESSION['username'])) {

		//Connect to the database
		$dbconn =  mysqli_connect("localhost","id20627285_postgres","^p*%+5}=Xt2cYx$*","id20627285_blooms");

		//Check if connection was successful
		if(!$dbconn){
			echo "Database connection error.";
			exit;
		}
$username = $_SESSION['username'];
$query = "SELECT orders.id AS order_id, flowers.name AS product_name, inventory.price, orders.quantity, orders.order_date 
FROM orders 
JOIN flowers ON orders.flower_id = flowers.id 
JOIN inventory ON flowers.id = inventory.flower_id 
WHERE orders.customer_name = '$username'";
$result = mysqli_query($dbconn, $query);
		
	
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
    echo'                <h1 class="fw-bold mb-0 text-black">Orders  -  '.$username.'</h1>';
if(mysqli_num_rows($result) > 0)  {
    $total = 0;
while($row = mysqli_fetch_assoc($result)){
    
 
echo'    <h6 class="mb-0 text-muted"></h6>';
     echo'   </div>';

echo'            <hr class="my-4">';

        echo'          <div class="row mb-4 d-flex justify-content-between align-items-center">';
           echo'         <div class="col-md-2 col-lg-2 col-xl-2">';
            echo          '<h6 class="text-muted">'.$row['order_id'].'</h6>';
              echo'          <h6 class="text-black mb-0">'.$row['product_name'].'</h6>';          
         echo'           </div>';   
           echo'         <div class="col-md-3 col-lg-3 col-xl-3">';
            
           
            echo'          <h6 class="text-black mb-0">$ '.$row['price'].'</h6>';
            echo'          <h6 class="text-black mb-0">'.$row['quantity'].'</h6>';
            
            
                echo'      </div>'; 
                 echo'         <div class="col-md-4 col-lg-4 col-xl-4">';
           echo'          <h6 class="text-black mb-0">'.$row['order_date'].'</h6>';
              echo'      </div>'; 
               
              
			//Display each product in a div with class "product"
			
	
			
			}
	
       
              
		
			 echo'</section>';
		
    }
    

    
		else{
			echo "<h2>No Orders found.</h2>";
		}  
		
}		

    ?>














                  
</body>
</html>



