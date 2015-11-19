<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>insert form</title>
</head>
<body>
  <?php
$con = mysql_connect("mysql15.000webhost.com","a9900613_elo","Garrison1");
if (!$con){
  die("Cannot connect " . mysql_error());
} else {
  echo("Connected to server.");

}
$select = mysql_select_db("a9900613_elo",$con);
if(!$select){
  die("Cannot select database:" . mysql_error());
}else{
  echo("<br><br>Selected database.<br> <br>");
}

$sql = "SELECT * FROM signupdb";
$myData = mysql_query($sql,$con);

echo "<table border=1>
<tr>
  <th>ID</th>
  <th>Team Name</th>
  <th>First Person</th>
  <th>Second Person</th>
  <th>Date</th>
</tr>";



while($record = mysql_fetch_array($myData)){
  echo "<tr>";
  echo "<td>" . $record['id'] . "</td>";
  echo "<td>" . $record['teamName'] . "</td>";
  echo "<td>" . $record['firstPerson'] . "</td>";
  echo "<td>" . $record['secondPerson'] . "</td>";
  echo "<td>" . $record['date'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($con);
  ?>

</body>
</html>
