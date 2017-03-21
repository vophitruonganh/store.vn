@extends('frontend.theme.shop.layouts.default')
@section('content')
   @include('frontend.theme.shop.includes.main_slide')
   <div class="clearfix"></div>
   <div class="container_fullwidth">
      <div class="container">
         <div class="hot-products">
            <h3 class="title"><strong>Product Hot</strong> </h3>
            <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
            <ul id="hot">
               <li>
                  <div class="row">
                  @foreach($products as $product)
                     <div class="col-md-3 col-sm-6">
                        <div class="products">
                           <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                             <input id="page_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
                             <input type="hidden" name="quantity" value="1" />
                              <div class="offer">- %10</div>
                              @foreach ($product->attachment as $attachment)
                              <div class="thumbnail">
                                 <a href="{{ url('collection',$product->id) }}">
                                    <img class="img-responsive" style="max-width: 150px;" src="{{url('images',$attachment->url)}}">
                                 </a>
                              </div>
                              @endforeach
                              <div class="productname"><a href="{{ url('collection',$product->id) }}">{{ $product->name }}</a></div>
                              <h4 class="price">{{ number_format($product->price) }} <span>đ</span></h4>
                              <div class="button_group"><button class="button add-cart" type="button" onclick="">Add To Cart</button></div>
                           </form>
                        </div>
                     </div>
                  @endforeach
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
                  @foreach ($products as $product)
                     @foreach ($product->discount as $discount)
                        @if ($discount->hot == true)
                        <div class="col-md-3 col-sm-6">
                        <div class="products">
                           <form action="" method="post" class="variants" id="" enctype="multipart/form-data">
                             <input id="page_token" type="hidden" name="_token" value="{{ csrf_token() }}" />
                             <input type="hidden" name="quantity" value="1" />
                              <div class="offer">20%</div>
                              @foreach ($product->attachment as $attachment)
                              <div class="thumbnail">
                                 <a href="{{ url('collection',$product->id) }}">
                                    <img class="img-responsive" style="max-width: 150px;" src="{{url('images',$attachment->url)}}">
                                 </a>
                              </div>
                              @endforeach
                              <div class="productname"></div>
                              <h4 class="price">28.999.999₫</h4>
                              <div class="button_group"><button class="button add-cart" type="button" onclick="">Add To Cart</button></div>
                           </form>
                        </div>
                     </div>
                        @endif
                     @endforeach
                  @endforeach
                  @for ($i = 1; $i <=8 ; $i++)

                  @endfor
                  </div>
               </li>
            </ul>
         </div>
         <!-- End featured product -->
@stop