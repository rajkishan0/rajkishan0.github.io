    <html lang="en">
    <head>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../CSS/testdata.css">

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
                <p> You can add or modify the testimonials on your Website here </p>

            </section>

            <center>
            <form action="" method="POST" enctype="multipart/form-data">

            <label> Choose Photo </label><br>
            <input type="file" name="image" id="image" accept="image/*" class="img"required/><br>

            <label> Enter Name </label><br>
            <input type="varchar" name="name" placeholder="Enter Client Name"  maxlength="50"/><br>

            <label> Enter Event </label><br>
            <input type="varchar" name="event" placeholder="Category of Event" maxlength="50" /><br>

            <label> Enter Testimonial </label><br>
            <input type="text" name="testimonial" id= "test" placeholder="Content/Testimonial" maxlength="500" /><br>

            <label> Give Ratings </label><br>
            <input type="int" name="rating" placeholder="Enter Ratings out of 10" /><br>

            <input type="submit" name="upload" value="UPLOAD DATA AND IMAGE" /><br>
            <input type="submit" name="update" value="UPDATE DATA" /><br>
            <input type="submit" name="delete" value="DELETE DATA" /><br>
            </form>
            </center>

            <?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tef');

if(isset($_POST['upload']))
{
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $name = $_POST['name'];
  $event = $_POST['event'];
  $testimonial = $_POST['testimonial'];
  $rating=$_POST['rating'];

  $data = $_POST;
  if(empty($data['name']) ||
     empty($data['event']) ||
     empty($data['testimonial']) ||
     empty($data['rating'])) {
     die('Please fill all required fields!');

}

if(($rating>10) || ($rating<0))
 { echo'<script type="text/javascript"> alert("Please enter rating value between 0 and 10") </script>'; die();}

  $query = "INSERT INTO `testdata`(`image`,`name`,`event`,`testimonial`,`rating`) VALUES ('$file','$name','$event','$testimonial','$rating')";
  $query_run = mysqli_query($connection,$query);

   if($query_run)
   {
     echo'<script type="text/javascript"> alert("Profile Uploaded") </script>';
   }
   else
     {
        echo'<script type="text/javascript"> alert("Profile Not Uploaded") </script>';
   }
}
if(isset($_POST['update']))
{

  $name = $_POST['name'];
  $event = $_POST['event'];
  $testimonial = $_POST['testimonial'];
  $rating=$_POST['rating'];


  $data = $_POST;
  if(empty($data['name']) ||
     empty($data['event']) ||
     empty($data['testimonial']) ||
     empty($data['rating'])) {

     die('Please fill all required fields!');
  }

  $query = "UPDATE `testdata` SET name='$_POST[name]',event='$_POST[event]',testimonial='$_POST[testimonial]',rating='$_POST[rating]' where name='$_POST[name]'";
  $query = "UPDATE `testdata` SET name='$_POST[name]',event='$_POST[event]',testimonial='$_POST[testimonial]',rating='$_POST[rating]' where event='$_POST[event]'";
  $query = "UPDATE `testdata` SET name='$_POST[name]',event='$_POST[event]',testimonial='$_POST[testimonial]',rating='$_POST[rating]' where testimonial='$_POST[testimonial]'";
  $query = "UPDATE `testdata` SET name='$_POST[name]',event='$_POST[event]',testimonial='$_POST[testimonial]',rating='$_POST[rating]' where rating='$_POST[rating]'";

  $query_run = mysqli_query($connection,$query);

   if(($query_run))
   {
     echo'<script type="text/javascript"> alert("Data Updated") </script>';
   }
   else
     {
        echo'<script type="text/javascript"> alert("Data Not Updated") </script>';
   }
 }

 if(isset($_POST['delete']))
 {
   $name = $_POST['name'];
   $event = $_POST['event'];
   $testimonial = $_POST['testimonial'];
   $rating=$_POST['rating'];

   $data = $_POST;
   if(empty($data['name']) ||
      empty($data['event']) ||
      empty($data['testimonial']) ||
      empty($data['rating'])) {

      die('Please fill all required fields!');
   }
       $query = "DELETE FROM `testdata` WHERE name='$name' ";
       $query = "DELETE FROM `testdata` WHERE event='$event' ";
       $query = "DELETE FROM `testdata` WHERE testimonial='$testimonial' ";
       $query = "DELETE FROM `testdata` WHERE rating='$rating' ";
       $query_run = mysqli_query($connection,$query);

    if($query_run)
    {

       echo'<script type="text/javascript"> alert("Data Deleted") </script>';
    }
    else

      {
         echo'<script type="text/javascript"> alert("Data Not Deleted") </script>';
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
