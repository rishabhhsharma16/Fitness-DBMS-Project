<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    
    <title>Fitness Gym | Login</title>
    <link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/entypo.css">

</head>

<body class="page-body login-page login-form-fall">
	<div id="container">
		<div class="login-container">
			
			
			
			<div class="login-form" style="
    margin: 0;
    padding: 0;
    background: url(logo4.jpg);
    background-size: cover;
    background-position: ;
    font-family: sans-serif;
    height:800px;" >
				
				<div class="login-content" style="padding-top:150px;">
					
					<form action="change_s_pwd.php" method="POST" id="bb">	
					           
                  <p>LOGIN  ID</p>	
                  <input type="text" class="form-control" name="login_id" placeholder="Enter Login ID" data-rule-required="true" data-rule-minlength="4"/>
				
    	         <p> ENTER SECRET KEY</p>		
      	         <input type="text" name="login_key"  class="form-control" placeholder="Enter secert key" data-rule-required="true" data-rule-minlength="6">
										
                 <p >ENTER NEW PASSWORD</p>   
		         <input type="password" name="pwfield" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Your new passowrd">
							
                <p >CONFIRM NEW PASSWORD</p>
				<input type="password" name="confirmfield" id="confirmfield" class="form-control" data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirm Your new password">
							
						
				<input type="submit" name="" value="Login" style="">
								
				<a href="./index.php"><input type="submit" name="" value="Cancel"></a>
						
					</form>
				
				</div>
				
			</div>
			
		</div>
	</div>	
		
    </body>
</html>    	


