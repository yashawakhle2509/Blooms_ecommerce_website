<?php
// all required variables defined here
session_start(); // start the session
session_unset();// unset all session variables
session_destroy();


		//Connect to the database
		$dbconn = mysqli_connect("localhost","id20627285_postgres","^p*%+5}=Xt2cYx$*","id20627285_blooms");

		//Check if connection was successful
		if(!$dbconn){
			echo "Database connection error.";
			exit;
		}
			$query = "delete from cart";
$result = mysqli_query($dbconn, $query);
mysqli_close($dbconn);		
session_start();


$nameError =  $passwordError= "";
$name = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is mandatory";
  } else {
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "Only letters allowed";
    }
  }
 
  
  if (empty($_POST["password"])) {
    $passwordError = "Password is mandatory";
  } else {
    
    
  }

}
?>
<!DOCTYPE html>
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
             <a class="nav-link" href="https://blooms-123.000webhostapp.com/loginform.php">Login</a>
           </li>
         </ul>
       </div>
     </div>
  </nav>

                       
                  
</body>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
body {
  background-image: url('https://cdn.wallpapersafari.com/95/46/drSA3n.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.login-form {
width: 340px;
     margin: 50px auto;
}
    .login-form form {
     margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>

</head>
<body >
<div class="login-form" >
<br><br><br><br><br>
    <form action="" method="post" >
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required"  name="name" value="<?php echo $name;?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password" value="<?php echo $password;?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
               
    </form>
    <p class="text-center"><a href="https://blooms-123.000webhostapp.com/Create_Account-form.php">Create an Account</a></p>
</div>
</body>
</html>    


<?php
// Check if the user is already logged in
//if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
//    header("location: https://blooms-123.000webhostapp.com/index.php");
 //   exit;
//}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Get the username and password from the form
    $username = $_POST['name'];
    $password = $_POST['password'];
    if ($username == "admin" && $password == "admin123") {
    // Redirect to admin page
     echo '<script>window.location.href = "https://blooms-123.000webhostapp.com/Admin1.php";</script>';
    exit();
    }

	$dbh = mysqli_connect("localhost","id20627285_postgres","^p*%+5}=Xt2cYx$*","id20627285_blooms");
	if (empty($nameError) && empty($passwordError)) {
            $stmt = mysqli_prepare($dbh, "SELECT id, username, password FROM customers WHERE username = ? AND password = ?");
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                // username and password match
                
                $row = mysqli_fetch_assoc($result);
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION['username'] = $row["username"];
                 
                 $_SESSION['loggedin'] = true;
                

     echo '<script>window.location.href = "https://blooms-123.000webhostapp.com/products_2.php";</script>';
               
            } else {
                // username or password is incorrect
               
                 echo "<h3 style='background-color:#FF0000;' align='middle'>Invalid Username or Password</h3>";
            }
            
	}

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($dbh);

    // Set a session variable to indicate that the user is logged in
   

}

?>
