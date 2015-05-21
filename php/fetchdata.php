<html>
<head>        
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script src="./jquery-1.11.0.min.js"></script>
	<center>
		<h1>
			<a href = ./entrance.html><img src= "logo.jpg" height = "100" width = "1000""></a>
		</h1>
	</center>
<style type="text/css">
#navbar ul { 
        margin: 0; 
        padding: 5px; 
        list-style-type: none; 
        text-align: center; 
        background-color: #000; 
        } 
 
#navbar ul li {  
        display: inline; 
        } 
 
#navbar ul li a { 
        text-decoration: none; 
        padding: .3em 4em; 
        color: #fff; 
        background-color: red; 
        } 
 
#navbar ul li a:hover { 
        color: #000; 
        background-color: #fff; 
        }  
</style>
<script type="text/javascript">


    $(document).ready(function(){
	var company ='<?php echo $_GET['company']; ?>';
        fetchdata(company);  
    });
    
    function  fetchdata(company){
        
        $.ajax({
            url:"fetchlaptops.php",
            type:'POST',
            data:  {
                "action": "fetch","company":comany
				
            },
                
            success:function(data){
                
                $("#mydata").html('')
                $("#mydata").html(data);
                console.log('success');
               
        
            }
        });
    }	 
</script>
</head> 
<body>
<font size="4" face="verdana" color="blue">
<div id="navbar"> 
  <ul> 
        <li><a href="./usersection.html">Home</a></li> 
        <li><a href="./aboutus.html">About US</a></li> 
        <li><a href="./contactus.html">Contact Us</a></li> 
        <li><a href="./dealoftheday.html">Deal of the day</a></li> 
        <li><a href ="./logout.php">Logout</a></li>  
  </ul> 
</div>
<br>
<center><b style = "color:black">Available Laptops:</b></center>
<div id="mydata" style="height: 200px; overflow-y: scroll">
            Currently we have no data in the list
        </div>
</body>
</html>