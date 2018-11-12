<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Landing Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">

 
  </head>
  <body>
<!--nav bar -->
<nav class="navbar navbar-custom navbar-fixed">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Online Notes</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
          
            <li><a href="#">Help </a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#loginModal" data-toggle="modal">Login</a></li>
      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--      jumbotron-->
      <div class="jumbotron">
  <h1>Online Notes App</h1>
  <p>your Notes with you wherever you go.</p>
          <p>Easy to use, protects all your notes!</p>
  <p><a class="btn  btn-lg brown signup" href="#" role="button" data-target="#signupModal" data-toggle="modal" >Sign-up, Its-free</a></p>
</div>
<!--  login form    -->
      <form method="get" id="loginform">
     <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     < div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Login:</h4>
      </div>
      <div class="modal-body">
<!--          login message from php file-->
          <div id="loginmessage"></div>
       
           <div class="form-group">
            <label for="loginemail" class="sr-only">email:</label>
            <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
          </div>
           <div class="form-group">
            <label for="loginpassword" class="sr-only">password:</label>
            <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder=" password" maxlength="30">
          </div>
           <div class="checkbox">
          <label>
               <input type="checkbox" name="rememberme" id="rememberme">Remember me
                </label>
          <a class="pull-right" style="cursor:pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal"> Forgot Password ?</a>
          </div>
          </div>
      <div class="modal-footer">
          <input class="btn brown" name="signup" type="submit" value="Login">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">Register</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
     
      </form>
      
      
<!--      sign up form-->

      <form method="get" id="signupform">
     <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     < div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sign up today and Start you Online Notes App!</h4>
      </div>
      <div class="modal-body">
<!--          sign up message from php file-->
          <div id="signupmessage"></div>
        <div class="form-group">
            <label for="username" class="sr-only">Username:</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
          </div>
           <div class="form-group">
            <label for="email" class="sr-only">email:</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
          </div>
           <div class="form-group">
            <label for="password" class="sr-only">password:</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
          </div>
           <div class="form-group">
            <label for="password" class="sr-only">confirm password:</label>
            <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
          </div>
          </div>
      <div class="modal-footer">
          <input class="btn brown" name="signup" type="submit" value="Sign up">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
     
      </form>
      
<!-- forgot password form     -->
      <form method="get" id="forgotpasswordform">
     <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     < div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title">Forgot password? Enter you email address:</h4>
      </div>
      <div class="modal-body">
<!--          forgot password message from php file-->
          <div id="forgotpasswordmessage"></div>
       
           <div class="form-group">
            <label for="forgotemail" class="sr-only">email:</label>
            <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Forgot email" maxlength="50">
          </div>
           
           
          </div>
      <div class="modal-footer">
          <input class="btn brown" name="forgotpassword" type="submit" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">Register</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
     
      </form>
      
      
      
      
      
      
      
      
<!--      footer-->
      <div class="footer">
          <div class="container">
              <p>NAV COPYRIGHT &copy; 2015-2018</p>
          
          </div>
      
      </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>