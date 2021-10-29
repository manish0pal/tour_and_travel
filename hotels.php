<!-- Hotel Area -->
<div class="testimonial-area-l2" id="hotels" style="background: rgba(250, 229, 218, 0.4);">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-8 col-md-8 pb-3" >
            <div class="section__heading">
              <h2>Hotels </h2>
            </div>
            <form  class="location-search-area__search-form">
              <div class="d-md-flex justify-content-between align-items-center">
                <div class="d-sm-flex">
                  <div class="location-search-area__dropdown">
                    <div class="location-heading">
                      <label>Locations</label>
                    </div>
                    <select name="country" id="country" class="nice-select focus-reset border-0">
                      <option data-display="Select your destinations">Select your destinations</option>
                      <?php
                      // dynamic
 $destinationsql="select * from destination";
        
foreach ($conn->query($destinationsql) as $row) {

                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                   
                   } ?>
                   </select>
                  </div>
                 
                  <div class="location-search-area__dropdown">
                    <div class="location-type">
                      <label>Rating</label>
                      </div>
                      <select name="rating" id="rating_number" class="nice-select focus-reset border-0" style="display: none;">
                        <option data-display="Select your Rating">Select your Rating</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                      </select>
                    
                
                  </div>
                </div>
                <div class="location-search-area__search-btn">
                  <button class="btn btn-style-03 btn--search">Find</button>
                </div>
              </div>
            </form> 
          </div>
        
          <div class="col-xl-5 col-lg-4 col-md-4" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
            <div class="l2-slider-arrow-1 text-end">
              <i class="prevl2  fas fa-angle-left slick-arrow slick-active"></i>
              <i class="nextl2 fas fa-angle-right slick-arrow"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="testimonial-slider-l2-1" id="hotels_grid">
           
           
            
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <template id="hotel_row">
      <div class="single-item focus-reset  pb-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
        <div class="">
          <div class="feature-job-box h-100">
            <div class="location d-flex align-items-center">
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="content">
                <span data-hlocation></span>
              </div>
             
            </div>
            <div class="image-box overflow-hidden image-hover-style-01 pb-2">
              <img class="w-100 skeleton" data-himg alt="hotel">
            </div>
            <h4 data-hname></h4>
            <p>Desc: <span data-hdesc></span></p>
            <div class="time-apply-area">
              <div class="d-xs-flex align-items-center justify-content-between">
                <div class="r">
                 
                  <div class="rating">
                    <i class="rating_color fas fa-star "></i>
                    <i class="fas fa-star rating_color"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
                <div class="apply-now-btn-fj">
                  <a href="#" class="btn btn-style-03 focus-reset">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

    <script>
    const hotel_row = document.getElementById('hotels_grid');
    const cardTemplatehotel = document.getElementById('hotel_row');


    fetch('http://localhost/tour/api/getWithImg.php?table_name=hotels')
    .then(res =>  res.json())
    .then(hoteldata =>{
        console.log("start")
        hoteldata.data.map((val,ind)=>{
            const div = cardTemplatehotel.content.cloneNode(true)
            div.querySelector('[data-hname]').textContent = val.name
            div.querySelector('[data-hlocation]').textContent = val.location
            div.querySelector('[data-hdesc]').textContent = val.description
            if( val.images[0]){
              div.querySelector('[data-himg]').src ="image/hotels/"+val.images[0].image;
            }
            hotel_row.append(div)
        });
    });
    </script>