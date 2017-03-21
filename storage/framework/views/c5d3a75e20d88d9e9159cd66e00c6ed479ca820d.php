<div class="hom-slider">
   <div class="container">
      <div id="sequence">
         <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
         <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
         <ul class="sequence-canvas">
            <?php for($i = 1; $i <=3 ; $i++): ?>
            <li class="animate-in">
               <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead"></span></div>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h1></h1>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">

               </div>
               <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
               <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="<?php echo e(asset('frontend/shop/images/slider-image-0'.$i.'.png')); ?>" alt=""></div>
            </li>
            <?php endfor; ?>

         </ul>
      </div>

   </div>
   <div class="promotion-banner">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="promo-box"><img src="<?php echo e(asset('frontend/shop/images/promotion-01.png')); ?>" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="promo-box"><img src="<?php echo e(asset('frontend/shop/images/promotion-02.png')); ?>" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="promo-box"><img src="<?php echo e(asset('frontend/shop/images/promotion-03.png')); ?>" alt=""></div>
            </div>
         </div>
      </div>
   </div>
</div>