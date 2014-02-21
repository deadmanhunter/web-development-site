<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Finding users reservations</title>
</head>
<body>
<?php
// Connect to MySQL
    require ('../dbconn.php'); // for iPage
    //require ('../../../../mysqli_connect.php'); 

$dbname = 'reservation';
        
$sql = "SHOW TABLES FROM $dbname";
$result = mysqli_query($dbc, $sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}
else {
    // Fetch and print all the tables:
    echo "$dbname has these tables:<br />";
    while ($row = mysqli_fetch_row($result)) {
        echo "{$row[0]}\n";
    }
}

//mysqli_select_db($dbname, $dbc);

// Select the database:
    $q = "USE $dbname";    
    $result = @mysqli_query ($dbc, $q); 

if ($result) {
    echo "<p>using $dbname</p>";
}

//$result = mysqli_query("SELECT * FROM users", $dbc);
$q = "SELECT email, rider, dragon, DATE_FORMAT(startdate, '%M %D, %y'), DATE_FORMAT(enddate), AS dr FROM users ORDER BY startdate ASC";    
$result = mysqli_query($dbc, $q);
$num_rows = mysqli_num_rows($result);

echo "users has $num_rows Rows\n";

if ($result) { // If it ran OK, display the records.

    // Table header.
    echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
    <tr><th align="left">Name</th><th align="left">Date Registered</th></tr>
';
    
    // Fetch and print all the records:
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<tr><td align="left">' . $row['email'] . '</td>
                    <td align="left">' . $row['rider'] . '</td>
                    <td align="left">' . $row['dragon'] . '</td>
                    <td align="left">' . $row['startdate'] . '</td>
                    <td align="left">' . $row['enddate'] . '</td>
        ';
    }

    echo '</table>'; // Close the table.
    
    //mysqli_free_result ($r); // Free up the resources.    

} else { // If it did not run OK.

    // Public message:
    echo '<p class="error">The current users could not be retrieved. We apologize for any inconvenience.</p>';
    
    // Debugging message:
    echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
    
} // End of if ($r) IF.

mysqli_free_result($result);

?>

</body>
</html>