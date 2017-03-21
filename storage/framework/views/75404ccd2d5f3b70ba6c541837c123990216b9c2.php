
<?php $__env->startSection('content'); ?>
  <div class="page-index">
    <div class="container">
      <p>
        Products Details
      </p>
    </div>
  </div>
  </div>
  <div class="clearfix">
  </div>
  <div class="container_fullwidth">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="products-details">
            <div class="preview_image">
              <div class="preview-small">
              <?php $__currentLoopData = $product->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <img id="zoom_01" class="img-responsive center" src="<?php echo e(url('images',$attachment->url)); ?>" data-zoom-image="<?php echo e(url('images',$attachment->url)); ?>" alt="<?php echo e($product->name); ?>">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
              </div>
              <div class="thum-image">
                <ul id="gallery_01" class="prev-thum"><li><a href="" data-image="<?php echo e(url('images',$attachment->url)); ?>" data-zoom-image="<?php echo e(url('images',$attachment->url)); ?>"><img src="<?php echo e(url('images',$attachment->url)); ?>" alt="<?php echo e($product->name); ?>"></a></li></ul>
                <a class="control-left" id="thum-prev" href="javascript:void(0);">
                  <i class="fa fa-chevron-left">
                  </i>
                </a>
                <a class="control-right" id="thum-next" href="javascript:void(0);">
                  <i class="fa fa-chevron-right">
                  </i>
                </a>
              </div>
            </div>
            <div class="products-description">
              <h5 class="name"><?php echo e($product->name); ?></h5>
              <p>
                <div class="variant-name"></div>
                <input type="hidden" value="" id="">
                <select name="" id="">
                  <option value="">title</option>
                </select>
              </p>
              <p></p>

              <hr class="border">
              <div class="price">
                Price :
                <span class="new_price">
                  <?php echo e(number_format($product->price)); ?><sup>đ</sup>
                </span>
                <span class="old_price">
                  <?php echo e(number_format($product->price)); ?><sup>đ</sup>
                </span>
              </div>
              <hr class="border">
              
              <div class="clearfix">
              </div>
              <hr class="border">
              <img src="<?php echo e(asset('frontend/shop/images/share.png')); ?>" alt="" class="pull-right">
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="tab-box">
            <div id="tabnav">
              <ul>
                <li>
                  <a href="#Descraption">
                    DESCRIPTION
                  </a>
                </li>
                <li>
                  <a href="#Reviews">
                    REVIEW
                  </a>
                </li>
                <li>
                  <a href="#tags">
                    PRODUCT TAGS
                  </a>
                </li>
              </ul>
            </div>
            <div class="tab-content-wrap">
              <div class="tab-content" id="Descraption">
                <p>
                  Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibu um ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae...
                </p>
                <p>
                  Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibu um ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc...
                </p>
              </div>
              <div class="tab-content" id="Reviews">
                <form>
                  <table>
                    <thead>
                      <tr>
                        <th>&nbsp;</th>
                        <th>1 star</th>
                        <th>2 stars</th>
                        <th>3 stars</th>
                        <th>4 stars</th>
                        <th>5 stars</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quality</td>
                        <td><input type="radio" name="quality" value="Blue"/></td>
                        <td><input type="radio" name="quality" value=""></td>
                        <td><input type="radio" name="quality" value=""></td>
                        <td><input type="radio" name="quality" value=""></td>
                        <td><input type="radio" name="quality" value=""></td>
                      </tr>
                      <tr>
                        <td>Price</td>
                        <td><input type="radio" name="price" value=""></td>
                        <td><input type="radio" name="price" value=""></td>
                        <td><input type="radio" name="price" value=""></td>
                        <td><input type="radio" name="price" value=""></td>
                        <td><input type="radio" name="price" value=""></td>
                      </tr>
                      <tr>
                        <td>Value</td>
                        <td><input type="radio" name="value" value=""></td>
                        <td><input type="radio" name="value" value=""></td>
                        <td><input type="radio" name="value" value=""></td>
                        <td><input type="radio" name="value" value=""></td>
                        <td><input type="radio" name="value" value=""></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="form-row">
                        <label class="lebel-abs">Your Name<strong class="red">*</strong></label>
                        <input type="text" name="" class="input namefild">
                      </div>
                      <div class="form-row">
                        <label class="lebel-abs">Your Email<strong class="red">*</strong></label>
                        <input type="email" name="" class="input emailfild">
                      </div>
                      <div class="form-row">
                        <label class="lebel-abs">Summary of You Review<strong class="red">*</strong></label>
                        <input type="text" name="" class="input summeryfild">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-row">
                        <label class="lebel-abs">Your Name<strong class="red">*</strong></label>
                        <textarea class="input textareafild" name="" rows="7" >
                        </textarea>
                      </div>
                      <div class="form-row">
                        <input type="submit" value="Submit" class="button">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-content" >
                <div class="review">
                  <p class="rating">
                    <i class="fa fa-star light-red"></i>
                    <i class="fa fa-star light-red"></i>
                    <i class="fa fa-star light-red"></i>
                    <i class="fa fa-star-half-o gray"></i>
                    <i class="fa fa-star-o gray"></i>
                  </p>
                  <h5 class="reviewer">Reviewer name</h5>
                  <p class="review-date">Date: 01-01-2014</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.</p>
                </div>
                <div class="review">
                  <p class="rating">
                    <i class="fa fa-star light-red"></i>
                    <i class="fa fa-star light-red"></i>
                    <i class="fa fa-star light-red"></i>
                    <i class="fa fa-star-half-o gray"></i>
                    <i class="fa fa-star-o gray"></i>
                  </p>
                  <h5 class="reviewer">Reviewer name</h5>
                  <p class="review-date">Date: 01-01-2014</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.</p>
                </div>
              </div>
              <div class="tab-content" id="tags">
                <div class="tag">
                  Add Tags :
                  <input type="text" name="">
                  <input type="submit" value="Tag">
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div id="productsDetails" class="hot-products">
            <h3 class="title">
              <strong>
                Hot
              </strong>
              Products
            </h3>
            <div class="control">
              <a id="prev_hot" class="prev" href="#">&lt;</a>
              <a id="next_hot" class="next" href="#">&gt;</a>
            </div>
            <ul id="hot">
              <li>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">- %20</div>
                      <div class="thumbnail"><img src="<?php echo e(asset('frontend/shop/images/products/small/products-01.png')); ?>" alt="Product Name"></div>
                      <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                      <h4 class="price">$451.00</h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">Add To Cart</button>
                        <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                        <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="thumbnail"><img src="<?php echo e(asset('frontend/shop/images/products/small/products-02.png')); ?>" alt="Product Name"></div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <img src="<?php echo e(asset('frontend/shop/images/products/small/products-03.png')); ?>" alt="Product Name">
                      </div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        - %20
                      </div>
                      <div class="thumbnail">
                        <img src="images/products/small/products-01.png" alt="Product Name">
                      </div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="thumbnail">
                        <img src="images/products/small/products-02.png" alt="Product Name">
                      </div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <img src="images/products/small/products-03.png" alt="Product Name">
                      </div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        - %20
                      </div>
                      <div class="thumbnail">
                        <img src="images/products/small/products-01.png" alt="Product Name">
                      </div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="thumbnail">
                        <img src="images/products/small/products-02.png" alt="Product Name">
                      </div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <img src="images/products/small/products-03.png" alt="Product Name">
                      </div>
                      <div class="productname">
                        Iphone 5s Gold 32 Gb 2013
                      </div>
                      <h4 class="price">
                        $451.00
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Add To Cart
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="clearfix">
          </div>
        </div>
        <div class="col-md-3">
          <div class="special-deal leftbar">
            <h4 class="title">Special<strong>Deals</strong></h4>
            <div class="special-item">
              <div class="product-image">
                <a href="#">
                  <img src="<?php echo e(asset('frontend/shop/images/products/thum/products-01.png')); ?>" alt="">
                </a>
              </div>
              <div class="product-info">
                <p>
                  Licoln Corner Unit
                </p>
                <h5 class="price">
                  $300.00
                </h5>
              </div>
            </div>
            <div class="special-item">
              <div class="product-image">
                <a href="#">
                  <img src="<?php echo e(asset('frontend/shop/images/products/thum/products-02.png')); ?>" alt="">
                </a>
              </div>
              <div class="product-info">
                <p>
                  Licoln Corner Unit
                </p>
                <h5 class="price">
                  $300.00
                </h5>
              </div>
            </div>
            <div class="special-item">
              <div class="product-image">
                <a href="#">
                  <img src="<?php echo e(asset('frontend/shop/images/products/thum/products-03.png')); ?>" alt="">
                </a>
              </div>
              <div class="product-info">
                <p>
                  Licoln Corner Unit
                </p>
                <h5 class="price">
                  $300.00
                </h5>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="product-tag leftbar">
            <h3 class="title">
              Products
              <strong>
                Tags
              </strong>
            </h3>
            <ul>
              <li><a href="#">Lincoln us</a></li>
              <li><a href="#">SDress for Girl</a></li>
              <li><a href="#">Corner</a></li>
              <li><a href="#">Window</a></li>
              <li><a href="#">PG</a></li>
              <li><a href="#">Oscar</a></li>
              <li><a href="#">Bath room</a></li>
              <li><a href="#">PSD</a></li>
            </ul>
          </div>
          <div class="clearfix">
          </div>
          <div class="get-newsletter leftbar">
            <h3 class="title">Get<strong>newsletter</strong></h3>
            <p>Casio G Shock Digital Dial Black.</p>
            <form>
              <input class="email" type="text" name="" placeholder="Your Email...">
              <input class="submit" type="submit" value="Submit">
            </form>
          </div>
          <div class="clearfix">
          </div>
          <div class="fbl-box leftbar">
            <h3 class="title">Facebook</h3>
            <span class="likebutton">
              <a href="#"><img src="<?php echo e(asset('frontend/shop/images/fblike.png')); ?>" alt=""></a>
            </span>
            <p>12k people like Flat Shop.</p>
            <ul>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
            <div class="fbplug">
              <a href="#">
                <span>
                  <img src="<?php echo e(asset('frontend/shop/images/fbicon.png')); ?>" alt="">
                </span>
                Facebook social plugin
              </a>
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.shop.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>