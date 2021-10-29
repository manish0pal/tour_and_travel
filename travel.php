 <!-- Travel Slider Area  -->
 <div class="product-area-l5  bg-athensgray" id="transport">
      <div class="container">
        <div class="border-area-l4"></div>
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-8">
            <div class="section__heading">
              <h2>Travel Booking <img class="vertical-move" src="image/landing-1/icon-3d-coin.svg" alt="image"></h2>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="l5-product-slider text-end">
              <i class="prev5-1  fas fa-arrow-left slick-arrow slick-active"></i>
              <i class="next5-1 fas fa-arrow-right slick-arrow"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
            <div class="product-slider-l5" id="cars_grid">


              
             
             
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <template id="cars_row">
      <div class="single-item focus-reset " data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <div class="testimonial-l2-single-card shadow_card">
          <div class="content">
            <div class="blog-image">
             <img class="w-100" data-cimg  alt="transport">
            </div>
          </div>
          <div class="user-identity d-xs-flex text-center text-xs-start justify-content-between align-items-center">
            
            <div class="user-details">
              <h4 data-cname></h4>
              <span data-cdesc></span>
              <span data-clocation></span>
            </div>
           
              <div class="header-btn sign-in-header-btn-1 ms-auto d-xs-inline-flex">
                <a target="_blank" class="btn download-trail-btn btn focus-reset" href="">
                  See Details
                </a>
            
            </div>
          </div>
        </div>
      </div>
    </template> 
<script>

const cars_row = document.getElementById('cars_grid');
    const cardTemplateCar = document.getElementById('cars_row');


    fetch('http://localhost/tour/api/getWithImg.php?table_name=car')
    .then(res =>  res.json())
    .then(cardata =>{
        console.log("start")
        cardata.data.map((val,ind)=>{
            const div = cardTemplateCar.content.cloneNode(true)
            div.querySelector('[data-cname]').textContent = val.name
            div.querySelector('[data-clocation]').textContent = val.location
            div.querySelector('[data-cdesc]').textContent = val.seats+" Seatrs"
            if( val.images[0]){
              div.querySelector('[data-cimg]').src ="image/transport/"+val.images[0].image;
            }
            cars_row.append(div)
        });
    });


  </script>