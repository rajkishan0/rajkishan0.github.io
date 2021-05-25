<?php
$serverName = "localhost";
$database_name="tef";
$username = "root";
$password = "";


//Create connection

$conn = mysqli_connect($serverName, $username, $password, $database_name);




// Check connection
if ($conn->connect_error)
 {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['save']))
{
  $Name=$_POST['Name'];
  $EMail=$_POST['EMail'];
  $Number=$_POST['Number'];
  $subject=$_POST['subject'];
  $Message=$_POST['MESSAGE'];

    $sql_query="INSERT INTO ClientContact(Time,Name,EMail,Number,subject,Message) VALUES (NOW(), '$Name','$EMail','$Number','$subject','$Message')";

  if (mysqli_query($conn,$sql_query))
 {
    echo"New Details is inserted Successfully!";
    header("Location: index.html");
  }
  else
  {
    echo"Error".mysqli_error($conn);
  }

  mysqli_close($conn);
}


?>
