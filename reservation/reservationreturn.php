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
        <td><a href="reservations.html">Reservations</a></td>
        <td><a href="dragons.html">Dragons</a></td>
        <td><a href="destinations.html">Destinations</a></td>
        <td><a href="riders.html">Riders</a></td>
        <td><a href="contact.html">Customer Service</a></td>
        <td><a href="credits.html">Credits</a></td>
      <tr>
    </table>
  </div>
  <br>

  <h3>Is this information correct?</h3>


  Your desired rider is: <?php echo $_POST["rider"]; ?> <br>
  Your desired dragon is: <?php echo $_POST["dragon"]; ?> <br>



  </body>
</html>