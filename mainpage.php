<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Main Page</title>

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
              <div class="buttons">
              <button id="addNote" type="button" class="btn btn-lg brown">Add Note</button>
              <button id="edit" type="button" class="btn btn-lg brown pull-right">Edit </button>
                  <button id="done" type="button" class="btn btn-lg brown pull-right">Done</button>
                  <button id="allNote" type="button" class="btn btn-lg brown">All Note</button>
              </div>
              <div id="notePad">
                  <textarea rows="10"></textarea>
              </div>
              <div id="notes" class="notes">
<!--   Ajax call to php file            -->
              </div>
          
              </div>
          </div>
      </div>
      
      
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