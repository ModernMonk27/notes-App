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
            <li><a href="#">My Profile</a></li>
            <li class="active"><a href="#">Your Notes</a></li>
            <li><a href="#">Open Notes</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" ><span class="glyphicon glyphicon-user"></span>Logged in as <b> USERNAME</b></a></li>
            <li><a href="index.php?logout=1" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
      </div>    
    </div>
  </nav>
  <!--buttons -->
  <div class="container" id ="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div id="btns">
                <button type="button" id="addnotes" class="btn btn-primary btn-lg">Add notes</button>
                <button type="button" id="edit" class="btn btn-primary btn-lg pull-right">Edit</button>
                <button type="button" id="done" class="btn green btn-lg pull-right">Done</button>
                <button type="button" id="allnotes" class="btn btn-primary btn-lg">All Notes</button>
            </div> 
            <div id="text">
                <textarea></textarea>
            </div>
            <div class="notes">
                <!-- call ajax -->
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

