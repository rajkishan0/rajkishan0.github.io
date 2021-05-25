
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../CSS/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../CSS/font-awesome-4.7.0/css/font-awesome.css">



</head>
<body>
  <style>

  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");



  body {
    margin:0;
    padding: 0;
    line-height: 1.5;
    font-family: "montserrat";
    background-color: #8EC5FC;
  background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

  }

  .

  .content {
    background-color:rgba(255,255,255,.8);
    border-radius:.25em;
    box-shadow:0 0 .25em rgba(0,0,0,.25);
    box-sizing:border-box;
    left:50%;
    padding:10vmin;
    position:fixed;
    text-align:center;
    top:50%;
    transform:translate(-50%, -50%);
  }



   .text{
     color: black;
     text-align: center;
     text-transform: uppercase;
     margin: 350px 0;
     font-size: 22px;
   }
  .item-inner{

  background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);

   }




   *{
     box-sizing: border-box;
     margin: 0;
   }
   h1{
     font-family: 'Poppins',sans-serif;
   }
   header{
     width: 100%;height:auto;
     background-image: linear-gradient(rgba(0,0,0,0.7),
                         rgba(0,0,0,0.7)),
                         url('headerbg.jpg');
     background-size: 100%;
     background-position: center;
     background-repeat: no-repeat;

   }

   header nav{
     display: flex;
     justify-content: space-between;
     align-items: center;
     padding: 15px;
     background-color: rgba(0,0,0,0.7);
   }

   header nav .logotxt{
     text-transform: uppercase;
     color: #3079ed;
     float:left;
     margin:1px;
     color: #fff1eb;
     font-size: 1.8rem;
     padding: 18px;

   }

   header nav ul{
     display: flex; list-style: none;
   }

   header nav ul li{ margin-left: 30px; }

   header nav ul li a{
     text-decoration: none;
     text-transform: capitalize;
     color: #fff;
     font-size: 1.3rem;
     transition: all 0.3s;
     font-family: 'Poppins',sans-serif;
   }

   header nav ul li a.active, header nav ul li a:hover{
     text-decoration: none;
     color: #3079ed;
     font-size: 1.4rem;
   }

   .container{
     max-width: 1170px;
     margin: auto;
    border-width: thick;

   }
   .row{
     display: flex;
     flex-wrap: wrap;

   }
  .section-title{
    flex:0 0 100%;
    max-width: 100%;
    margin-bottom: 60px;
  }
  .section-title h1{
    text-align: center;
    font-size: 46px;
    color:#000000;
      font-family: 'Poppins', sans-serif;
  }
   .services{
     min-height: 200vh;
     padding:80px 0;
   }

  .services .service-items{
    flex:0 0 100%;
    max-width: 100%;
  }
  .services .service-items .item{
    flex:0 0 33.33%;
    max-width: 33.33%;
    padding: 15px;
  }


.services .service-items .item-inner{
    border:5px solid #000000;
    padding: 30px;

  }
  .services .service-items .read-more-cont{
    display: none;
  }
  .services .service-items .item-inner h3{
    font-size: 18px;
    color:#000000;
    margin-bottom: 30px;
    position: relative;
    font-weight: bold;

  }
  .services .service-items .item-inner h3::before{
    content: '';
    height: 2px;
    width: 80px;
    background-color: #000000;
    position: absolute;
    left:0;
    bottom:-20px;
  }
  .services .service-items .item-inner p{
    text-align: justify;
  }
  P{
    font-family: 'Poppins', sans-serif;
    text-align: center;
    padding-left: 5px;
    padding-right: 5px;
  }

  .services .service-items .item-inner p:hover{
    color:#e25822;
  }

  .btn{
    border: 3px solid #000000;
    background: white;
    padding: 10px 20px;
    font-size: 20px;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    margin: 10px;

    position: relative;
    overflow: hidden;
    margin-left: 70px;

}
  .popup-box{
    position: fixed;
    height: 100%;
    width: 100%;
    left: 0;
    top:0;
    background-color: rgba(0,0,0,0.5);
    z-index: 500;
    visibility: hidden;
    opacity:0;
    transition: all 0.5s ease-in-out;
  }
  .popup-box.open{
    visibility: visible;
    opacity:1;
  }
  .popup-box .popup-content{
background-color: #E1EFF2;
    width: 1200px;
    height:600px;
    position: absolute;
    left: 50%;
    top:50%;
    transform: translate(-50%,-50%);
    border-radius: 8px;
      font-family: 'Poppins', sans-serif;
  }

  .popup-box .popup-header{
    padding: 15px 30px 15px 15px;

    text-align: center;
  }
  .popup-box .popup-header h3{
    margin:0;
    color:#000000;
    font-size: 30px;
      font-family: 'Poppins', sans-serif;
  }
  .popup-box .popup-header .popup-close-icon{
    position: absolute;
      height: 30px;
      width: 30px;
      text-align: center;
      color: #E91E63;
      font-size: 48px;
      line-height: 30px;
      right: 15px;
      top: 15px;
      cursor: pointer;
  }
  .popup-box .popup-body{
    padding: 15px;
    max-height: 500px;
    overflow-y: auto;
  }
  .popup-box .popup-body img{
    width: 90%;
    height: 50%;
    display: block;
    margin-left: 20px;
    margin-bottom: 30px;
  }
  .popup-box .popup-body p{
    font-size: 23px;
    color:#000000;
    margin:0 0 15px;
    margin-left: 18px;
      font-family: 'Poppins', sans-serif;
      text-align: justify;


  }
  .popup-box .popup-footer{
    padding: 10px;
  text-align: center;
  margin-top: 50px;

  }
  .popup-box .popup-footer .btn{

    padding: 5px 25px;
    margin-top: 18px;
    border:2px solid #000000;
    color:#fff;
    font-size: 16px;
    background-color: #000000;
    cursor: pointer;
    border-radius: 4px;
  }
  .popup-box .popup-footer .btn:focus{
    outline: none;

  }

  /*responsive*/

  @media(max-width: 767px){
    .services .service-items .item{
      flex:0 0 100%;
        max-width: 100%;
     }
     .popup-box .popup-content{
        width: calc(100% - 30px);
     }
  }
  .sidebar-contact{
  position:fixed;
  top:50%;
  left:-350px;
  transform:translateY(-50%);
  width:350px;
  height:auto;
  padding:40px;
  background:#fff;
  box-shadow: 0 20px 50px rgba(0,0,0,.5);
  box-sizing:border-box;
  transition:0.5s;
}
.sidebar-contact.active{
  left:0;
}
.sidebar-contact input,
.sidebar-contact textarea{
  width:100%;
  height:36px;
  padding:5px;
  margin-bottom:10px;
  box-sizing:border-box;
  border:1px solid rgba(0,0,0,.5);
  outline:none;
}
.sidebar-contact h2{
  margin:0 0 20px;
  padding:0;
}
.sidebar-contact textarea{
  height:60px;
  resize:none;
}
.sidebar-contact input[type="submit"]{
  background:#00bcd4;
  color:#fff;
  cursor:pointer;
  border:none;
  font-size:18px;
}
.toggle{
  position:absolute;
  height:48px;
  width:48px;
  text-align:center;
  cursor:pointer;
  background:#f00;
  top:0;
  right:-48px;
  line-height:48px;
}
.toggle:before{
  content:'\f003';
  font-family:fontAwesome;
  font-size:18px;
  color:#fff;
}
.toggle.active:before{
  content:'\f00d';
}

  </style>
  <header>
  <nav>


<h1 class="logotxt">The Event Factory</h1>
<ul>
  <li><a href="index.html" >Home</a></li>
  <li><a href="ourbackground.html" >About</a></li>
  <li><a href="wedding.html">Events</a></li>
  <li><a href="services.html">Services</a></li>
  <li><a href="new.html">Career</a></li>
  <li><a href="displayblog.php" class="active">Blog</a></li>
  <li><a href="display.php">gallery</a></li>
  <li><a href="contactus.html">contact</a></li>
</ul>
  </nav>
</header>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
 <section class="services">
    <div class="container">
       <div class="row">
           <div class="section-title">
              <h1>Latest Blogs</h1>
           </div>
       </div>

       <div class="row">
          <div class="service-items">
            <div class="row">

                 <!-- item start -->


                      <?php
                      $connection = mysqli_connect("localhost","root","");
                      $db = mysqli_select_db($connection,'tef');

                      $query = "SELECT * FROM post ";
                      $query_run = mysqli_query($connection,$query);

                      while($row = mysqli_fetch_array($query_run))
                      {
                        ?>
                         <div class="item">

                     <div class="item-inner">
                       <h3 style="height:50px; white-space:wrap; overflow:hidden; text-align: justify; text-overflow:inherit; margin-left: 10px; font-family: 'Poppins', sans-serif;" > <?php echo $row['title']; ?> </h3>
                         <p style="width:250px; height:100px; white-space:wrap; overflow:hidden;margin-left: 25px;text-overflow:inherit; "><?php echo $row['body']; ?> </p>
                     <button class="btn">Read More</button>
                       <div class="read-more-cont">

                       <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 1120px; height: 900px; " >';?>
                         <p> <?php echo $row['body']; ?> </p>

                       </div>
                     </div>
                   </div>
                       <?php
                     }
                     ?>

                 <!-- eitem end -->
               </div>
       </div>
    </div>

 </section>

  <!-- read more popup box start -->
   <div class="popup-box">
      <div class="popup-content">
          <div class="popup-header">
             <h3></h3>
             <span class="popup-close-icon">&times;</span>
          </div>
          <div class="popup-body">

          </div>
          <div class="popup-footer">
            <button class="btn popup-close-btn">Close</button>
          </div>
      </div>
   </div>
  <!-- read more popup box end -->

  <div class="sidebar-contact">
    <div class="toggle"></div>
    <h2>Subscribe our newsletter!</h2>
    <div class="scroll">
    <form method="POST" name="Clients Contact" onsubmit = "return validate();" action="Subscribers_add.php">
      <input type="text" name="Name" id="Name" placeholder="Name" required>
      <input type="email" name="EMail" id="EMail" placeholder="Email" required>
      <input type="text" name="Message" id="Message" placeholder="Anything you would like to tell us"maxlength="150">
      <input type="submit" name="save" value="send">
    </form>
    </div>
  </div>


<script>

  const serviceItems = document.querySelector(".service-items");
  const popup = document.querySelector(".popup-box")
  const popupCloseBtn = popup.querySelector(".popup-close-btn");
  const popupCloseIcon = popup.querySelector(".popup-close-icon");

  serviceItems.addEventListener("click",function(event){
    if(event.target.tagName.toLowerCase() == "button"){
       const item =event.target.parentElement;
       const h3 = item.querySelector("h3").innerHTML;
       const readMoreCont = item.querySelector(".read-more-cont").innerHTML;
       popup.querySelector("h3").innerHTML = h3;
       popup.querySelector(".popup-body").innerHTML = readMoreCont;
       popupBox();
    }

  })

  popupCloseBtn.addEventListener("click", popupBox);
  popupCloseIcon.addEventListener("click", popupBox);

  popup.addEventListener("click", function(event){
     if(event.target == popup){
        popupBox();
     }
  })

  function popupBox(){
    popup.classList.toggle("open");
  }
  $(document).ready(function(){
  $('.toggle').click(function(){
    $('.sidebar-contact').toggleClass('active')
    $('.toggle').toggleClass('active')
  })
})

function validate()
{
var name = document.getElementById("Name").value;
var email = document.getElementById("EMail").value;
var message = document.getElementById("Message").value;




if(name.length < 3)
{
  alert("Please Enter valid Name") ;
  return false;

}
var reg=/^[A-Za-z-. ]+$/
if(reg.test(name)==false)
{

  alert("Kindly check your name again");
  return false;

}


if(email.indexOf("@") == -1 || email.length < 6){
  alert("Please Enter Valid Email ID") ;
  return false;
}
var mailformat = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
if(mailformat.test(email)==false)
{
  alert("Please Enter valid Email");
  return false;
}

alert("We have added you to our Subscribers list, Have fun reading!");
return true;
}

</script>



</body>
</html>
