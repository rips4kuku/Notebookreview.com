<?php
//This is the directory where images will be saved 
 session_start();
//setting connection
$con=mysqli_connect("bigyellowcat.cs.binghamton.edu","naik","naik3010","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 //fetching values from fields
$name = $_POST[name];
$email = $_POST[email];
$date = $_POST[date];
$cardnumber = $_POST[cardnumber];
$cvv = $_POST[cvv];
$address = $_POST[address];
$zipcode = $_POST[zipcode];


 //adding to table named checkout
$sql="INSERT INTO checkout (name,email,date,cardnumber,cvv,address,zipcode)
VALUES('$name', '$email', '$date', '$cardnumber', '$cvv', '$address','$zipcode')";

if ( $name == "" || $email == "" || $date == "" || $cardnumber == "" || $cvv == "" || $address == ""|| $zipcode = "")
{
    
	echo "All fields are required. Please go back and try again!!";
    //header("Location: userlogin.html");
    exit;
   
}
else
{
	echo "Thank you for placing order @NotebookReview.com";
	echo "<br>";
	echo "<br>";
	echo 'Click here for<a href="./usersection.html" /><input type = "button" name = "button" value = "Homepage"></a>';
}
//check for sql query
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 
mysqli_close($con);
?>