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
  <style>
    #container{
        margin-top: 120px;
        
    }
    #done, #allnotes{
        display: none;
    }
    .container{
        height: 100%;
    }
    #btns{
        margin-bottom: 20px;
    }
    textarea{
        width: 100%;
        border-left-width: 30px;
        color: red;
        font-size: 17px;
        border-left-color: blueviolet;
        line-height: 1.5em;
        max-width: 100%;
        height : 300px;
        background-color: pink;
        padding: 10px;
    }
    .ftp{
        margin-top: 170px;
    }
    tr{
        cursor: pointer;
    }
    h1{
        color: black;
        font-size: 35px;
        background-color: yellowgreen;
    }

  </style>

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
            <li class="active"><a href="#">My Profile</a></li>
            <li ><a href="#">Your Notes</a></li>
            <li><a href="#">Open Notes</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" ><span class="glyphicon glyphicon-user"></span>Logged in as <b> USERNAME</b></a></li>
            <li><a href="#" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
      </div>    
    </div>
  </nav>
  <!-- table profile -->
  <div class="container" id ="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>General Account settings</h1>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-dark">
                    <tr data-toggle="modal" data-target="#usermodal">
                        <td>Username</td>
                        <td>Value</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#emailmodal">
                        <td>Email</td>
                        <td>value</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#passwordmodal">
                        <td>Password</td>
                        <td>hidden</td>
                    </tr>

                </table>
            </div>
           

        </div>
        
    </div>
  </div>
  
  
  
  <!-- username form -->
  <div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Username</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            
          </div>
        
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </div>
<!-- email form -->
<!-- Modal -->
<div class="modal fade" id="emailmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new email">
            
          </div>
        
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </div>
<!-- Forgot password form -->
  <div class="modal fade" id="passwordmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Your Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              
              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Current Password">
              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Password">
              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm New Password">

            </div>
           
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
          
        </div>
      </div>
    </div>
  </div>
  <!-- footer-->
  <footer class="bg-body-tertiary text-center text-lg-start ftp">
  <!-- Copyright -->
    <div class="text-center p-3 footer" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2020 Copyright:
      <a class="text-body" href="https://easy2bhappy.com/">modmonk.in.net</a>
    </div>
  <!-- Copyright -->
  </footer>

</body>
