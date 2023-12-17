<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Lakshmi Aravind">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Monk</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tillana:wght@600&display=swap" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">NoteUrHints</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Your Notes</a></li>
              <li><a href="#">Open Notes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>    
      </div>
    </nav>
    <!-- jumbotron -->
    <div class="jumbotron">
      <h1 id="color">NoteUrHints</h1>
      <h2>Welcome to the Notes App!</h2>
      <p>“If you don’t write it down, it never happened.” - Lewis Carroll</p> 

      <p>“The art of note-taking is the art of selective attention.” - Thomas J. Watson </p>

      <p>“Writing is thinking on paper.” - William Zinsser </p>
      <button type="button" class="btn btn-primary btn-lg signup greenbox" data-toggle="modal" data-target="#exampleModal" >Signup for free</button>
    </div>
    <!-- signup form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create your account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          <div id='signupmessage'></div>
          <form id="signinform">
            <div class="form-group">
              <label for="signupname">Name</label>
              <input type="text" name="username" class="form-control" id="username"  placeholder="Enter ur Name">
              
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Create Your Password</label>
              <input type="password"  name="password1" class="form-control" id="password1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword2">Confirm Password</label>
              <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
    </div>
  <!-- login form -->
  <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="loginemail">Email address</label>
                <input type="email" class="form-control" id="loginemail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="loginpassword">Password</label>
                <input type="password" class="form-control" id="loginpassword" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="logincheck">
                <label class="form-check-label" for="logincheck">Remember me</label>
                <a class="pull-right" style = "cursor : pointer " data-dismiss="modal" data-toggle="modal" data-target="#forgotModal">Forgot Password?</a>
              </div>
              
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary pull-left">Register</button>
            
          </div>
        </div>
      </div>
    </div>
  <!-- Forgot password form -->
    <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Forgot password ? Enter Your email account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="forgotemail">Email address</label>
                <input type="email" class="form-control" id="forgotemail" aria-describedby="emailHelp" placeholder="Enter email">
                
              </div>
            
              
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary pull-left">Register</button>
            
          </div>
        </div>
      </div>
    </div>
    <!-- footer-->
    <footer class="bg-body-tertiary text-center text-lg-start">
    <!-- Copyright -->
      <div class="text-center p-3 footer" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2020 Copyright:
        <a class="text-body" href="https://easy2bhappy.com/">modmonk.in.net</a>
      </div>
    <!-- Copyright -->
    </footer>
    <script src="index.js"></script>

  </body>
</html>
