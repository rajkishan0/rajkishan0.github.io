<?php

$conn = mysqli_connect("localhost", "root", "", "tef") or die("Connection Error: " . mysqli_error($conn));
if(isset($_POST["submit"])){

  $username=$_POST["username"];
  $password=$_REQUEST["currentPassword"];
  $flag=1;
  if(strlen($_POST["currentPassword"])<3) {
    $message="password should be between 3 and 10 chracters";
    $flag=0;
  }
  if(strlen($_POST["currentPassword"])>10) {
    $message="password should be between 3 and 10 chracters";
    $flag=0;
  }


  if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from adminlogin WHERE adminname='" . $username . "'");
    $row = mysqli_fetch_array($result);


      if ($_POST["currentPassword"] == $row["password"])  {
        mysqli_query($conn, "UPDATE adminlogin set password='" . $_POST["newPassword"] . "' WHERE adminname='" . $username . "'");
        $message = "Password Changed";
      }
      else{
        $message = "Current Password is not correct";
      }






}



}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../CSS/careerprivilige.css">

        <title>Admin Module</title>


    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="../Images/TheEvent factoryNewLogo.png" alt="" class="header__img">

                <a href="#" class="header__logo">The Event Factory</a>


                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>

                            <a href="adminpage.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Dashboard</span>
                            </a>

                            <div class="nav__dropdown">
                                <a href="adminmodifypass.php" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profiles</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">

                                        <a href="adminmodifypass.php" class="nav__dropdown-item">Modify Password</a>
                                        <a href="adminaddadmin.php" class="nav__dropdown-item">Add Admin</a>

                                    </div>
                                </div>
                            </div>

                            <a href="Client_Admin.php" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">View Client Leads</span>
                            </a>
                        </div>

                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>

                            <div class="nav__dropdown">
                                <a href="upload.php" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Modify</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="upload.php" class="nav__dropdown-item">Gallery</a>
                                        <a href="testdata.php" class="nav__dropdown-item">Testimonials</a>
                                        <a href="createblog.php" class="nav__dropdown-item">Blogs</a>
                                    </div>
                                </div>

                            </div>

                            <a href="Career_Admin.php" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">View Career<br> Applications</span>
                            </a>

                            <a href="Subscribe.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">View Subscribers</span>
                            </a>
                            <a href="AdminLogin.php" class="nav__link nav__logout">
                                <i class='bx bx-log-out nav__icon' ></i>
                                <span class="nav__name">Log Out</span>
                            </a>
                        </div>
                    </div>
                </div>


            </nav>
        </div>


        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h1> Welcome, Admin! </h1>
                <p> You can modify the password to your account here. </p>

            </section>


            <div class="cen">
            <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
                <div style="width: 500px;">
                  <div class="message">
                    <?php


                      if(isset($message))
                       { echo $message; }
                    ?>
                  </div>

                    <table border="0" cellpadding="10" cellspacing="0"
                        width="500" align="center" class="tblSaveForm">
                        <tr class="tableheader">
                            <td colspan="2">Change Password</td>
                        </tr>
                        <tr>
                            <td width="40%"><label>Current Username</label></td>
                            <td width="60%"><input type="text"
                                name="username" class="txtField" /><span
                                id="username" class="required"></span></td>
                        </tr>
                        <tr>
                            <td width="40%"><label>Current Password</label></td>
                            <td width="60%"><input type="password"
                                name="currentPassword" class="txtField" /><span
                                id="currentPassword" class="required"></span></td>
                        </tr>
                        <tr>
                            <td><label>New Password</label></td>
                            <td><input type="password" name="newPassword"
                                class="txtField" /><span id="newPassword"
                                class="required"></span></td>
                        </tr>
                        <td><label>Confirm Password</label></td>
                        <td><input type="password" name="confirmPassword"
                            class="txtField" /><span id="confirmPassword"
                            class="required"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="submit"
                                value="Submit" class="btn" ></td>
                        </tr>
                    </table>

                </div>
            </form>
          </div>


          </main>

        <!--========== MAIN JS ==========-->
        <script>

        const showMenu = (headerToggle, navbarId) =>{
            const toggleBtn = document.getElementById(headerToggle),
            nav = document.getElementById(navbarId)
            // Validate that variables exist
            if(headerToggle && navbarId){
                toggleBtn.addEventListener('click', ()=>{
                    // We add the show-menu class to the div tag with the nav__menu class
                    nav.classList.toggle('show-menu')
                    // change icon
                    toggleBtn.classList.toggle('bx-x')
                })
            }
        }
        showMenu('header-toggle','navbar')
        /*==================== LINK ACTIVE ====================*/
        const linkColor = document.querySelectorAll('.nav__link')
        function colorLink(){
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        </script>
    </body>
</html>
