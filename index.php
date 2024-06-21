<?php
              session_start();
          ?>
<html lang="en">
    <head>
        
        <title>BLOOM'S</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
<style>
body {
  background-image: url('https://images8.alphacoders.com/836/836103.jpg');
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
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: #f4f4f4;
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
<section id="hero">
              <div class="container">
                  <div class="row">
                      <div class="col">
<br>
                       <h1>BLOOM'S</h1>
                          <h2 style="color:#FF0472;">Online Flower Shop</h2>
                         <br>
                          <button type="button" class="btn btn-dark btn-lg" onclick="window.location.replace('https://blooms-123.000webhostapp.com/Deal.php')">BUY NOW</button>
                       </div>

                       
                  
</body>
</html>



