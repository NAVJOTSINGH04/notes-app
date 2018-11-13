<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ProfilePage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
<style>
    #container{
        margin-top: 100px;
    }
    #notePad,#allNote, #done{
        display: none;
    }
    .buttons{
        margin-bottom: 20px;
    }
    textarea{
        width: 100%;
        max-width: 100%;
        font-size: 16px;
        line-height: 1.5em;
        border-left-width: 20px;
        border-color: #C47F18;
        color: #C47F18;
        padding: 10px;
    }
    tr{
     cursor: pointer;
    }
      
      </style>
 
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
        <li ><a href="#">My Profile</a></li>
          
            <li><a href="#">Help </a></li>
            <li><a href="#">Contact Us</a></li>
          <li class="active"><a href="#">My Notes</a></li>
        </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#" >Logged in as <b>username</b></a></li>
        <li><a href="#" >Logout</a></li>
      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--container-->
      <div class="container" id="container">
          <div class="row">
          <div class="col-md-offset-3 col-md-6">
              
              <h1>General Account Settings:</h1>
              <div class="table-responsive">
                  <table class="table table-hover table-condensed table-bordered">
                  <tr data-target="#updateusername" data-toggle="modal">
                      <td>Username</td>
                      <td>value</td>
                  </tr>
                      <tr data-target="#updateemail" data-toggle="modal">
                      <td>Email</td>
                      <td>value</td>
                  </tr>
                      <tr data-target="#updatepassword" data-toggle="modal">
                      <td>Password</td>
                      <td>hidden</td>
                  </tr>
                  
                  
                  </table>
              </div>
              </div>
          </div>
      </div>
      
      
<!--  update username   -->
      <form method="get" id="updateusernameform">
     <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     < div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit username</h4>
      </div>
      <div class="modal-body">
<!--          login message from php file-->
          <div id="loginmessage"></div>
       
           <div class="form-group">
            <label for="username" >username:</label>
            <input class="form-control" type="text" name="username" id="username"  maxlength="30" value="username value">
          </div>
           
           
          </div>
      <div class="modal-footer">
          <input class="btn brown" name="updateusername" type="submit" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
     
      </form>
      
      


 <!--  update email   -->
      <form method="get" id="updateemailform">
     <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     < div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Enter  new email</h4>
      </div>
      <div class="modal-body">
<!--          login message from php file-->
          <div id="loginmessage"></div>
       
           <div class="form-group">
            <label for="username" >Email:</label>
            <input class="form-control" type="email" name="email" id="email"  maxlength="50" value="email value">
          </div>
           
           
          </div>
      <div class="modal-footer">
          <input class="btn brown" name="updateusername" type="submit" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
     
      </form>
      
      
      
<!--  update password  -->
      <form method="get" id="updatepasswordform">
     <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     < div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Enter currrent and new password</h4>
      </div>
      <div class="modal-body">
<!--          login message from php file-->
          <div id="loginmessage"></div>
       
           <div class="form-group">
            <label for="currentpassword" class="sr-only">Your current password:</label>
            <input class="form-control" type="password" name="currentpassword" id="currentpassword"  maxlength="30" placeholder="your current password">
          </div>
           
          <div class="form-group">
            <label for="password" class="sr-only">choose a password:</label>
            <input class="form-control" type="password" name="password" id="password"  maxlength="30" placeholder="Choose a  password">
          </div>
          
          <div class="form-group">
            <label for="password2" class="sr-only">confirm password:</label>
            <input class="form-control" type="password" name="password2" id="password2"  maxlength="30" placeholder="Confirm password">
          </div>
           
          </div>
      <div class="modal-footer">
          <input class="btn brown" name="updateusername" type="submit" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
       
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