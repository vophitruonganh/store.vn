

<?php $__env->startSection('content'); ?>
  <div class="container_fullwidth">
    <div class="container">
      <div class="row">
	      <!-- sidebar -->
        <?php echo $__env->make('theme.shop.includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- end sidebar -->
      	<div class="col-md-9">
          <div class="banner">
            <div class="bannerslide" id="bannerslide">
              <ul class="slides">
                <li><a href="#"><img src="<?php echo e(asset('frontend/shop/images/banner-01.jpg')); ?>" alt=""/></a></li>
                <li><a href="#"><img src="<?php echo e(asset('frontend/shop/images/banner-02.jpg')); ?>" alt=""/></a></li>
              </ul>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="products-list">
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode">
                  <a href="#" class="list active">List</a>
                  <a href="" class="grid">Grid</a>
                </div>
                <div class="sort-by">
                  Sort by :
                  <select name="" >
                    <option value="Default" selected >Default</option>
                    <option value="Name">Name</option>
                    <option value="Price">Price</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12 text-right"><?php echo e($products->links()); ?></div>
            </div>
            <ul class="products-listItem">
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <li class="products">
                <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                   <input id="page_token" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                   <input type="hidden" name="quantity" value="1" />
                <div class="offer">Mới</div>
                <div class="thumbnail">
                  <?php $__currentLoopData = $product->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                  <a href="<?php echo e(url('collection',$product->id)); ?>"><img src="<?php echo e(url('images',$attachment->url)); ?>" alt="<?php echo e($product->name); ?>"></a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>
                <div class="product-list-description">
                  <div class="productname">
                   <a href="<?php echo e(url('collection',$product->id)); ?>"><?php echo e(strtoupper($product->name)); ?></a>
                  </div>
                  <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến trong những năm 1960 nhờ việc bán những bản giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn, được sử dụng trong các ứng dụng dàn trang, như Aldus PageMaker.</p>

                  <div class="list_bottom">
                    <div class="price">
                      <span class="new_price"><?php echo e(number_format($product->price)); ?><sup>đ</sup></span>
                    </div>
                    <div class="button_group">
                      <button class="button" onclick="">Add To Cart</button>
                      <button class="button compare"><i class="fa fa-exchange"></i></button>
                      <button class="button favorite"><i class="fa fa-heart-o"></i></button>
                    </div>
                  </div>
                </div>
                </form>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </ul>
            <div class="toolbar">
              <div class="sorter bottom">
                <div class="view-mode">
                  <a href="#" class="list active">List</a>
                  <a href="" class="grid">Grid</a>
                </div>
                <div class="sort-by">
                  Sort by :
                  <select name="" >
                    <option value="Default" selected>Default</option>
                    <option value="Name">Name</option>
                    <option value="Price">Price</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12 text-right"><?php echo e($products->links()); ?></div>
            </div>
          </div>
        </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.shop.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>