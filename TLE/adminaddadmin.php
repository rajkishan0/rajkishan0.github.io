
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../CSS/careerprivilige.css">

        <title>Admin Module</title>
        <script>

        function validate()
        {
        var username = document.getElementById("username").value;
        var Password= document.getElementById("Password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;



        if(username.length < 3)
        {
          alert("Enter more than 3 characters for Username");
          return false;

        }
        if(Password.length < 3)
        {
          alert("Enter more than 3 characters for Password");
          return false;

        }

        var reg=/^[a-zA-Z0-9]+$/;
        if(reg.test(username)==false)
        {
          alert("User Name can have only Alphabets and Numbers");
          return false;

        }


        var charset = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+$/;
        if(charset.test(Password)==false)
        {
          alert("Password can have only Alphabets, Numbers and Special Characters");
          return false;
        }
        return true;
      }

        </script>

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
                <p> You can add new admins to your Website here </p>

            </section>


            <div class="cen">
            <form name="frmChange" method="post" onSubmit="return validate();">
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
                            <td colspan="2">Add New Admin</td>
                        </tr>
                        <tr>
                            <td width="40%"><label>Add User Name</label></td>
                            <td width="60%"><input type="txt"
                                name="username" class="txtField" required/><span
                                id="username"></span></td>
                        </tr>
                        <tr>
                            <td><label>Add  Password</label></td>
                            <td><input type="password" name="Password"
                                class="txtField" required/><span id="Password"
                                class="required" ></span></td>
                        </tr>
                        <td><label>Confirm Password</label></td>
                        <td><input type="password" name="confirmPassword"
                            class="txtField" required/><span id="confirmPassword"
                            class="required" ></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="submit"
                                value="Submit" class="btn" ></td>
                        </tr>
                    </table>

                </div>


            </form>
          </div>



          <?php
          if (isset($_POST['submit'])){



            $conn = mysqli_connect("localhost", "root", "", "tef");
            $username=$_REQUEST['username'];
            $password=$_REQUEST['Password'];
            $confirmPassword=$_REQUEST['confirmPassword'];
            $flag=1;




            if(strlen($username)<3 or strlen($username)>16)
            {
              echo'<script type="text/javascript"> alert("Username should be between 3 and 16 characters") </script>';
              $flag=0;
            }
            if(strlen($password)<3 AND $flag==1)
            {
              echo'<script type="text/javascript"> alert("Password should have minimum 3 characters") </script>';
              $flag=0;
            }
            if ($password != $confirmPassword AND $flag==1)
            {
              echo'<script type="text/javascript"> alert("Password are not matching") </script>';
              $flag=0;
            }

            $query2="SELECT adminname from adminlogin where adminname='$username'";
            $result2 = mysqli_query($conn,$query2);
            if((mysqli_num_rows($result2)==1) or (mysqli_num_rows($result2)>1)){
              echo'<script type="text/javascript"> alert("Admin with same username already exists") </script>';
              $flag=0;
            }

            if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username) and $flag=1)
              {

                  echo'<script type="text/javascript"> alert("Admin username cannot have special characters") </script>';
                $flag=0;
              }
              if (preg_match("/\s/", $password) and $flag=1)
               {
                 echo'<script type="text/javascript"> alert("Password cannot have space character") </script>';
               $flag=0;
              }

            if($flag==1)
            {
              $query= "INSERT INTO `adminlogin`(`adminname`, `password`) VALUES ('$username','$password')";
              if($result = mysqli_query($conn,$query)){
                  echo'<script type="text/javascript"> alert("Admin added") </script>';
              }
              else{
                  echo'<script type="text/javascript"> alert("Admin not added") </script>';
              }


            }

          }






          ?>


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
