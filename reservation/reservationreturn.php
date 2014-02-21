<!DOCTYPE html>
<html>
  <head>
  	<title>Dragon Air Ride - Confirm your request</title>
  	<link rel="stylesheet" href="css.css"> 
  </head>

  <body>

  <div class="header">
    <h1>Dragon Air Transit - Reservations</h1>
  </div>

  <br></br>

  <div class="nav">
    <table align="center">
      <tr>
        <td><a href="index.html">Berk</a></td>
        <td><a href="reservation.html">Reservations</a></td>
        <td><a href="dragons.html">Dragons</a></td>
        <td><a href="riders.html">Riders</a></td>
        <td><a href="credits.html">Credits</a></td>
      <tr>
    </table>
  </div>
  <br>

  <h3>Thank you for choosing Berk Dragon Air! An email has been sent to the address you gave to us confirming your selections</h3>


<?php
// Connect to MySQL
    require ('../dbconn.php'); // for iPage
    //require ('../../../../mysqli_connect.php'); 




if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO rides (name, email, rider, dragon, startdate, enddate)
VALUES
('$_POST[name]', '$_POST[email]', '$_POST[rider]', '$_POST[dragon]', '$_POST[startdate]', '$_POST[enddate]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";


$name = $_POST["name"];
$email = $_POST["email"];
$rider = $_POST["rider"];
$dragon = $_POST["dragon"];
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];

mysqli_close($con);


?>

<?php
// Connect to MySQL
    require ('../dbconn.php'); // for iPage
    //require ('../../../../mysqli_connect.php'); 




if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, "SELECT * FROM rides");

echo "<table border='1'>
<tr>
<th>Email</th>
<th>Rider</th>
<th>Dragon</th>
<th>Start Date</th>
<th>End Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['rider'] . "</td>";
  echo "<td>" . $row['dragon'] . "</td>";
  echo "<td>" . $row['startdate'] . "</td>";
  echo "<td>" . $row['enddate'] . "</td>";
  echo "</tr>";
  }

echo "</table>";

mysqli_close($con);


?>


  </body>
</html>