<?php
 $connect = mysqli_connect("localhost", "root", "", "tef");
 $now= new DateTime();
 $m=$now->format('m');
 $query = "SELECT subject, count(*) as number FROM ClientContact WHERE MONTH(Time) = '$m' GROUP BY subject";
 $result = mysqli_query($connect, $query);
 $query2 = "SELECT Designation, count(*) as number FROM CareerContact WHERE MONTH(Time) = '$m' GROUP BY Designation";
 $result2=mysqli_query($connect, $query2);

	$errors = "";


	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($connect, $sql);
			header('location: adminpage.php');
		}
	}
  if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($connect, "DELETE FROM tasks WHERE id=".$id);
	header('location: adminpage.php');
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
        <link rel="stylesheet" href="../CSS/adminpage.css">

        <title>Admin Module</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">

          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawClientChart);
          google.charts.setOnLoadCallback(drawCareerChart);
          google.charts.setOnLoadCallback(drawSubscribeChart);

          function drawClientChart() {

            var data = google.visualization.arrayToDataTable([
                      ['subject', 'Number'],
                      <?php
                      while($row = mysqli_fetch_array($result))
                      {
                           echo "['".$row["subject"]."', ".$row["number"]."],";
                      }
                      ?>
                 ]);
            var options = {
                  title: 'Percentage of Client Details Collected for this month',
                  //is3D:true,
                  pieHole: 0.4
                 };
            var chart = new google.visualization.PieChart(document.getElementById('ClientChart'));
            chart.draw(data, options);

          }


          function drawCareerChart() {

            // Create the data table for Anthony's pizza.
            var data = google.visualization.arrayToDataTable([
                      ['Designation', 'Number'],
                      <?php
                      while($row = mysqli_fetch_array($result2))
                      {
                           echo "['".$row["Designation"]."', ".$row["number"]."],";
                      }
                      ?>
                 ]);


            var options = {title:'Ratio of Career Applications collected for this month',
                           pieHole:0.4

                         };


            var chart = new google.visualization.PieChart(document.getElementById('CareerChart'));
            chart.draw(data, options);
          }





        </script>

    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="../Images/TheEvent factoryNewLogo.png" alt="" class="header__img">

                <a href="adminpage.php" class="header__logo">The Event Factory</a>


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
              <div class="heading">
		              <h2>ToDo List </h2>
	               </div>
                 <?php if (isset($errors)) { ?>
    	              <p style="text-align:center; color:red;"><?php echo $errors; ?></p>
                  <?php } ?>
              <form method="post" action="adminpage.php" class="input_form">
		              <input type="text" name="task" class="task_input">
		                <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	           </form>
             <table>
	              <thead>
		                <tr>
			                   <th>ID</th>
			                      <th>Tasks</th>
			                         <th style="width: 60px;">Action</th>
		               </tr>
	             </thead>

	              <tbody>
		                <?php
		                  // select all tasks if page is visited or refreshed
		                    $tasks = mysqli_query($connect, "SELECT * FROM tasks");

		                      $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			                         <tr>
				                             <td> <?php echo $i; ?> </td>
				                                 <td class="task"> <?php echo $row['task']; ?> </td>
				                                     <td class="delete">
					                                          <a href="adminpage.php?del_task=<?php echo $row['id'] ?>">x</a>
				                                    </td>
			                         </tr>
		                             <?php $i++; } ?>
	            </tbody>
            </table>

           <table class="columns" >
             <tr>
               <td>
                 <iframe src="https://calendar.google.com/calendar/embed?height=250&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKolkata&amp;src=NnZzanZha3FnNGc0MWRnMmptbWs0MXUydHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23AD1457"

                 style="border:solid 1px #777" width="350" height="240" frameborder="0" scrolling="no"></iframe>


               </td>
               <td><div  class="chart" id="ClientChart" style="width:350px; height: 250px; margin:30px;" ></div></td>
               <td><div class="chart"  id="CareerChart" style="width:350px; height: 250px; margin:30px;"></div></td>

             </tr>
           </table>







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
