<!DOCTYPE html>
<html lang="en" >
<head>


  <meta charset="utf-8">
  <title>Testimonials</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&display=swap");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;

}

img {
	max-width: 120%;
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
  margin:5px;
  color: #fff1eb;
  font-size: 3rem;
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
  font-size: 2.1rem;
  transition: all 0.3s;
  font-family: 'Poppins',sans-serif;
}

header nav ul li a.active, header nav ul li a:hover{
  color: #3079ed;
  font-size: 2.2rem;
  text-decoration: none;
}

body {
	position: flex;
	width:1348px;
	height:680px;
	font-family: 'Roboto Slab', serif;
	line-height: 1.67;
	color:#000000;
	background: rgb(255,255,255);
	background: linear-gradient(180deg, rgba(255,255,255,0.989233193277311) 0%, rgba(120,223,210,1) 92%)
}

.section-title {

	font-size: 28px;
 margin-bottom: 13px;
	padding-bottom: 30px;
	font-weight: 400;
	display: inline-block;
	position: relative;
}
.section-title:after,
.section-title:before {
	content: '';
	position: absolute;
	bottom: 0;
}
.section-title:after {
	height: 2px;
	background-color: rgba(252, 92, 15, 0.46);
	left: 25%;
	right: 25%;
}
h4{
	text-align: center;
	margin-top: -25px;
	font-size: 1.2rem;
}
.section-title:before {
	width: 15px;
	height: 15px;
	border: 3px solid #fff;
	background-color: #fc5c0f;
	left: 50%;
	transform: translatex(-50%);
	bottom: -6px;
	z-index: 9;
	border-radius: 50%;
}


.customer-feedback .owl-item img {
	width: 125px;
	height: 125px;
  margin-top: 50px;
}

.feedback-slider-item {
	position: relative;
	padding: 100px;
	margin-top: -80px;

}

.customer-name {
	margin-top: 15px;
	margin-bottom: 25px;
	font-size: 20px;
	font-weight: 500;
}

.feedback-slider-item p {
	line-height: 1.875;
  text-align: center;
  margin-top: 25px;
}

.customer-rating {
	background-color: #eee;
	border: 5px solid #fff;
	color: rgba(1, 1, 1, 0.702);
	font-weight: 700;
	border-radius: 80%;
	position: absolute;
	width: 70px;
	height: 70px;
	line-height: 68px;
	font-size: 30px;
  font-weight: bold;
	right: 3px;
	top: 105px;


	text-indent: -10px;
}


.customer-rating i {
	color: rgb(251, 90, 13);
	position: absolute;
	top: 15px;
	right: 3px;
	font-weight: 600;
	font-size: 20px;
}


.feedback-slider-item:after {
	content: '';
	position: absolute;
	left: 10px;
	right: 10px;
	bottom: 30px;
	top: 120px;
	background: rgb(255,255,255);
	background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(48,84,222,1) 100%);
	border: 1px solid rgba(251, 90, 13, .1);
	border-radius: 10px;
	z-index: -1;
}

.thumb-prev,
.thumb-next {
	position: absolute;
	z-index: 99;
	top: 25%;
	width: 118px;
	height: 118px;
	left: -180px;

	cursor: pointer;
	transition: all .3s;
}

.thumb-next {
	left: auto;
	right: -155px;
}

.feedback-slider-thumb img {
	width: 200%;
	height: 150%;
	border-radius: 1000%;
}

.feedback-slider-thumb:hover {
	opacity: .8;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.customer-feedback .owl-nav [class*="owl-"] {
	position: relative;
	display: inline-block;
	bottom: 25px;
	transition: all .2s ease-in;
}

.customer-feedback .owl-nav i {
	background-color: transparent;
	color: #000000;
	font-size: 40px;
}

.customer-feedback .owl-prev {
	left: -25px;
  top: -93px;
}

.customer-feedback .owl-prev:hover {
	left: -20px;
}

.customer-feedback .owl-next {
	right: -25px;
    top: -93px;

}

.customer-feedback .owl-next:hover {
	right: -20px;
}

/* DOTS */
.customer-feedback .owl-dots {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	bottom: 85px;
}
.customer-feedback .owl-dot {
	display: inline-block;
}

.customer-feedback .owl-dots .owl-dot span {
	width: 110px;
	height: 11px;
	margin: 0 5px;
	background: #fff;
	border: 1px solid rgb(251, 90, 13);
	display: block;
	-webkit-backface-visibility: visible;
	transition: all 200ms ease;
	border-radius: 50%;
}

.customer-feedback .owl-dots .owl-dot.active span {
	background-color: rgb(251, 90, 13);
}

/* RESPONSIVE */
@media screen and (max-width: 1000px) {
	.feedback-slider-item:after {
		left: 30px;
		right: 20px;
	}
	.customer-feedback .owl-nav [class*="owl-"] {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		margin-top: 45px;
		bottom: auto;
	}
	.customer-feedback .owl-prev {
		left: 0;
	}
	.customer-feedback .owl-next {
		right: 0;
	}

}
</style>
</head>
<body>
  <header>
    <nav>

      <h1 class="logotxt">The Event Factory</h1>
      <ul>
        <li><a href="index.html" >Home</a></li>
        <li><a href="ourbackground.html">About</a></li>
        <li><a href="wedding.html">Events</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="new.html">Career</a></li>
        <li><a href="displayblog.php">Blog</a></li>
        <li><a href="display.php">gallery</a></li>
        <li><a href="contactus.html">contact</a></li>
      </ul>
    </nav>
  </header>
<section>

	<div class="customer-feedback">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">
					<div>
						<h2 class="section-title">What Clients Say</h2>

					</div>
				</div>
			</div>
      <div class="row">
        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="owl-carousel feedback-slider">

              <?php
              $connection = mysqli_connect("localhost","root","");
              $db = mysqli_select_db($connection,'tef');

              $query = "SELECT * FROM `testdata` ";
              $query_run = mysqli_query($connection,$query);

              while($row = mysqli_fetch_array($query_run))
              {
                ?>

                 <div class="feedback-slider-item">
                 <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" class="center-block img-circle" width: "100px" height: "100px"; >';?>
                    <div class="customer-name"><?php echo $row['name']; ?></div>
                    <h4> <?php echo $row['event']; ?></h4>
                    <p><?php echo $row['testimonial']; ?></p>
                   	<span class="light-bg customer-rating"><?php echo $row['rating']; ?>
    		            <i class="fa fa-star"></i>
                  </span>
                </div>
                <?php
                  }
                   ?>




          <?php

          $query = "SELECT * FROM `testdata` ";
          $query_run = mysqli_query($connection,$query);

          while($row = mysqli_fetch_array($query_run))
          {
            ?>
              <div class="feedback-slider-item">
             <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" class="center-block img-circle" width: "100px" height: "100px"; >';?>
                <div class="customer-name"><?php echo $row['name']; ?></div>
                <h4> <?php echo $row['event']; ?></h4>
                <p><?php echo $row['testimonial']; ?></p>
                <span class="light-bg customer-rating"><?php echo $row['rating']; ?>
                <i class="fa fa-star"></i>
              </span>
            </div>
            <?php
              }
               ?>


        <?php
            $query = "SELECT * FROM `testdata` ";
        $query_run = mysqli_query($connection,$query);

        while($row = mysqli_fetch_array($query_run))
        {
          ?>
            <div class="feedback-slider-item">
           <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" class="center-block img-circle" width: "100px" height: "100px"; >';?>
              <div class="customer-name"><?php echo $row['name']; ?></div>
              <h4> <?php echo $row['event']; ?></h4>
              <p><?php echo $row['testimonial']; ?></p>
              <span class="light-bg customer-rating"><?php echo $row['rating']; ?>
              <i class="fa fa-star"></i>
              </span>
          </div>
          <?php
            }
             ?>


      <?php

      $query = "SELECT * FROM `testdata` ";
      $query_run = mysqli_query($connection,$query);

      while($row = mysqli_fetch_array($query_run))
      {
        ?>
          <div class="feedback-slider-item">
         <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" class="center-block img-circle" width: "100px" height: "100px"; >';?>
            <div class="customer-name"><?php echo $row['name']; ?></div>
            <h4> <?php echo $row['event']; ?></h4>
            <p><?php echo $row['testimonial']; ?></p>
            <span class="light-bg customer-rating"><?php echo $row['rating']; ?>
            <i class="fa fa-star"></i>
            </span>
          </div>
        <?php
          }
           ?>
       </div>
  <div class="feedback-slider-thumb hidden-xs">

      <?php
      $query = "SELECT * FROM `testdata` ";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_array($query_run))
      {
        ?>
        <div class="thumb-prev">
          <span>
          <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" class="center-block img-circle" width: "100px" height: "100px"; >';?>
          </span>


          </div>
           <?php
            }
            ?>



      <?php
      $db = mysqli_select_db($connection,'tef');
      $query = "SELECT * FROM `testdata` ";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_array($query_run))
      {
        ?>
          <div class="thumb-next">
        <span>
        <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" class="center-block img-circle" width: "100px"  height: "100px"; >';?>
        </span>


          </div>
        <?php
          }
           ?>

    </div>

				</div>
			</div>
		</div>
	</div>

</section>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script>
jQuery(document).ready(function($) {

	var feedbackSlider = $('.feedback-slider');
	feedbackSlider.owlCarousel({
		items: 1,
		nav: true,
		dots: true,
		autoplay: true,
		loop: true,
		mouseDrag: true,
		touchDrag: true,
		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
		responsive:{

			767:{
				nav: true,
				dots: false
			}
		}
	});

	feedbackSlider.on("translate.owl.carousel", function(){
		$(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
		$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
	});

	feedbackSlider.on("translated.owl.carousel", function(){
		$(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
		$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
	});
	feedbackSlider.on('changed.owl.carousel', function(property) {
		var current = property.item.index;
		var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
		var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
		var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
		var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
		$('.thumb-prev').find('img').attr('src', prevThumb);
		$('.thumb-next').find('img').attr('src', nextThumb);
		$('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
		$('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
	});
	$('.thumb-next').on('click', function() {
		feedbackSlider.trigger('next.owl.carousel', [300]);
		return false;
	});
	$('.thumb-prev').on('click', function() {
		feedbackSlider.trigger('prev.owl.carousel', [300]);
		return false;
	});

});
</script>
</body>
</html>
