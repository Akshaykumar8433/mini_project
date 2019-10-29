<!DOCTYPE html>
<html lang="en">
<?php
//  session_start();
 ?>
<head>
  <title>Booking Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="icon" type="image/ico" href="images/logo.png" />
  <link rel="stylesheet" href="css/booking_form.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="validation.js"></script>
</head>
<body>
	
<div class="wrapper">
  <div class="contact-form" style="height: 100%">
    <div class="input-fields">
      <h1 align="center" style="color: #c5ecfd">Booking Form</h1>
      <span align="center" style="margin-top: 22px;color: red" id="message"></span>
      <input type="hidden" id="hall_name" value="<?php echo($_SESSION['hall_name']);?>">
      <input type="text" class="input" id="fname" placeholder="First Name">
      <input type="text" class="input" id="lname" placeholder="Last Name">
      <input type="text" class="input" id="email" placeholder="Email Address">
      <input type="date" class="input" id="date" data-date-format="YYYY-MM-DD">
      <textarea class="input" id="address" placeholder="Address"></textarea>
      <input type="number" class="input" id="num" placeholder="Phone">
      <button class="btn" onclick="return booking();">Submit</button>
    </div>
  </div>
</div>	


</body>
</html>