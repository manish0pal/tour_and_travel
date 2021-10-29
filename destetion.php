  <!-- Features  Area -->
  <div class="testimonial-area-l-12 " id="Locations">
       
       <div class="container position-relative">
         <div class="testimonial-border-area-l-12"></div>
       
         <div class="row">
           <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-12 ">
             <div class="section-heading-7">
               <h2>Featured Locations<img class="vertical-move" src="image/custom/icon-3d-heart.svg" alt="image"></h2>
             </div>
           </div>
           <div class="col-xxl-5 col-xl-4 col-lg-3 col-md-12">
             <div class="l-12-slider-arrow-1 text-end">
               <i class="prev9  icon icon-tail-left slick-arrow"></i>
               <i class="next9 icon icon-tail-right slick-arrow slick-active"></i>
             </div>
           </div>
         </div>
         <div class="row testimonial-items-l-12">
           <div class="col-12">
             <div class="testimonial-slider-l-12 " id="destenations">
             </div>
           </div>
         </div>
       </div>
     </div>


     
<template id="destenation_row">
<div class="single-item focus-reset" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                 <div class="card--testimonial-l-12 ">
                   <div class="testimonial-l-12-image">
                     <img class="w-100 skeleton" data-img >
                   </div>
                   <div class="testimonial-l-12-content">
                     <div class="d-flex justify-content-between align-items-center">
                       <div class="lecturer-identity">
                         <h6 data-title></h6>
                         <span data-desc></span>
                       </div>
                       <div class="video-area">
                         <a  href="">
                           <div class="d-inline-block video-icon d-inline-block">
                             <i class="fas fa-play align-center"></i>
                           </div>
                         </a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
</template>

     <script>
    const dest_row = document.getElementById('destenations');
    const cardTemplatedest = document.getElementById('destenation_row');


    fetch('http://localhost/tour/api/getWithImg.php?table_name=destination')
    .then(res =>  res.json())
    .then(destdata =>{
        console.log("start")
        
       
        destdata.data.map((val,ind)=>{
            const div = cardTemplatedest.content.cloneNode(true)
            div.querySelector('[data-title]').textContent = val.name
            div.querySelector('[data-desc]').textContent = val.description
            if( val.images[0]){
              div.querySelector('[data-img]').src ="image/destination/"+val.images[0].image;
            }
            dest_row.append(div)
        });
    });

   
</script>
