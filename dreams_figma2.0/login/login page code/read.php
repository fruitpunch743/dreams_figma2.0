<?php
if (($open = fopen("user_info.csv" , "r")) !== FALSE) 
{

  while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
  {        
    $array[] = $data; 
  }

  fclose($open);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
for($i = 1; $i <= 15; $i++)
{
  $sql = "INSERT INTO user_details VALUES (".$array[$i][0].",'".$array[$i][1]."',".$array[$i][2].",".$array[$i][3].",'".$array[$i][4]."','".$array[$i][5]."');";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>