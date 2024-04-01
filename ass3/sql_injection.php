<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cns";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno()) {
  die("FAILED TO CONNECT  :  ".mysqli_connect_error());
  // code...
}
$username = $_POST['user'];
$password = $_POST['pass'];
$sql = "select * from login where username = '$username' and password = '$password'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
  echo "<h1><center>SUCCESSFULLY LOGED IN </center></h1>";
  echo "QUERY  :  ".$sql;
}
else {
  echo "<h1>Login Failed, Invalid username or password</h1>";
}
if ($count > 0) {
  echo "<div>";
  echo "<table>
  <trbgcolor = '@ccc'>
  <th>USERNAME</th>
  <th>PASSWORD</th>
  </tr></table>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr align = left style = 'font-size:20px;'>";
    echo "<td align = center>".$row['username']."</td>\t";
    echo "\t";
    echo "<td align = left>".$row['password']."</td>";
    echo "</tr>";
    echo "<br></br>";  }}
 ?>
