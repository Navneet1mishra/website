<?php
$con = mysqli_connect("localhost", "root", "", "navneet_db") or die(mysqli_error($con));
$select_query = "SELECT  id, email, first_name FROM products_1";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
?>
<!DOCTYPE html>
<html>
    <head>
       <title>e_commst</title>
    <link rel="stylesheet" type="text/css" href="pro.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>  

<body>
    <div class="container">
         <?php while ($row = mysqli_fetch_array($select_query_result)) { ?>
        <div class="row">
            <div class="col-lg-12"><h4>User</h4></div>
        </div>
        <div class="row">
            <div class="col-xs-2">ID</div>
            <div class="col-xs-10"><?php echo $row['id']; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-2">Email</div>
            <div class="col-xs-10"><?php echo $row['email']; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-2">First Name</div>
            <div class="col-xs-10"><?php echo $row['first_name']; ?></div>
        </div>
        <hr/>
           <?php } ?>
    </div>
</body>
</html>