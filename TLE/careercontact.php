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
  $Designation=$_POST['Designation'];

    $sql_query="INSERT INTO CareerContact(Time,Name,EMail,Number,Designation) VALUES (NOW(),'$Name','$EMail','$Number','$Designation')";

  if (mysqli_query($conn,$sql_query))
 {
    echo"New Details is inserted Successfully!";
    header("Location: new.html");
  }
  else
  {
    echo"Error".mysqli_error($conn);
  }

  mysqli_close($conn);
}


?>
