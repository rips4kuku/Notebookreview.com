<?php
//This is the directory where images will be saved 
 session_start();

$con=mysqli_connect("bigyellowcat.cs.binghamton.edu","naik","naik3010","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 
$name = $_POST[name];
$email = $_POST[email];
$username = $_POST[username];
$password = $_POST[password];
$phonenumber = $_POST[phonenumber];
$address = $_POST[address];
$city = $_POST[city];
$state = $_POST[state];
$zipcode = $_POST[zipcode];


 
$sql="INSERT INTO signup (name,email,username,password,phonenumber,address,city,state,zipcode)
VALUES('$name', '$email', '$username', '$password', '$phonenumber', '$address', '$city','$state','$zipcode')";

if ( $name == "" || $email == "" || $username == "" || $password == "" || $phonenumber == "" || $address == "" || $city == "" || $state = "" || $zipcode = "")
{
    
	echo "All fields are required. Please go back and try again!!";
    //header("Location: userlogin.html");
    exit;
   
}
else
{
	echo "<script type=\"text/javascript\">window.alert('Successfully Registered.');window.location.href = 'http://harvey.binghamton.edu/~rnaik1/signup.html';</script>"; 
}

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 
mysqli_close($con);
?>