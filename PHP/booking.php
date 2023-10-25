<?php 
include '..\partials\nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\public\css\booking.css">
   
    <title>booking</title>
</head>
<body>
<div class=book1>
    <button class=btext1><a class=btext111 href="index.php">Home</a>/Booking</button>
<p class=btext2>Book an Appointment</p>
</div>
<br><br>
<div class=bookingform>
<form  name="booking" action="#" method="post" onsubmit="#">

  <select name="specialization" class=opt1>
  <option value="">specialization</option>
    <option value="volvo">eye care</option>
    <option value="saab">pediatrics</option>
    <option value="opel">internal medicine</option>
    <option value="audi">physiotherapy</option>
  </select>
  <br><br>

  <select name="drs"  class=opt2>
  <option value="">physician</option>
    <option value="volvo">samira ossama</option>
    <option value="saab">magdy yaccoub</option>
    <option value="opel">adam youssef</option>
    <option value="audi">laila yahia</option>
  </select>
  <br><br>
<span>
  <input type="date"  class=opt3 name="date" placeholder="Date">
 

  <input type="time"  class=opt4 name="time" placeholder="time">
  <br><br>
</span>

  <input type="tel"  class=opt5 name="phone" placeholder="Phone number"><br>
  <br>
  <span>
  <input class=submitbtn type="submit" value="Book Appointment">
  <button class=cancelbtn><a class=cancelbtn1 href="index.php">Cancel</a></button>
</span>
</form>
<div>
<br> <br><br>
</body>
</html>
<?php 
include '..\partials\footer.php';
?>
