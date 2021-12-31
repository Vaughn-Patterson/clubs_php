<?php
include_once 'includes/session.php' 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />

    <title>participants -<?php echo $title?> </title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">

      <a class="navbar-brand" href="index.php">JamSchools Clubs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="viewrecords.php">View Participants</a>
         
        </div>
      </div>
      
      <div class="navbar-nav ml-auto" >
        <?php
        if(!isset($_SESSION['userid'])){
       ?>
          <a class="nav-link active" aria-current="page" href="login.php">Login<span class="sr-only"></span></a>
          <?php } else { ?> 

              <a class="nav-link active" aria-current="page" href="#">Hello <?php echo $_SESSION['username'] ?><span class="sr-only">!</span></a>

          <a class="nav-link active" aria-current="page" href="logout.php">Log Out <span class="sr-only"></span></a>

              <?php }?>   
        </div>

    </div>
  </nav>
  <br/>
  <br/>
  <body>
  <div class="container">