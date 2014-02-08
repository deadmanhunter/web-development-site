<!DOCTYPE php>
<html>
  <head>
  	<title>Dragon Air Ride - Confirm your request</title>
  	<link rel="stylesheet" href="css.css"></link>
  </head>

<body>
    <div class="header">
      <h1>Dragon Air Transit - Reservations</h1>
    </div>

    <br>

    <div class="nav">
      <table align="center">
        <tr>
          <td><a href="index.html">Berk</a></td>
          <td><a href="reservations.html">Reservations</a></td>
          <td><a href="dragons.html">Dragons</a></td>
          <td><a href="riders.html">Riders</a></td>
          <td><a href="contact.html">Customer Service</a></td>
          <td><a href="credits.html">Credits</a></td>
        </tr>
      </table>
    </div>
    </br>

    <h3>Is this information correct?</h3><br>
    <h2>Your name is: <?php echo $_POST["name"]; ?></h2> </br>
    <h2>Your email is: <?php echo $_POST["email"]; ?></h2> </br>
    <h2>Your desired rider is: <?php echo $_POST["rider"]; ?></h2> </br>
    <h2>Your desired dragon is: <?php echo $_POST["dragon"]; ?></h2> </br>
    <h2>Your questions and/or comments: <?php echo $_POST["message"]; ?></h2> </br>
    



  </body>

</html>