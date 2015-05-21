<?php
session_start();

// Grab User submitted information
$username = $_POST["username"];
$password = $_POST["password"];

// Connect to the database
$con = mysql_connect("bigyellowcat.cs.binghamton.edu","naik","naik3010");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("test",$con) or die("Could not select database");;


$result = mysql_query("SELECT username, password FROM signup WHERE username = '$username'");

$row = mysql_fetch_array($result);

if ( $username == "" || $password == "")
{
    $_SESSION['error'] = "All fields are required";
    header("Location: signup.html");
    exit;
}

if($row["username"]==$username && $row["password"]==$password)
    //echo"You are a validated user.";
	echo "<script type=\"text/javascript\">window.alert('Successfully logged in.');window.location.href = 'http://harvey.binghamton.edu/~rnaik1/usersection.html';</script>"; 
else
	echo "<script type=\"text/javascript\">window.alert('Sorry, your credentials are not valid, Please try again.');window.location.href = 'http://harvey.binghamton.edu/~rnaik1/signup.html';</script>"; 

?>