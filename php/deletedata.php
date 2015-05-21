<?php
//This is the directory where images will be saved 
 session_start();

$con=mysqli_connect("bigyellowcat.cs.binghamton.edu","naik","naik3010","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 
$company = $_POST[company];
$model = $_POST[model];
$processor = $_POST[processor];

 
$sql="DELETE FROM dailyupdate WHERE company = '$company' AND model = '$model' AND processor = '$processor';";

if ( $company == "" || $model == "" || $processor = "")
{
    
	echo "All fields are required. Please go back and try again!!";
    //header("Location: adddata.html");
    exit;
   
}
else
{
   echo "<script type=\"text/javascript\">window.alert('Product is successfully deleted.');window.location.href = 'http://harvey.binghamton.edu/~rnaik1/deletedata.html';</script>"; 
   //header("Location: deletedata.html");
}

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 
mysqli_close($con);
?>