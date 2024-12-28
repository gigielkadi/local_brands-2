
<?php
// $db_server = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "LocalBrandsDB";
$conn = mysqli_connect('localhost', 'root','', 'LocalBrandsDB');



if ($conn)  {
 //echo"Connection successful";
}
else{

  die(mysqli_error($conn));
}
?>
