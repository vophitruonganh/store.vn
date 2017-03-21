<div class="col-md-3">
  <div class="category leftbar"><h3 class="title">Nhóm sản phẩm</h3>

    <ul>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <li> <a href="<?php echo e(url('collection/category',$category->url)); ?>"><?php echo e($category->name); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


    </ul>
  </div>
  <div class="branch leftbar">
    <h3 class="title">Hãng Sản Xuất</h3>
    <ul>

    <?php $__currentLoopData = $trademarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <li> <a href="<?php echo e(url('collection/trademark',$trademark->url)); ?>"><?php echo e($trademark->name); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </ul>
  </div>
  <div class="price-filter leftbar">
    <h3 class="title">Price</h3>
    <form class="pricing">
      <label> $
        <input type="number"> </label> <span class="separate">
        -
      </span>
      <label> $
        <input type="number"> </label>
      <input type="submit" value="Go"> </form>
  </div>
  <div class="clolr-filter leftbar">
    <h3 class="title">
      Color
    </h3>
    <ul>
      <li> <a href="#" class="red-bg">light red</a> </li>
      <li> <a href="#" class=" yellow-bg">yellow"</a> </li>
      <li> <a href="#" class="black-bg ">black</a> </li>
      <li> <a href="#" class="pink-bg">pink</a> </li>
      <li> <a href="#" class="dkpink-bg">dkpink</a> </li>
      <li> <a href="#" class="chocolate-bg">chocolate</a> </li>
      <li> <a href="#" class="orange-bg">orange-bg</a> </li>
      <li> <a href="#" class="off-white-bg">off-white</a> </li>
      <li> <a href="#" class="extra-lightgreen-bg">extra-lightgreen</a> </li>
      <li> <a href="#" class="lightgreen-bg">lightgreen</a> </li>
      <li> <a href="#" class="biscuit-bg">biscuit</a> </li>
      <li> <a href="#" class="chocolatelight-bg">chocolatelight</a> </li>
    </ul>
  </div>
  <div class="product-tag leftbar">
    <h3 class="title">Products<strong>Tags</strong>
    <ul></a> </li></a> </li></a> </li></a> </li></a> </li></a> </li></a> </li>
      <li> <a href="#">PSD</a></li>
    </ul>
  </div>
  <div class="others leftbar">
    <h3 class="title">Others</h3></div>
  <div class="others leftbar">
    <h3 class="title">Others</h3></div>
  <div class="fbl-box leftbar">
    <h3 class="title">
      Facebook
    </h3> <span class="likebutton">
      <a href="#">
        <img src="images/fblike.png" alt="">
      </a>
    </span>
    <p> 12k people like Flat Shop. </p>
    <ul>
      <li><a href="#"> </a></li>
      <li><a href="#"> </a></li>
      <li><a href="#"> </a></li>
      <li><a href="#"> </a></li>
      <li><a href="#"> </a></li>
      <li><a href="#"> </a></li>
      <li><a href="#"> </a></li>
      <li><a href="#"> </a></li>
    </ul>
    <div class="fbplug">
      <a href="#"> <span>
          <img src="<?php echo e(asset('frontend/shop/images/fbicon.png')); ?>" alt="">
        </span> Facebook social plugin </a>
    </div>
  </div>
  <div class="leftbanner"> <img src="<?php echo e(asset('frontend/shop/images/banner-small-01.pn')); ?>g" alt=""> </div>
</div>
