
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../CSS/blogcreate.css">

        <title>Admin Module</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


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

             <!-- Admin Page Wrapper -->
           <div class="admin-wrapper">
                 <!-- Admin Content -->
           <div class="admin-content">
           <div class="content">
                 <h2 class="page-title">Add Posts</h2>
           <form action="" method="POST" enctype="multipart/form-data">
           <div>
           <label> Title </label><br>
           <input type="text" name="title" placeholder="Enter Title" maxlength="25"/><br>
           </div>
           <div>
           <label> Body </label><br>
             <textarea name="body" id="body" placeholder="Enter Body" style="width:80%;" maxlength="10000"/></textarea> <br>

           </div>
           <div>
           <label>Image</label><br>
                 <input type="file" name="image"  accept="image/*" class="img"required/><br>
           </div>
           <div>
           <input type="submit" name="upload" value="UPLOAD" /><br>
           <input type="submit" name="update" value="UPDATE DATA" /><br>
           <input type="submit" name="delete" value="DELETE DATA" /><br>
           </div>
           </form>
           </div>
           </div>
                 <!-- // Admin Content -->
            </div>
                 <!-- JQuery -->
             <script
                 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <!-- Ckeditor -->
             <script
                 src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
             <!-- Custom Script -->
             <script src="script.js"></script>
           </center>
         </body>
     </html>

     <?php
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,'tef');

     if(isset($_POST['upload']))

     {

       $title = $_POST['title'];
       $body = $_POST['body'];
       $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));

       $data = $_POST;


       if(empty($data['title']) ||
          empty($data['body'])){

         die("Please fill all required fields!");
       }

       $query = "INSERT INTO post(title,body,image) VALUES ('$title','$body','$file')";
       $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
          echo'<script type="text/javascript"> alert("Blog Uploaded") </script>';
        }
        else
          {
             echo'<script type="text/javascript"> alert("Blog Not Uploaded") </script>';
        }
     }
     if(isset($_POST['update']))
     {

       $title = $_POST['title'];

       $query = "UPDATE post SET title='$_POST[title]',body='$_POST[body]' where title='$_POST[title]'";
       $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
          echo'<script type="text/javascript"> alert("Data Updated") </script>';
        }
        else
          {
             echo'<script type="text/javascript"> alert("Data Not Updated") </script>';
        }
      }
      if(isset($_POST['delete']))
      {   $title = $_POST['title'];

         $query = "DELETE FROM post WHERE title='$title' ";
         $query_run = mysqli_query($connection,$query);

         if($query_run)
         {
          echo'<script type="text/javascript"> alert("Data  Deleted") </script>';


     }
         else
           {
              echo'<script type="text/javascript"> alert("Data Not Deleted") </script>';
         }
       }

     ?>


            </section>


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
