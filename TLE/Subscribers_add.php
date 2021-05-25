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
  $Message=$_POST['Message'];
  $flag=1;
  $prequery= "SELECT EMail from Subscriptions where EMail='$EMail'";
  $result2 = mysqli_query($conn,$prequery);
  if((mysqli_num_rows($result2)==1) or (mysqli_num_rows($result2)>1)){
    echo'<script type="text/javascript"> alert("Hey, hold on, looks like you have already have subscribbed to our blog.") </script>';
    $flag=0;
  }

    $sql_query="INSERT INTO Subscriptions(Time,Name,EMail,Message) VALUES (NOW(), '$Name','$EMail','$Message')";
    if($flag==1){

      if (mysqli_query($conn,$sql_query))
     {
        echo"New Details is inserted Successfully!";
        header("Location: displayblog.php");
      }
      else
      {
        echo"Error".mysqli_error($conn);
      }



    }

  mysqli_close($conn);
}


?>
