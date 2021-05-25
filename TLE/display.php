

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&display=swap");
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
::selection{
  color: #fff;
  background: #007bff;
}
body{
position: relative;
align-items: center;
font-family: 'Poppins', sans-serif;
 justify-content: center;
  min-height: 300vh;
  animation: expand .8s ease forwards;
  background: linear-gradient(90deg, hsla(141, 54%, 86%, 1) 0%, hsla(333, 73%, 85%, 1) 50%, hsla(211, 58%, 79%, 1) 100%);
}

.wrapper{
  max-width: 2000px;
}
.gallery{
  position: relative;
  display: flex;
  flex-wrap: wrap;
}
.gallery .image{

  padding: 10px;

  width: calc(100% /4);

}
.gallery .image span{
  display: flex;
  width: 100%;
  overflow: hidden;

}
.gallery .image img{
  width: 100%;
  vertical-align: middle;
  transition: all 0.8s ease;
  height:300px;
  width:300px;
  margin-left: 10px;
  border: 1px solid #000000;

}
.gallery .image:hover img{
  transform: scale(0.9);
}

.preview-box{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.9);
  background: #fff;
  max-width: 700px;
  width: 100%;
  z-index: 5;
  opacity: 0;
  pointer-events: none;
  border-radius: 2px;
  padding: 0 2px 2px 2px;
  box-shadow: 0px 0px 15px rgba(0,0,0,0.2);

}
.preview-box.show{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
  transition: all 0.8s ease;

}
.preview-box .details{
  display: flex;
  align-items: center;
  padding: 12px 15px 12px 10px;
  justify-content: space-between;

}
.preview-box .details .title{
  display: flex;
  font-size: 10px;
  font-weight: 400;
}
.details .title p{
  margin: 0 5px;
}
.details .title p.current-img{
  font-weight: 500;
}
.details .icon{
  color: #007bff;
  font-size: 20px;
  cursor: pointer;
}
.preview-box .image-box{
  display: flex;
  width: 100%;
  position: relative;
  height:500px;
}
.image-box .slide{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  color: #fff;
  font-size: 30px;
  cursor: pointer;
  height: 50px;
  width: 60px;
  line-height: 50px;
  text-align: center;
  border-radius: 3px;
}
.slide.prev{
  left: 0px;
  background-color: #ffffff;
}
.slide.next{
  right: 0px;
  background-color: #ffffff;
}
.image-box img{
  width: 100%;
  border-radius: 0 0 3px 3px;

}
.shadow{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
  display: none;
  background: rgba(0,0,0,0.45);
}

@media(max-width: 1000px)
{
  .gallery .image
  {
    width: calc(100% / 2);
  }
}

@media(max-width: 600px)
{
  .gallery .image
  {
    width: 100%;
    padding: 4px;
  }
}



.gallery .image span{
  display: flex;
  width: 100%;
  overflow: hidden;

}


.top{
  text-align: center;
  font-size: 50px;
  font-family: 'Poppins', sans-serif;


}

.events{
  font-size: 30px;
  padding-left: 40px;
  padding-bottom: 15px;
  font-family: 'Poppins', sans-serif;
  text-align: center;
  margin-right: 33px;



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
  padding: 10px;
  background-color: rgba(0,0,0,0.7);
}

header nav .logotxt{
  text-transform: uppercase;
  color: #3079ed;
  float:left;
  margin:5px;
  color: #fff1eb;
  font-size: 1.8rem;
  padding: 15px;

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
  color: #3079ed;
  font-size: 1.4rem;
}

</style>
</head>
<header>
    <nav>

      <h1 class="logotxt">The Event Factory</h1>
      <ul>
        <li><a href="index.html" >Home</a></li>
        <li><a href="ourbackground.html"  >About</a></li>
        <li><a href="wedding.html">Events</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="new.html">Career</a></li>
        <li><a href="displayblog.php">Blog</a></li>
        <li><a href="display.php" class="active">gallery</a></li>
        <li><a href="contactus.html">contact</a></li>
      </ul>
    </nav>
  </header>
  <br><br>
<body>
  <p class="top">GALLERY</p><br><br>
  <p class="events"> Weddings<p>
  <div class="wrapper">
    <div class="gallery">


      <?php
      $connection=mysqli_connect("localhost","root","") ;
      $db=mysqli_select_db($connection,'tef');

      $query="SELECT * FROM `gallery` WHERE event='Weddings' ";
      $query_run=mysqli_query($connection,$query);

      while($row=mysqli_fetch_array($query_run))
      {
        ?>
        <div class="image">

              <span>
            <?php echo '<img src="data:image;base64,'.base64_encode($row['picture']).' " alt="Weddings"  >'; ?>

</span>
</div>


        <?php
      }

      ?>


    </div>
  </div><br><br>

  <p class="events">Engagements<p>
  <div class="wrapper">
    <div class="gallery">


      <?php
      $connection=mysqli_connect("localhost","root","") ;
      $db=mysqli_select_db($connection,'tef');

      $query="SELECT * FROM `gallery` WHERE event='Engagements' ";
      $query_run=mysqli_query($connection,$query);

      while($row=mysqli_fetch_array($query_run))
      {
        ?>
        <div class="image">

              <span>
          <?php echo '<img src="data:image;base64,'.base64_encode($row['picture']).' " alt="Engagements"  >'; ?>
</span>
</div>


        <?php
      }

      ?>


    </div>
  </div><br><br>

  <p class="events"> Birthday Parties</p>
  <div class="wrapper">
    <div class="gallery">



             <?php
             $connection=mysqli_connect("localhost","root","") ;
             $db=mysqli_select_db($connection,'tef');

             $query="SELECT * FROM `gallery` WHERE event='Birthday Parties' ";
             $query_run=mysqli_query($connection,$query);

             while($row=mysqli_fetch_array($query_run))
             {
               ?>
               <div class="image">

                     <span>
                 <?php echo '<img src="data:image;base64,'.base64_encode($row['picture']).' " alt="Birthday Parties"  >'; ?>
               </span>
             </div>


               <?php
             }

             ?>
              </div>
            </div><br><br>
  <p class="events"> Corporate Events</p>
  <div class="wrapper">
    <div class="gallery">

       <?php
       $connection=mysqli_connect("localhost","root","") ;
       $db=mysqli_select_db($connection,'tef');

       $query="SELECT * FROM `gallery` WHERE event='Corporate Event' ";
       $query_run=mysqli_query($connection,$query);

       while($row=mysqli_fetch_array($query_run))
       {
         ?>
         <div class="image">

               <span>
           <?php echo '<img src="data:image;base64,'.base64_encode($row['picture']).' " alt="Corporate Events" >'; ?>
</span>
</div>


         <?php
       }

       ?>


    </div>
  </div>
<br><br>
  <p class="events"> College Events</p>
  <div class="wrapper">
    <div class="gallery">

      <?php
      $connection=mysqli_connect("localhost","root","") ;
      $db=mysqli_select_db($connection,'tef');

      $query="SELECT * FROM `gallery` WHERE event='College Events' ";
      $query_run=mysqli_query($connection,$query);

      while($row=mysqli_fetch_array($query_run))
      {
        ?>
        <div class="image">

              <span>
          <?php echo '<img src="data:image;base64,'.base64_encode($row['picture']).' " alt="College Events" >'; ?>
     </span>
     </div>


        <?php
      }

      ?>


    </div>
  </div>
<br><br>
  <div class="preview-box">
    <div class="details">
      <span class="title"> <p class="current-img"></p> /<p class="total-img"></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box">
      <div class="slide prev" style=" color:#000000;"><i class="fas fa-angle-left"></i></div>
      <div class="slide next" style=" color:#000000;"><i class="fas fa-angle-right"></i></div>
      <img src="" alt="">
    </div>
  </div>
  <div class="shadow"></div>

<script>
//getting all required elements
const gallery  = document.querySelectorAll(".image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
shadow = document.querySelector(".shadow");

window.onload = ()=>{
    for (let i = 0; i < gallery.length; i++) {
        totalImg.textContent = gallery.length; //passing total img length to totalImg variable
        let newIndex = i; //passing i value to newIndex variable
        let clickedImgIndex; //creating new variable

        gallery[i].onclick = () =>{
            clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)
            function preview(){
                currentImg.textContent = newIndex + 1; //passing current img index to currentImg varible with adding +1
                let imageURL = gallery[newIndex].querySelector("img").src; //getting user clicked img url
                previewImg.src = imageURL; //passing user clicked img url in previewImg src
            }
            preview(); //calling above function

            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            if(newIndex == 0){ //if index value is equal to 0 then hide prevBtn
                prevBtn.style.display = "none";
            }
            if(newIndex >= gallery.length - 1){ //if index value is greater and equal to gallery length by -1 then hide nextBtn
                nextBtn.style.display = "none";
            }
            prevBtn.onclick = ()=>{
                newIndex--; //decrement index
                if(newIndex == 0){
                    preview();
                    prevBtn.style.display = "none";
                }else{
                    preview();
                    nextBtn.style.display = "block";
                }
            }
            nextBtn.onclick = ()=>{
                newIndex++; //increment index
                if(newIndex >= gallery.length - 1){
                    preview();
                    nextBtn.style.display = "none";
                }else{
                    preview();
                    prevBtn.style.display = "block";
                }
            }
            document.querySelector("body").style.overflow = "hidden";
            previewBox.classList.add("show");
            shadow.style.display = "block";
            closeIcon.onclick = ()=>{
                newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
                prevBtn.style.display = "block";
                nextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                document.querySelector("body").style.overflow = "scroll";
            }
        }

    }

}

</script>



</body>
</html>
