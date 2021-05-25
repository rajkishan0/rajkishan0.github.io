<?php

session_start();

if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $username=$_POST['user'];
    $password=$_POST['pass'];
		$_SESSION['username'] = $username;


		$conn = mysqli_connect("localhost", "root", "", "tef") or die("Connection Error: " . mysqli_error($conn));

    $query=mysqli_query($conn, "SELECT * FROM adminlogin where adminname='$username' AND password='$password'");
		$numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $username=$row['username'];
    $password=$row['password'];
    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: adminpage.php");
    session_write_close();
    exit();
    }
    } else {


    echo '<script>alert("Invalid username or password")</script>';
    }

} else {
      echo '<script>alert("All fiields are required")</script>';
}
}
?>
<!doctype html>
<html>
<head>
<title>Login</title>
<style>
@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&display=swap");

html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background:#ace0f9;

}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form .button {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #000000;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 20px;
  margin-left: 100px;
  letter-spacing: 4px
}


.login-box .button span {
  position: absolute;
  display: block;
}




.logo
{
  height:80px;
  margin-left: 120px;
}
</style>
</head>
<body>

<div class="login-box">
  <img class="logo" src="../Images/TheEvent factoryNewLogo.png" alt="logo"  >
  <h2>Admin Login</h2>
  <form action="" method="POST">
    <div class="user-box">
      <input type="text" name="user" required><br />
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="pass" required><br />
      <label>Password</label>
    </div>
  <input type="submit" value="Login" name="submit" class="button" />
  </form>
</div>
</body>
</html>
