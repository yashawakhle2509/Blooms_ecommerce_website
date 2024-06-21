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
    font-family: 'Playfair Display', serif;
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
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Playfair Display', serif;
  
}
body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: #f4f4f4;
    align-content: center;
    min-height: 100vh;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #Ffb6c1;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Playfair Display', serif;
}
.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #E75480;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #79d279;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #79d279;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

</style>
   </head>
<body>

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Somaiya College</div>
          <div class="text-two">Vidyavihar</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@somaiya.edu</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any feedback for the flowers we sell , you can send us message from here. It's our pleasure to help you.</p>
      <form  method="post">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message"  name="review"></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
      <table>
    <tr>
        <th>Name</th>
        <th>Review</th>
        <th>Reply</th>
    </tr>
    </div>
    
    </div>
  </div>
 <br><br><br><br><br>
 

 <?php
 	$dbconn = mysqli_connect("localhost","id20627285_postgres","^p*%+5}=Xt2cYx$*","id20627285_blooms");

		//Check if connection was successful
		if(!$dbconn){
			echo "Database connection error.";
			exit;
		}

  if(isset($_POST['submit'])){
    echo '<h2>Thank you for your feedback. We shall respond as soon as possible.</h2>';
    $name = $_POST['name'];
   $email = $_POST['email'];
    $review = $_POST['review'];
    
    // Prepare a query to insert the product into the cart table
    
    // = "INSERT INTO cart (product_code, quantity,username) VALUES ($product_id, 1,'$name') ON DUPLICATE KEY UPDATE quantity = quantity + 1;";
    $query = "INSERT INTO review (name, email, review) VALUES ('$name', '$email', '$review')";
         

    // Execute the query
    $result = mysqli_query($dbconn, $query);
    
  }
  $query = "SELECT name, review, response FROM review";

    // Execute the query and check the return value
    $result = mysqli_query($dbconn, $query);
    if (!$result) {
        echo "Query execution error: " . mysqli_error($dbconn);
        exit;
    }

    // Loop through the result set and display each row in HTML
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['review'] . "</td>";
        echo "<td>" . $row['response'] . "</td>";
        echo "</tr>";
    }
   
echo'</table>';
  
 mysqli_close($dbconn);
    
  ?>
  </body>

</html>