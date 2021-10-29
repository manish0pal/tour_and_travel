<!DOCTYPE html>
<html lang="en">
<?php
include './head.php';
?>
<body>
<div class="site-wrapper overflow-hidden position-relative">
<?php
include './header.php';

?>
    
    <div class="hero-area-l5 screenshot-area-l-16" id="home">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-10">
                        <div class="section-heading-10 text-center">
                            <h2>Memory with us.</h2>
                            <p>Here is some pics of our guests.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="screenshot-slider-wrapper-l-16">
                <div class="screenshot-slider overflow-hidden">
<?php
 $slidersql="select * from slider ";
        
foreach ($conn->query($slidersql) as $row) {?>
                    <div class="single-slide focus-reset">
                        <div class="screenshot-image">
                            <img src="image/slider/<?php echo $row['image'];?>" alt="" />
                        </div>
                    </div>

                    <?php } ?>                 
                </div>
                <div class="phone-bg-img">
                    <img src="image/custom/iPhone-frame.png" alt="" />
                </div>
            </div>
            <div class="screenshots-dots-l-16"></div>
            
        </div>

        <div class="hero-shape-l12-1 d-none d-sm-block">
            <img src="image/custom/shape-1.png" alt="">
          </div>
          <div class="hero-shape-l12-2 d-none d-sm-block">
            <img src="image/custom/shape-3.png" alt="">
          </div>


          <?php
include './destetion.php';
include './hotels.php';
include './travel.php';
include './contact_us.php';
include './about_us.php';
include './footer.php';
?>
         
</div>    
</body>
</html>