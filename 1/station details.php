<?php require_once 'controllers/authControllers.php'; 


if(!isset($_SESSION['username'])){
  header('location:citizen login form.php');
  exit();
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width ,initialisation-scale=1"><!-- not clear-->
<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--i donot know-->
  <title>Station details</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="station details.css">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
</head>
<body>
  <header class="box1">
   <nav id="header-nav" class="navbar navbar-default">
    <div class="container">

      <div class="navbar-header">
        <div class="navbar-brand">
        <a href="homepage citizen.php.html">
                  <h1>Crime record management system</h1>
                </a>
              </div>
      </div>
     <div id="collapsable-nav" class="collapse navbar-collapse">
      <ul id="nav-list" class="nav navbar-nav navbar-right">
        <button class="btn btn-light " ><a href="station details.php?leave=1" >Leave</a></button>
         <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-user"></i>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
         <li><a href="homepage citizen.php?logout=1" >Sign out</a></li>
      
    </ul>
          

      </ul>
    </div>
   
    </div>
   </nav>
    
    
  </header>
   <?php if(count($errors) >0):?>
      <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
   <div class="forms">
     
    <form class="loginbox"  >
      <h1>Police station detail</h1>
      <div class="table-box">
      
        <div class="table-row table-head" >
            
            <div class="table-cell first-cell">
                <p>Police station name</p>
            </div>
            <div class="table-cell">
                <p>Police station code</p>
            </div> 
            <div class="table-cell">
                <p>Address</p>
            </div>
            
        </div>


        <div class="table-row">
            
            <div class="table-cell first-cell">
                <p name=""> <?php echo $_SESSION['station_name']; ?></p>
            </div>
            <div class="table-cell">
                <p name=""> <?php echo $_SESSION['station_code']; ?></p>
            </div>
            <div class="table-cell">
                <p name=""> <?php echo $_SESSION['address']; ?></p>
            </div>
               
        </div>


        
        
</div>
      
        
      </form>

    
</div>

  <footer >
    <div class="container" id="footer">
      <div class="row" >
        
        <section id="hours" class="col-sm-4">
          <span>National emergency number:</span><br>
          <i class="fa fa-phone"></i>: 112<br>
          <hr class="visible-xs">
        </section>
        <section id="hours" class="col-sm-4">
          <span>Police:</span><br>
          <i class="fa fa-phone"></i>: 100<br>
          <hr class="visible-xs">
        </section>
        <section id="hours" class="col-sm-4">
          <span>Women helpline:</span><br>
          <i class="fa fa-phone"></i>: 1091<br>
          <hr class="visible-xs">
        </section>
      </div>
      
    </div>
  </footer>
</body>

</html>