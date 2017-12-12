<!DOCTYPE html>
<html>
<head>
  <title>music world</title>
  <meta charset="UTF-8">

  <meta name="author" content="jugta ram">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="shortcut icon" type="image/x-icon" href="onebit_40.ico" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script> 
    <script src='https://www.google.com/recaptcha/api.js'></script>
   
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>


  <!--this code for fb login -->
 
  <div id="signu" style="margin-top:100px"> 
  <div  style="font-family:fantasy;background-color:green;font-size:60px;text-align:center;color:white;margin:50px;border-radius:50px" title="sangeet.com"><span class="glyphicon glyphicon-headphones"></span> Sign Up</div>
  
<div class="container">
  <form action="signact.php" method="post">
    <div class="form-group input-group-lg">
      <input type="email" class="form-control" id="email" placeholder="Email"  name="email" required>
    </div>
    <div class="form-group input-group-lg">
      <input type="password" class="form-control" id="pwd" placeholder=" Password" name="pwd" required>
    </div>
    <div class="form-group input-group-lg">
      <input type="text" class="form-control" placeholder=" Username" name="username" required>
    </div>
         <div class="g-recaptcha" data-sitekey="6LddwDIUAAAAAOMf7PT0m8UubvEh7_6HPzXCdoWm"></div>
    <button type="submit" class="btn " style="margin-left:45%;margin-top:10px;background-color:green;border-radius:50px;color:white;font-size:25px">Sign Up</button>
  </form>
</div>

<div>
  <h4 style="text-align: center;">If you already have an account then</h4>
  <button class="btn " style="margin-left:45%;margin-top:10px;background-color:green;border-radius:50px;color:white;font-size:25px" data-toggle="modal" data-target="#mymodal"><a style="color: white"><span class="glyphicon glyphicon-log-in"> Login</span></a></button>
</div>

</div>
 <!-- this is modal for login page-->
<div  class="modal fade" id="mymodal" role="dialog">
  <div class="modal-dialog modal-md">
       <div class="modal-content">
        <div class="modal-header" style="margin:0px;background-color:green;text-align:center;color:white;">
          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
          <h1 class="modal-title" >
            <span class="glyphicon glyphicon-lock"></span>Login</h1>
       </div>
       <div class="modal-body" style="background-color:white;">
        <p id="error"></P>
           <form action="loginact.php" method="post">
            <div class="input-group input-group-lg">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user" style="font-size:25px;"></i></span>
              <input type="text" class="form-control" id="user"name="email" placeholder="Email Id">
            </div>
            <div class="input-group input-group-lg">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock" style="font-size:25px;"></i></span>
              <input type="password" class="form-control" id="pw"name="username" placeholder="Password">
            </div>
           >
          <?php require 'facebook.php' ?>
            <button type="submit"  class="btn btn-lg btn-success" style="margin-left:220px" ><a href="profile.php"  target="_top" style="color: white;"><span class="glyphicon glyphicon-off"></span>Login</a></button>
           </form>

       </div>
       <div class="modal-footer">
        <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
        <button data-target="#forgetmodal" data-toggle="modal">Forget password &#63;</button>
       </div>
    </div>
</div>
  <!-- this is modal forget password page-->
<div id="forgetmodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
       <div class="modal-content">
        <div class="modal-header" style="margin:0px;background-color:green;text-align:center;color:white;">
          <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
          <h1 class="modal-title" >
            Forget your Password&#63;</h1>
       </div>
       <div class="modal-body">
           <form>
            <div class="input-group input-group-lg">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user" style="font-size:25px;"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Email Id">
            </div>
            <button type="submit" class="btn btn-lg btn-success" style="margin-left:220px">Send Reset Link</button>
           </form>
       </div>
       <div class="modal-footer">
        <button type="submit" class="btn btn-danger " data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
       </div>
    </div>
</div>

</body>
</html>