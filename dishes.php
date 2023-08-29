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
<div class="container">
        <div class="row">
<?php
    $sql="select * from `dishes`";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id= $row['dish_id'];
        $dish_name= $row['dish_name'];
        $dish_desc= $row['dish_desc'];
        $dish_price= $row['dish_price'];
      echo   '<div class="col-lg-4 mb-4">
      <div class="card">
          <img class="card-img-top" src="restaurant/img/pop'.$id.'.jpg" alt="Food Image">

          <div class="card-body">
              <h5 class="card-title">'.$dish_name.'</h5>
              <p class="card-text">
              '.$dish_desc.'
              </p>
              <span class="price">₹'.$dish_price.'</span>
          </div>
      </div>
  </div>';
    }
    ?>
    </div>
</div>



<div class="bottom-bar dark-bg text-center">
            <p itemprop="description"><a target="_blank" href="#"></a>Copyright | All rights
                reserved <br>©spice scape</p>

        </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>