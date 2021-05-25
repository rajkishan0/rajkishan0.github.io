
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->


        <title>Gallery Admin</title>
    </head>
    <style>
    /*========== GOOGLE FONTS ==========*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

    /*========== VARIABLES CSS ==========*/
    :root {
      --header-height: 3.5rem;
      --nav-width: 219px;

      /*========== Colors ==========*/
      --first-color: #6923D0;
      --first-color-light: #F4F0FA;
      --title-color: #19181B;
      --text-color: #58555E;
      --text-color-light: #A5A1AA;
      --body-color: #F9F6FD;
      --container-color: #FFFFFF;

      /*========== Font and typography ==========*/
      --body-font: 'Poppins', sans-serif;
      --normal-font-size: .938rem;
      --small-font-size: .75rem;
      --smaller-font-size: .75rem;

      /*========== Font weight ==========*/
      --font-medium: 500;
      --font-semi-bold: 600;

      /*========== z index ==========*/
      --z-fixed: 100;
    }

    @media screen and (min-width: 1024px) {
      :root {
        --normal-font-size: 1rem;
        --small-font-size: .875rem;
        --smaller-font-size: .813rem;
      }
    }

    /*========== BASE ==========*/
    *, ::before, ::after {
      box-sizing: border-box;
    }

    body {
      margin: var(--header-height) 0 0 0;
      padding: 1rem 1rem 0;
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      background-color: var(--body-color);
      color: var(--text-color);
    }

    h3 {
      margin: 0;
    }

    a {
      text-decoration: none;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    /*========== HEADER ==========*/
    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: var(--container-color);
      box-shadow: 0 1px 0 rgba(22, 8, 43, 0.1);
      padding: 0 1rem;
      z-index: var(--z-fixed);
    }

    .header__container {
      display: flex;
      align-items: center;
      height: var(--header-height);
      justify-content: space-between;
    }

    .header__img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }

    .header__logo {
      color: var(--title-color);
      font-weight: var(--font-medium);
      display: none;

    }

    .header__search {
      display: flex;
      padding: .40rem .75rem;
      background-color: var(--first-color-light);
      border-radius: .25rem;
    }

    .header__input {
      width: 100%;
      border: none;
      outline: none;
      background-color: var(--first-color-light);
    }

    .header__input::placeholder {
      font-family: var(--body-font);
      color: var(--text-color);
    }

    .header__icon,
    .header__toggle {
      font-size: 1.2rem;
    }

    .header__toggle {
      color: var(--title-color);
      cursor: pointer;
    }

    /*========== NAV ==========*/
    .nav {
      position: fixed;
      top: 0;
      left: -100%;
      height: 100vh;
      padding: 1rem 1rem 0;
      background-color: var(--container-color);
      box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
      z-index: var(--z-fixed);
      transition: .4s;
    }

    .nav__container {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding-bottom: 3rem;
      overflow: auto;
      scrollbar-width: none; /* For mozilla */
    }

    /* For Google Chrome and others */
    .nav__container::-webkit-scrollbar {
      display: none;
    }

    .nav__logo {
      font-weight: var(--font-semi-bold);
      margin-bottom: 2.5rem;
    }

    .nav__list,
    .nav__items {
      display: grid;
    }

    .nav__list {
      row-gap: 2.5rem;
    }

    .nav__items {
      row-gap: 1.5rem;
    }

    .nav__subtitle {
      font-size: var(--normal-font-size);
      text-transform: uppercase;
      letter-spacing: .1rem;
      color: var(--text-color-light);
    }

    .nav__link {
      display: flex;
      align-items: center;
      color: var(--text-color);
    }

    .nav__link:hover {
      color: var(--first-color);
    }

    .nav__icon {
      font-size: 1.2rem;
      margin-right: .5rem;
    }

    .nav__name {
      font-size: var(--small-font-size);
      font-weight: var(--font-medium);
      white-space: nowrap;
    }

    .nav__logout {
      margin-top: 5rem;
    }

    /* Dropdown */
    .nav__dropdown {
      overflow: hidden;
      max-height: 21px;
      transition: .4s ease-in-out;
    }

    .nav__dropdown-collapse {
      background-color: var(--first-color-light);
      border-radius: .25rem;
      margin-top: 1rem;
    }

    .nav__dropdown-content {
      display: grid;
      row-gap: .5rem;
      padding: .75rem 2.5rem .75rem 1.8rem;
    }

    .nav__dropdown-item {
      font-size: var(--smaller-font-size);
      font-weight: var(--font-medium);
      color: var(--text-color);
    }

    .nav__dropdown-item:hover {
      color: var(--first-color);
    }
    .nav__dropdown-icon {
  margin-left: auto;
  transition: .4s;
  }

  /* Show dropdown collapse */
  .nav__dropdown:hover {
  max-height: 100rem;
  }

  /* Rotate icon arrow */
  .nav__dropdown:hover .nav__dropdown-icon {
  transform: rotate(180deg);
  }

  /*===== Show menu =====*/
  .show-menu {
  left: 0;
  }

  /*===== Active link =====*/
  .active {
  color: var(--first-color);
  }

  /* ========== MEDIA QUERIES ==========*/
  /* For small devices reduce search*/
  @media screen and (max-width: 320px) {
  .header__search {
    width: 70%;
  }
  }

  @media screen and (min-width: 768px) {
  body {
    padding: 1rem 3rem 0 6rem;
  }
  .header {
    padding: 0 3rem 0 6rem;
  }
  .header__container {
    height: calc(var(--header-height) + .5rem);
  }
  .header__search {
    width: 300px;
    padding: .55rem .75rem;
  }
  .header__toggle {
    display: none;
  }
  .header__logo {
    display: block;
  }
  .header__img {
    width: 40px;
    height: 40px;
    order: 1;
  }
  .nav {
    left: 0;
    padding: 1.2rem 1.5rem 0;
    width: 68px; /* Reduced navbar */
  }
  .nav__items {
    row-gap: 1.7rem;
  }
  .nav__icon {
    font-size: 1.3rem;
  }

  /* Element opacity */
  .nav__logo-name,
  .nav__name,
  .nav__subtitle,
  .nav__dropdown-icon {
    opacity: 0;
    transition: .3s;
  }


  /* Navbar expanded */
  .nav:hover {
    width: var(--nav-width);
  }

  /* Visible elements */
  .nav:hover .nav__logo-name {
    opacity: 1;
  }
  .nav:hover .nav__subtitle {
    opacity: 1;
  }
  .nav:hover .nav__name {
    opacity: 1;
  }
  .nav:hover .nav__dropdown-icon {
    opacity: 1;
  }
  }

  main{
    margin-left:300px;
  }


  input{
  display:inline-block;
  text-transform:uppercase;
  border:2px solid;
  align-items: center;
  color:#6923D0;
  padding: 10px;
  margin-bottom: 10px;


  }


  input:hover{
  color:#000000;
  }

  select{
  display:inline-block;
  padding:5px 15px;
  text-transform:uppercase;
  border:2px solid;
  align-items: center;
  color:#6923D0;
  margin-bottom: 10px;



  }




  .button{
  width:150px;
  margin-top: 20px;
  margin-left: 230px;

  }

  .delbutton{
    width:150px;
    margin-top: 20px;

  }
  .mid{
  margin-left: 300px;
  }
  h1{
  margin-left: 150px;
  }
  #image{

  width:300px;
  height: 40px;
  }
  .options
  {
  width: 300px;
  height: 40px;
  margin-left:55px;
  }

  .img{
    margin-left:25px;
  }

  P{
  text-align: center;
  }
    </style>
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

            <br><br>
              <h1> Gallery Admin</h1>
              <br>

              <form action="" method="POST" enctype="multipart/form-data">
                <label>Choose image to upload:</label>
                <input type="file" name="picture" id="image" accept="image/*"  class="img" required /><br>

                <label>Select the event type:</label>
                    <select name="event" class="options">
                      <option >Weddings</option>
                      <option >Engagements</option>
                      <option >Birthday parties</option>
                      <option >College Events</option>
                      <option >Corporate Event</option>
                    </select> <br>

                <input class="button" type="submit" name="upload" value="upload image" />
                <input class="delbutton" type="submit" name="delete" value="delete image" /><br>
              </form>


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

<?php
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,'tef');

if(isset($_POST['upload']))
{
 $file=addslashes(file_get_contents($_FILES["picture"]["tmp_name"]));
 $event=$_POST['event'];

 $query="INSERT INTO gallery(picture,event) VALUES ('$file','$event')";
 $query_run= mysqli_query($connection,$query);

 if($query_run)
 {
   echo'<script type="text/javascript">alert("Image Uploaded")</script>';
 }
 else {
     echo'<script type="text/javascript">alert("Image Not Uploaded")</script>';
   }

}

if(isset($_POST['delete']))
 {
   $file=addslashes(file_get_contents($_FILES["picture"]["tmp_name"]));
   $event = $_POST['event'];


    $query = "DELETE FROM gallery WHERE event='$event' ";
    $query = "DELETE FROM gallery WHERE picture='$file' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {

       echo'<script type="text/javascript"> alert("Image Deleted") </script>';
    }
    else
      {
         echo'<script type="text/javascript"> alert("Image Not Deleted") </script>';
    }
  }
?>
