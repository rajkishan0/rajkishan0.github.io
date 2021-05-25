<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../CSS/sub_career.css">

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
                                <span class="nav__name">Home Page</span>
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
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Modify</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Gallery</a>
                                        <a href="#" class="nav__dropdown-item">Testimonials</a>
                                        <a href="#" class="nav__dropdown-item">Blogs</a>
                                    </div>
                                </div>

                            </div>

                            <a href="Career_Admin.php" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">View Career<br> Applications</span>
                            </a>
                            <a href="Subscribe.php" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">View Subscribers <br> List</span>
                            </a>
                            <a href="Client_Admin" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Client Status</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="AdminLogin.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h1> Welcome, Admin! </h1>
                <p> Here are the client details collected from your website </p>

            </section>


            <div class="container">

            <form method='post' action='Download.php'>


            <table border='1' style='border-collapse:collapse;'>
                <tr>
                    <th>ID</th>
                    <th>Time </th>
                    <th>Name</th>
                    <th>EMail</th>
                    <th>Message</th>
                </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "tef");
            $start_date=$_POST['From'];
            $To_date=$_POST['To'];
            $query = "SELECT * FROM Subscriptions WHERE Time>= '$start_date' AND Time <= '$To_date' ";
            $result = mysqli_query($conn,$query);
            $user_arr = array();



            while($row = mysqli_fetch_array($result)){
                $ID =$row['ID'];
                $Time =$row['Time'];
                $Name =$row['Name'];
                $EMail =$row['EMail'];
                $Message =$row['Message'];
                $user_arr[] = array($ID, $Time, $Name, $EMail,$Message);
            ?>
                <tr>
                    <td><?php echo $ID; ?></td>
                    <td><?php echo $Time; ?></td>
                    <td><?php echo $Name; ?></td>
                    <td><?php echo $EMail; ?></td>
                    <td><?php echo $Message; ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <input  type='submit' value='Export' name='Export' class='btn'>
            <?php
            $serialize_user_arr = serialize($user_arr);
            ?>
            <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
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
