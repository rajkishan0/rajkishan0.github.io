<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../CSS/careercontact.css">

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
                <p> Here are the client details collected from your website

              <br>


              <br>
              Generate your leads  by filling the details below </p>

            </section>
            <div class="cen">
            <form method="post" action='Generate.php'>
                <label for="From" class="txt">From</label>
                <input type="date" id="From" name="From" data-date-format='yyyy-mm-dd'  id="selectdateadmin" required min="2010-10-01" max= <?php echo date('Y-m-d'); ?>><br>
                <label for="To" class="txt2" >To</label>
                <input type="date" id="To" name="To"  data-date-format='yyyy-mm-dd'  id="selectdateadmin" required min="2010-10-01" max= <?php echo date('Y-m-d'); ?>><br>
                <label for="type" class="txt3">Choose the query:</label>
                  <select id="subject" name="subject[]" class="dd" >
                      <option value="event" name="event" >Book An Event</option>
                      <option value="services" name="services">Book Services</option>
                      <option value="partner" name="partner">Partnership Venture</option>
                      <option value="other" name="other">Other Queries</option>
                      <option value="all" name="all"> All </option>
                  </select> <br>
                <input type="submit" class="btn" name="submit">
            </form>
          </div>

          <script>
            $('##selectdateadmin').datepicker({
              dateformat: 'yy-mm-dd';
          }))

          </script>




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
