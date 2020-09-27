<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head> 

    
    <title>Apple Fitness | Dashboard </title>

    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <style>
    	.page-container .sidebar-menu #main-menu li#dash > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
  
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">APPLE FITNESS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" style="left:50px;"><a href="index.php">DASHBOARD</a></li>
      <li class="active" style="left:50px;"><a href="new_entry.php">New Registration</a></li>
      <li class="active" style="left:50px;"><a href="payments.php">Payments</a></li>
      
            <li class="dropdown" style="left:50px;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Members
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="table_view.php" style="left:50px;">View Members</a></li>
          <li><a href="view_mem.php" style="left:50px;">Edit Members</a></li>
        </ul>
      </li>
        <li class="active" style="left:50px;"><a href="new_health_status.php">Health Status</a></li>
          
          <li class="dropdown" style="left:50px;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Plan
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="new_plan.php">New Plan</a></li>
          <li><a href="view_plan.php">Edit Subscription details</a></li>
        </ul>
      </li>
        
    <li class="dropdown" style="left:50px;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Overview
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="revenue_month.php">Income Per Month</a></li>
        </ul>
      </li>
      
      <li class="dropdown" style="left:50px;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exercise Routine
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addroutine.php">ADD routine</a></li>
          <li><a href="viewroutine.php">VIEW routine</a></li>
          <li><a href="editroutine.php">EDIT routine</a></li>
        </ul>
      </li>
      
      <li class="active"style="left:50px;"><a href="more-userprofile.php">Profile</a></li>
      
      <li style="font-size:20px; color:white; padding-top:10px; left:200px;">Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>
							
							<ul class="nav navbar-nav navbar-right">
      <li style="left:300px;"><a href="logout.php"><span class="glyphicon"></span> Logout</a></li>
    </ul>
    </ul>
  </div>
</nav> 
   
   
    <body class="page-body">
        
        

    	<div>	

    		<div class="main-content" style="
    margin: 0;
    padding: 0;
    background: url(avatar.jpg);
    background-size: cover;
    background-position: ;
    font-family: sans-serif;
    height:1300px;
">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">
					
						
						</ul>
						
					</div>
					
				</div>

			<hr>

			<div class="col-sm-15" style="width:800px; padding-left:14px;"><a href="revenue_month.php">			
				<div class="tile-stats tile-aqua">
					<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Paid Income This Month</h2><br>	
						<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$revenue = 0;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							    	$query1="select * from plan where pid='".$row['pid']."'";
							    	$result1=mysqli_query($con,$query1);
							    	if($result1){
							    		$value=mysqli_fetch_row($result1);
							        $revenue = $value[4] + $revenue;
							    	}
							    }
							}
							echo "₹".$revenue;
							?>
						</div>
				</div></a>
			</div>
			

			<div class="col-sm-15 tile-grey" style="width:650px; padding-left:14px;"><a href="table_view.php">			
				<div class="tile-stats tile-blue">
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Total <br>Members</h2><br>	
							<?php
							$query = "select COUNT(*) from users";

							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>	
				
			

			<div class="col-sm-15" style="width:500px; padding-left:14px;"><a href="view_plan.php">			
				<div class="tile-stats tile-green">
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Total Plan Available</h2><br>	
							<?php
							$query = "select COUNT(*) from plan where active='yes'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$i = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>
            
            <div class="col-sm-15" style="width:350px; padding-left:14px; "><a href="viewroutine.php">			
				<div class="tile-stats tile-red">
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>Total Routine Available</h2><br>	
							<?php
							$query = "select COUNT(*) from timetable";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$i = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
                        
						</div>
				</div></a>
			</div>
			
	</div>
        </div>
    </body>
	
</html>
