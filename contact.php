<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Spice Scape restaurant</title>
    <link rel="shortcut icon" href="restaurant/img/logo.png" sizes="16x16" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="restaurant/style.css">
  </head>
  <body>
<?php
include 'partials/_dbconnect.php';
include 'partials/_nav.php';
?>
 <?php 
      $method=$_SERVER['REQUEST_METHOD'];
      $showalert=false;
      if($method=='POST'){
        //INSERT THREAD INTO DB
        $firstName=$_POST['contactfirstName'];
        $lastName=$_POST['contactlastName'];
        $email=$_POST['contactemail'];
        $message=$_POST['message'];
        

       // $thread_desc=$_POST['desc'];
        $sql="INSERT INTO `contacts` ( `firstName`, `lastName`, `email`, `message`,`timestamp`) VALUES ('$firstName', '$lastName', '$email', ' $message',current_timestamp())";
        $result=mysqli_query($conn,$sql);
        $showalert=true;
        if($showalert){
          echo '<div class="alert alert-success alert-dismissible" role="alert">
           Thank you for using our services. We will contact you soon.
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
      }
    ?>
<?php     
  echo ' <center><h1 class="display-4">Contact us directly!</h1></center>
  <div style=" background-color:#ccc;">
  <form class="row col-md-12 my-4" action="'. $_SERVER["REQUEST_URI"].'" method="post" >
  <div class="col-md-4">
    <label for="firstName" class="form-label">First Name(required)</label>
    <input type="text" class="form-control" id="contactfirstName" name="contactfirstName" required>
    
  </div>
  <div class="col-md-4">
    <label for="lastName" class="form-label">Last Name(required)</label>
    <input type="text" class="form-control" id="contactlastName" name="contactlastName" required>
  </div>
  <br>
  <div class="col-md-6">
    <label for="contactemail" class="form-label">Email(required)</label>
    <input type="email" class="form-control" id="contactemail" name="contactemail">
  </div>
  <div class="form-group col-md-7">
    <label for="message">Your message</label>
    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
  </div>
  <div class="my-3">
  <button type="submit" class="btn btn-dark col-md-3">Submit</button>
  </div>
  </form>
  </div>
  ';
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>