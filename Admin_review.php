<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <title>Bloom's</title>
    <style>
@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
 
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
:root {
  --background-color1: #fafaff;
  --background-color2: #ffffff;
  --background-color3: #ededed;
  --background-color4: #cad7fda4;
  --primary-color: #4b49ac;
  --secondary-color: #0c007d;
  --Border-color: #3f0097;
  --one-use-color: #3f0097;
  --two-use-color: #5500cb;
}
body {
  background-color: var(--background-color4);
  max-width: 100%;
  overflow-x: hidden;
}
 
header {
  height: 70px;
  width: 100vw;
  padding: 0 30px;
  background-color: var(--background-color1);
  position: fixed;
  z-index: 100;
  box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
  display: flex;
  justify-content: space-between;
  align-items: center;
}
 
.logo {
  font-size: 27px;
  font-weight: 600;
  color: #E75480;
}
 
.icn {
  height: 30px;
}
.menuicn {
  cursor: pointer;
}
 
.searchbar,
.message,
.logosec {
  display: flex;
  align-items: center;
  justify-content: center;
}
 
.searchbar2 {
  display: none;
}
 
.logosec {
  gap: 60px;
}
 
.searchbar input {
  width: 250px;
  height: 42px;
  border-radius: 50px 0 0 50px;
  background-color: var(--background-color3);
  padding: 0 20px;
  font-size: 15px;
  outline: none;
  border: none;
}
.searchbtn {
  width: 50px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 0px 50px 50px 0px;
  background-color: var(--secondary-color);
  cursor: pointer;
}
 
.message {
  gap: 40px;
  position: relative;
  cursor: pointer;
}
.circle {
  height: 7px;
  width: 7px;
  position: absolute;
  background-color: #fa7bb4;
  border-radius: 50%;
  left: 19px;
  top: 8px;
}
.dp {
  height: 40px;
  width: 40px;
  background-color: #626262;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.main-container {
  display: flex;
  width: 100vw;
  position: relative;
  top: 70px;
  z-index: 1;
}
.dpicn {
  height: 42px;
}
 
.main {
  height: calc(100vh - 70px);
  width: 100%;
  overflow-y: scroll;
  overflow-x: hidden;
  padding: 40px 30px 30px 30px;
}
 
.main::-webkit-scrollbar-thumb {
  background-image:
        linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
  width: 5px;
}
.main::-webkit-scrollbar-track {
  background-color: #9e9e9eb2;
}
 
.box-container {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-wrap: wrap;
  gap: 50px;
}
.nav {
  min-height: 91vh;
  width: 250px;
  background-color: var(--background-color2);
  position: absolute;
  top: 0px;
  left: 00;
  box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
  padding: 30px 0 20px 10px;
}
.navcontainer {
  height: calc(100vh - 70px);
  width: 250px;
  position: relative;
  overflow-y: scroll;
  overflow-x: hidden;
  transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
  display: none;
}
.navclose {
  width: 80px;
}
.nav-option {
  width: 250px;
  height: 60px;
  display: flex;
  align-items: center;
  padding: 0 30px 0 20px;
  gap: 20px;
  transition: all 0.1s ease-in-out;
}
.nav-option:hover {
  border-left: 5px solid #a2a2a2;
  background-color: #dadada;
  cursor: pointer;
}
.nav-img {
  height: 30px;
}
 
.nav-upper-options {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 25px;
}
 
.option1 {
  border-left: 5px solid #010058af;
  background-color: var(--Border-color);
  color: white;
  cursor: pointer;
}
.option1:hover {
  border-left: 5px solid #010058af;
  background-color: var(--Border-color);
}
.box {
  height: 130px;
  width: 230px;
  border-radius: 20px;
  box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: space-around;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}
.box:hover {
  transform: scale(1.08);
}
 
.box:nth-child(1) {
  background-color: var(--one-use-color);
}
.box:nth-child(2) {
  background-color: var(--two-use-color);
}
.box:nth-child(3) {
  background-color: var(--one-use-color);
}
.box:nth-child(4) {
  background-color: var(--two-use-color);
}
 
.box img {
  height: 50px;
}
.box .text {
  color: white;
}
.topic {
  font-size: 13px;
  font-weight: 400;
  letter-spacing: 1px;
}
 
.topic-heading {
  font-size: 30px;
  letter-spacing: 3px;
}
 
.report-container {
  min-height: 300px;
  max-width: 1200px;
  margin: 70px auto 0px auto;
  background-color: #ffffff;
  border-radius: 30px;
  box-shadow: 3px 3px 10px rgb(188, 188, 188);
  padding: 0px 20px 20px 20px;
}
.report-header {
  height: 80px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 20px 10px 20px;
  border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}
 
.recent-Articles {
  font-size: 30px;
  font-weight: 600;
  color: #5500cb;
}
 
.view {
  height: 35px;
  width: 90px;
  border-radius: 8px;
  background-color: #5500cb;
  color: white;
  font-size: 15px;
  border: none;
  cursor: pointer;
}
 
.report-body {
  max-width: 1160px;
  overflow-x: auto;
  padding: 20px;
}
.report-topic-heading,
.item1 {
  width: 1120px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.t-op {
  font-size: 18px;
  letter-spacing: 0px;
}
 
.items {
  width: 1120px;
  margin-top: 15px;
}
 
.item1 {
  margin-top: 20px;
}
.t-op-nextlvl {
  font-size: 14px;
  letter-spacing: 0px;
  font-weight: 600;
}
 
.label-tag {
  width: 100px;
  text-align: center;
  background-color: rgb(0, 177, 0);
  color: white;
  border-radius: 4px;
}
@media screen and (max-width: 950px) {
  .nav-img {
    height: 25px;
  }
  .nav-option {
    gap: 30px;
  }
  .nav-option h3 {
    font-size: 15px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 800px;
  }
}
 
@media screen and (max-width: 850px) {
  .nav-img {
    height: 30px;
  }
  .nav-option {
    gap: 30px;
  }
  .nav-option h3 {
    font-size: 20px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 700px;
  }
  .navcontainer {
    width: 100vw;
    position: absolute;
    transition: all 0.6s ease-in-out;
    top: 0;
    left: -100vw;
  }
  .nav {
    width: 100%;
    position: absolute;
  }
  .navclose {
    left: 00px;
  }
  .searchbar {
    display: none;
  }
  .main {
    padding: 40px 30px 30px 30px;
  }
  .searchbar2 {
    width: 100%;
    display: flex;
    margin: 0 0 40px 0;
    justify-content: center;
  }
  .searchbar2 input {
    width: 250px;
    height: 42px;
    border-radius: 50px 0 0 50px;
    background-color: var(--background-color3);
    padding: 0 20px;
    font-size: 15px;
    border: 2px solid var(--secondary-color);
  }
}
 
@media screen and (max-width: 490px) {
  .message {
    display: none;
  }
  .logosec {
    width: 100%;
    justify-content: space-between;
  }
  .logo {
    font-size: 20px;
  }
  .menuicn {
    height: 25px;
  }
  .nav-img {
    height: 25px;
  }
  .nav-option {
    gap: 25px;
  }
  .nav-option h3 {
    font-size: 12px;
  }
  .nav-upper-options {
    gap: 15px;
  }
  .recent-Articles {
    font-size: 20px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 550px;
  }
}
 
@media screen and (max-width: 400px) {
  .recent-Articles {
    font-size: 17px;
  }
  .view {
    width: 60px;
    font-size: 10px;
    height: 27px;
  }
  .report-header {
    height: 60px;
    padding: 10px 10px 5px 10px;
  }
  .searchbtn img {
    height: 20px;
  }
}
 
@media screen and (max-width: 320px) {
  .recent-Articles {
    font-size: 12px;
  }
  .view {
    width: 50px;
    font-size: 8px;
    height: 27px;
  }
  .report-header {
    height: 60px;
    padding: 10px 5px 5px 5px;
  }
  .t-op {
    font-size: 12px;
  }
  .t-op-nextlvl {
    font-size: 10px;
  }
  .report-topic-heading,
  .item1,
  .items {
    width: 300px;
  }
  .report-body {
    padding: 10px;
  }
  .label-tag {
    width: 70px;
  }
  .searchbtn {
    width: 40px;
  }
  .searchbar2 input {
    width: 180px;
  }
}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		th, td {
			text-align: left;
			padding: 10px;
			border: 1px solid #ddd;
		}

		th {
			background-color: #6CB4EE;
			color: white;
		}

		form {
			display: inline-block;
			margin: 0;
			padding: 0;
		}

		input[type=text], input[type=submit] {
			padding: 6px;
			border: none;
			border-radius: 3px;
			font-size: 14px;
			margin-right: 10px;
		}

		input[type=submit] {
			background-color: #318CE7;
			color: white;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #0000FF;
		}
</style>

</head>
 
<body>
   
    <!-- for header part -->
    <header>
 
        <div class="logosec">
            <div class="logo">Bloom's</div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn"
                id="menuicn"
                alt="menu-icon">
        </div>
 
        
    </header>
 
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img"
                            alt="dashboard">
                        <h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/Admin1.php">DashBoard</a></h3>
                    </div>
 
                    <div class="option2 nav-option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img"
                            alt="Review">
                       <h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/Admin_review.php">Reviews</a></h3>
                    </div>
 
                    <div class="nav-option option3">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img"
                            alt="report">
                        <h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/Admin_report.php">Report</a></h3>
                    </div>
  <div class="nav-option option4">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img"
                            alt="orders">
<h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/Admin_Orders.php">Orders</a></h3>
                    </div>  
                    <div class="nav-option option6">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img"
                            alt="Order_Queriese">
                       <h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/Admin_OrderQueries.php">Queries</a></h3>
                    </div>
 
 <div class="nav-option option5">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img"
                            alt="Accounts">
                       <h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/Admin_Accounts.php">Accounts</a></h3>
                    </div>
                    <div class="nav-option option6">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img"
                            alt="Catalogue">
                       <h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/Admin_Products.php">Catalogue</a></h3>
                    </div>
                    
                    
                   
 
                    <div class="nav-option logout">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img"
                            alt="logout">
                        <h3><a class="nav-link" href="https://blooms-123.000webhostapp.com/loginform.php">Logout</a></h3>
                    </div>
 
                </div>
            </nav>
        </div>
        <div class="main">
 
            <div class="searchbar2">
                <input type="text"
                       name=""
                       id=""
                       placeholder="Search">
                <div class="searchbtn">
                  <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn"
                        alt="search-button">
                  </div>
            </div>
 
            <div class="box-container">
 <?php
// Connect to the database

$conn = mysqli_connect("localhost","id20627285_postgres","^p*%+5}=Xt2cYx$*","id20627285_blooms");
// Check if connection was successful
if (!$conn) {
    echo "Database connection error.";
    exit;
}

// Prepare a query to retrieve the total number of rows in the customers table
$query = "SELECT COUNT(*) as total FROM customers";

// Execute the query
$result = mysqli_query($conn, $query);

// Retrieve the total number of rows from the result set
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

// Display the total number of rows in HTML

               
 
                    
        echo'        <div class="box box2">';
      echo'               <div class="text">';
       echo'                   <h2 class="topic-heading">'.$total.'</h2>';
       echo'                   <h2 class="topic">Accounts</h2>';
      echo'                </div>';
 
       echo'               <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
                         alt="likes">';
        echo'          </div>';
 
 $query = "SELECT COUNT(*) as total FROM review";

// Execute the query
$result = mysqli_query($conn, $query);

// Retrieve the total number of rows from the result set

if (mysqli_num_rows($result) > 0) {
    // Retrieve the total number of rows from the result set
    $row = mysqli_fetch_assoc($result);
    $total = $row['total']; }
else
{
   $total=0; 
}
 
       echo'         <div class="box box3">';
       echo'             <div class="text">';
       echo'                 <h2 class="topic-heading">'.$total.'</h2>';
        echo'                <h2 class="topic">Reviews</h2>';
        echo'            </div>';
 

           echo'          <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments">';
            echo'     </div>';
 
 
 $query = "SELECT COUNT(*) as total FROM inventory";

// Execute the query
$result = mysqli_query($conn, $query);

// Retrieve the total number of rows from the result set
$row = mysqli_fetch_assoc($result);
$total = $row['total'];
 
           echo'      <div class="box box4">';
            echo'        <div class="text">';
           echo'              <h2 class="topic-heading">'.$total.'</h2>';
            echo'             <h2 class="topic">Flowers</h2>';
               echo'      </div>';
 
               echo'      <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">';
           echo'      </div>';
      echo'      </div>';
mysqli_close($conn);
?> 
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Welcome Admin!</h1>
                    
                </div>
 
           <h2 class="recent-Articles"></h2>      
            
	<h1>Reviews</h1>
	<table>
		<thead>
			<tr>
				
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Review</th>
				<th>Response</th>
				<th>Submit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Establish database connection
			$conn = mysqli_connect("localhost", "id20627285_postgres", "^p*%+5}=Xt2cYx$*", "id20627285_blooms");

			// Check if connection was successful
			if (!$conn) {
				echo "<tr><td colspan='7'>Database connection error.</td></tr>";
				exit;
			}

			// Retrieve the reviews from the database
			$sql = "SELECT * FROM review";
			$result = mysqli_query($conn, $sql);

			// Display the reviews in a table
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<tr>';
				
				echo '<td>' . $row['id'] . '</td>';
				echo '<td>' . $row['name'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['Review'] . '</td>';
				echo '<td>';
				echo '<form method="post">';
				
				echo '<input type="hidden" name="id" value="'. $row['id'].'">';
				$sql2 = "SELECT response FROM review WHERE id = " . $row['id'];
$result2 = mysqli_query($conn, $sql2);
if (!$result2) {
    echo "Error executing query: " . mysqli_error($conn);
} else {
    $row = mysqli_fetch_assoc($result2);
    if ($row['response'] != "") {
        echo $row['response'];
    } else {
       echo '<input type="text" name="response" placeholder="Enter response here">';
    }
}

		
				echo '<td><input type="submit" name="submit" value="Submit"></td>';
				echo'<td><button type="submit" name="delete">';
    echo'    <img src="https://th.bing.com/th/id/OIP.Xy3uRSHklPtJK3vAGFSPKwHaHa?w=162&h=180&c=7&r=0&o=5&dpr=1.6&pid=1.7" alt="Delete" width="30" height="20">';
 echo'   </button></td>';
				echo '</form>';
				echo '</td>';
				echo '</tr>';
			}
			if(isset($_POST['submit'])){
    
    $response = $_POST['response'];
  
    $id = $_POST['id'];
    // Prepare a query to insert the product into the cart table
    
    // = "INSERT INTO cart (product_code, quantity,username) VALUES ($product_id, 1,'$name') ON DUPLICATE KEY UPDATE quantity = quantity + 1;";
    $query = "UPDATE review SET response='$response' WHERE id='$id'";
mysqli_query($conn, $query);

    // Execute the query
    
  }
  
  	if(isset($_POST['delete'])){
  	    $id = $_POST['id'];
  	     $query = "DELETE FROM review WHERE id='$id'";

    // Execute the query
    if(mysqli_query($conn, $query)) {
        // Review deleted successfully
        echo "Review deleted successfully.";
    } else {
        // Error deleting review
        echo "Error deleting review: " . mysqli_error($conn);
    }
    mysqli_query($conn, $query);
  	}

			mysqli_close($conn);
			?>
		</tbody>
	</table>

                </div> </div>
            
 
</body>
</html>