<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="restaurant/style.css">

    <title>Spice Scape restaurant</title>
    <link rel="shortcut icon" href="restaurant/img/logo.png" sizes="16x16" type="image/x-icon">
  </head>
  <body>
<?php
include 'partials/_dbconnect.php';
include 'partials/_nav.php';
$method = $_SERVER['REQUEST_METHOD'];
$showalert = false;

if ($method == 'POST') {
    // INSERT THREAD INTO DB
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['Address'];
    $bookingDate = $_POST['bookingDate'];
    $bookingTime = $_POST['bookingTime'];
    $NoOfPeople = $_POST['NoOfPeople'];

    // Prepare an insert statement
    $stmt = $conn->prepare("INSERT INTO `forms` (`first_name`, `last_name`, `address`, `booking_date`, `booking_time`, `no_of_people`, `timestamp`) VALUES (?, ?, ?, ?, ?, ?, current_timestamp())");
    $stmt->bind_param("sssssi", $firstName, $lastName, $address, $bookingDate, $bookingTime, $NoOfPeople);

    if ($stmt->execute()) {
        $showalert = true;
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you!! Your form has been submitted. We will send you a confirmation mail to your registered email id when your booking is confirmed.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">There was an error submitting your form. Please try again later.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    $stmt->close();
}
?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<div class="jumbotron">
    <h1 class="display-4 text-center">Book your table!!</h1>
    <div class="container my-10">
    <form class="row col-md-12" action="' . $_SERVER["REQUEST_URI"] . '" method="post">
      <div class="col-md-6">
        <label for="firstName" class="form-label">First Name:</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required>
      </div>
      <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name:</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
      <div class="col-12">
        <label for="Address" class="form-label">Address:</label>
        <input type="text" class="form-control" id="Address" name="Address">
      </div>
      <label for="booking" class="my-2">Book your table:</label>
      <div class="form-inline col-md-12">
        <label for="bookingDate" class="form-label">Date:</label>
        <input type="date" class="form-control" id="bookingDate" name="bookingDate" required>
        <label for="bookingTime" class="form-label mx-2">Time:</label>
        <input type="time" id="bookingTime" class="form-control" name="bookingTime" value="00:00" min="10:00" max="22:00" required>
      </div>
      <div class="col-md-3 my-2">
        <label for="NoOfPeople" class="form-label">Make reservation for</label>
        <input type="number" class="form-control" id="NoOfPeople" name="NoOfPeople" placeholder="Enter the number of people">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
    </div>';
} else {
    echo '<div class="jumbotron">
    <h1 class="display-4">Book your table!!</h1>
    <p class="lead">You need to login first to fill this form</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginmodal" role="button">Log in</a>
    </div>';
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
