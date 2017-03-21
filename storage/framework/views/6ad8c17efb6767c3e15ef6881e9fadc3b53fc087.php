<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('frontend.theme.shop.includes.main_slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <div class="clearfix"></div>
   <div class="container_fullwidth">
      <div class="container">
         <div class="hot-products">
            <h3 class="title"><strong>Product Hot</strong> </h3>
            <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
            <ul id="hot">
               <li>
                  <div class="row">
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                     <div class="col-md-3 col-sm-6">
                        <div class="products">
                           <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                             <input id="page_token" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                             <input type="hidden" name="quantity" value="1" />
                              <div class="offer">- %10</div>
                              <?php $__currentLoopData = $product->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <div class="thumbnail">
                                 <a href="<?php echo e(url('collection',$product->id)); ?>">
                                    <img class="img-responsive" style="max-width: 150px;" src="<?php echo e(url('images',$attachment->url)); ?>">
                                 </a>
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                              <div class="productname"><a href="<?php echo e(url('collection',$product->id)); ?>"><?php echo e($product->name); ?></a></div>
                              <h4 class="price"><?php echo e(number_format($product->price)); ?> <span>đ</span></h4>
                              <div class="button_group"><button class="button add-cart" type="button" onclick="">Add To Cart</button></div>
                           </form>
                        </div>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </div>
               </li>
            </ul>
         </div>

         <!-- End hot product -->
         <!-- Featured product -->
         <div class="featured-products">
            <h3 class="title"><strong>Feature</strong> </h3>
            <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
            <ul id="featured">
               <li>
                  <div class="row">
                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                     <?php $__currentLoopData = $product->discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <?php if($discount->hot == true): ?>
                        <div class="col-md-3 col-sm-6">
                        <div class="products">
                           <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                             <input id="page_token" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                             <input type="hidden" name="quantity" value="1" />
                              <div class="offer">20%</div>
                              <?php $__currentLoopData = $product->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <div class="thumbnail">
                                 <a href="<?php echo e(url('collection',$product->id)); ?>">
                                    <img class="img-responsive" style="max-width: 150px;" src="<?php echo e(url('images',$attachment->url)); ?>">
                                 </a>
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                              <div class="productname"></div>
                              <h4 class="price">28.999.999₫</h4>
                              <div class="button_group"><button class="button add-cart" type="button" onclick="">Add To Cart</button></div>
                           </form>
                        </div>
                     </div>
                        <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  <?php for($i = 1; $i <=8 ; $i++): ?>

                  <?php endfor; ?>
                  </div>
               </li>
            </ul>
         </div>
         <!-- End featured product -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.theme.shop.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>