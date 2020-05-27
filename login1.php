<?php 
 
$host="localhost";
$user="root";
$password="";
$db="login";
 
$con=mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql)  ;
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        echo("topwear.html");
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>














<!DOCTYPE html>
<html>
<head>
    <title>e_commerce store</title>
    <link rel="stylesheet" type="text/css" href="login2.css">
    <link rel="stylesheet" href="e_commerce/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="e_commerce/js/jquery.js"></script>
    
    
    <script type="text/javascript" src="e_commerce/js/bootstrap.min.js"></script>

</head>
    <body>
      
             
        <div class="container">
	<img src="e_commerce/img_avatar2.png"/>
		<form>
		<div class="form-input">
		<input type="text" name="text" placeholder="Enter the User Name"/>	
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password"/>
		</div>
		<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>