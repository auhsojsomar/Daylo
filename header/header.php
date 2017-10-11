<?php



?>
<!DOCTYPE html>
<html>
	<html lang="en">
<head>
	<title>LandF</title>
  <link rel="icon" type="image/png" href="icon2.png"/>
</head>
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style2.css">
      <link rel="stylesheet" type="text/css" href="">
     
  		
  <body style="background-color: #ecf0f1;"> 
      <nav class="navbar navbar" style="border-radius: 0px; background-color: #24292e;">
        <div class="container-fluid">
           <div class="navbar-header" >
              <a class="navbar-brand" style="font-size: 18px; color:#ecf0f1; font-family: calibri" href="index.php"><span><img src="logo" style="margin-right: 10px; margin-bottom: 4px; width: 45px; height: 20px;" id="logo" /></span><strong>Lost and Found </strong></a>
          </div>  
              <ul class="nav navbar-nav">
                 <li class="active" style= "border-radius: 5px;"><a href="index.php">Home</a></li>
                 <li style= "border-radius: 5px;"><a href="developers.php">Developers</a></li>
                 <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="width: 160px background-color: 000px; ">About <b class="caret"></b></a>
                 <ul class="dropdown-menu" style="background-color: #000;">
                  <li><a href="#" style="color: #337ab7;">Guide</a></li>
                  <li class="divider"></li>
                  <li><a href="#" style="color: #337ab7;">How it works</a></li>
                  <li class="divider"></li>
                  <li><a href="#" style="color: #337ab7;">Contact us</a></li>
                </ul>
              </li>
                 </li>
                    
              </ul>

                    
              </ul>
           <ul class="nav navbar-nav navbar-right">
                 <li><a href="#"><span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#myModal"> Register</a></li>
                 <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color: #111; border-top-left-radius:  5px; border-top-right-radius: 5px; border: 0px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color: white;">Sign up form</h4>
                      </div>
                      <div class="modal-body" style="background-color: #95a5a6;">
                        <form class="register-form" action="register.php"  method="POST" >
                            <div class="form-group">
                              <label>First Name</label>
                              <input class="form-control" type="text" name="first"  required="">
                            </div>
                             <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" name="last" class="form-control" required="">
                            </div>
                             <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email" class="form-control"  required="">
                            </div>
                            <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control"  required="">
                            </div>
                            <div class="form-group">
                              <label>Password:</label>
                              <input type="password" name="pass" class="form-control"  required="">
                            </div>
                            <button type="submit" name="Submit_btn" class="btn btn-default" value="Submit">Submit</button>
                          </form>
                      </div>
                      <div class="modal-footer" style="background-color: #111; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; border: 0px; ">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                 <li><a href="#"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myModal1"> Login</a></li>
                 <div class="modal-content">                        
                          <div id="myModal1" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color: #111;  border-top-left-radius:  5px; border-top-right-radius: 5px; border: 0px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title" style="margin-left: 200px; color: white;">Login your account</h4>
                                  </div>
                                  <div class="modal-body" style="; background-color: #95a5a6;">
                                      <?php
          if(isset($_GET['invalidaccount'])==true)
          {

            echo '<div class="alert alert-danger" style="text-align: center;"><strong><span class="glyphicon glyphicon-info-sign"></span> Invalid Username or Password</strong></div>';
          }
          ?>
                                    <form class="form-inline" action="login.php" method="POST" >
                                        <div class="form-group">
                                          <label style=" margin-left: 37px;"> Username: </label>
                                          <input type="text" name="username" class="form-control" style="margin-top: 0px;  margin-left: 4px; width: 400px;" required="">
                                        </div>
                                        <div class="form-group" >
                                          <label style="margin-top: 20px; margin-left: 38px;">Password:</label>
                                          <input type="password" name="password" class="form-control" style="margin-left: 10px; margin-left: 5px; width: 400px;" required="">
                                        </div>
                                        <div class="checkbox" style="margin-left: 210px; margin-top: 10px;">
                                          <label><input type="checkbox"> Remember me</label>
                                        </div>
                                        <input value="Submit" type="submit" name="Submitbot" class="btn btn-default" style="margin-left: 230px; margin-top: 10px;"></input>
                                      </form>
                                  
                                  </div>
                                  <div class="modal-footer" style="background-color: #111; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; border-top: 0px">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>


                      </div>
           </ul>
        </div>

     </nav>

