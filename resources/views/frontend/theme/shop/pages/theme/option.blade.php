@php
  $slider = isset($optionValue['slider']) ? $optionValue['slider']: [];
@endphp

@extends('backend.layouts.default')
@section('titlePage','Theme Option')
@section('content')
<form action="{{ url('admin/template/option') }}" method="post">
  @include('backend.includes.token')
  <div class="theme">

      <!-- Slider1 -->
        <div id="slider" data-plugin="upload">
            <div>
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="true" aria-controls="collapse">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
               </a>
              <strong>Slider:</strong>
            </div>
            <div id ="collapse" class = "panel-collapse collapse">
              @php $i = 0; @endphp
                    <div class="block" id="collapse">
                       @foreach( $slider as $row )
                       <div class="row form-group" data-id="{{ $i }}">
                          <div>Image: <input type="text" class="form-control" name="slider[{{ $i }}][image]" value="{{ $row['image'] }}" /></div>
                          <span class="input-group-btn">
                          <span class="fileUpload btn btn-primary">
                          <span>Upload</span>
                          <input type="file" name="file" class="upload" />
                          </span>
                          </span>
                          <div>Url: <input type="text" name="slider[{{ $i }}][url]" value="{{ $row['url'] }}" /></div>
                          <div>Caption 1: <input type="text" name="slider[{{ $i }}][caption_1]" value="{{ $row['caption_1'] }}" /></div>
                          <div>Caption 2: <input type="text" name="slider[{{ $i }}][caption_2]" value="{{ $row['caption_2'] }}" /></div>
                          <div>Caption 3: <input type="text" name="slider[{{ $i }}][caption_3]" value="{{ $row['caption_3'] }}" /></div>
                          @if( $i > 0 ) <a class="remove" href="javascript:;">Remove</a> @endif
                       </div>
                       <br/>
                       @php $i++; @endphp
                       @endforeach
                    </div>

              <div class="resultetc"></div>
                    <a class="addRow" href="#">Add new image</a>
            </div>
        </div>

         <br/>
      <!-- End slider -->
      <!-- Slider2 -->
        <div id="slider" data-plugin="upload">
            <div>
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="true" aria-controls="collapse">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
               </a>
              <strong>Slider:</strong>
            </div>
            <div id ="collapse" class = "panel-collapse collapse">
              @php $i = 0; @endphp
                    <div class="block" id="collapse">
                       @foreach( $slider as $row )
                       <div class="row form-group" data-id="{{ $i }}">
                          <div>Image: <input type="text" class="form-control" name="slider[{{ $i }}][image]" value="{{ $row['image'] }}" /></div>
                          <span class="input-group-btn">
                          <span class="fileUpload btn btn-primary">
                          <span>Upload</span>
                          <input type="file" name="file" class="upload" />
                          </span>
                          </span>
                          <div>Url: <input type="text" name="slider[{{ $i }}][url]" value="{{ $row['url'] }}" /></div>
                          <div>Caption 1: <input type="text" name="slider[{{ $i }}][caption_1]" value="{{ $row['caption_1'] }}" /></div>
                          <div>Caption 2: <input type="text" name="slider[{{ $i }}][caption_2]" value="{{ $row['caption_2'] }}" /></div>
                          <div>Caption 3: <input type="text" name="slider[{{ $i }}][caption_3]" value="{{ $row['caption_3'] }}" /></div>
                          @if( $i > 0 ) <a class="remove" href="javascript:;">Remove</a> @endif
                       </div>
                       <br/>
                       @php $i++; @endphp
                       @endforeach
                    </div>

              <div class="resultetc"></div>
                    <a class="addRow" href="#">Add new image</a>
            </div>
        </div>

         <br/>
      <!-- End slider -->

        <!-- promotion_banner -->
        <?php $promotion_banner = isset($optionValue['promotion_banner']) ? $optionValue['promotion_banner']: [];  ?>
        <div id="promotion_banner" data-plugin="upload">
            <div>
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_banner" aria-expanded="true" aria-controls="collapse">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
               </a>
              <strong>Promotion banner:</strong>

            </div>
            <div id ="collapse_banner" class = "panel-collapse collapse">
              <?php $i = 0; ?>
                    <div class="block" id="collapse">
                       @foreach( $promotion_banner as $row )
                       <div class="row form-group" data-id="{{ $i }}">
                          <div>Image: <input type="text" class="form-control" name="promotion_banner[{{ $i }}][image]" value="{{ $row['image'] }}" /></div>
                          <span class="input-group-btn">
                          <span class="fileUpload btn btn-primary">
                          <span>Upload</span>
                          <input type="file" name="file" class="upload" />
                          </span>
                          </span>
                          <div>Url: <input type="text" name="promotion_banner[{{ $i }}][url]" value="{{ $row['url'] }}" /></div>
                          @if( $i > 0 ) <a class="remove" href="javascript:;">Remove</a> @endif
                       </div>
                       <br/>
                       <?php $i++; ?>
                       @endforeach
                    </div>

              <div class="resultetc_promotion_banner"></div>
                    <a class="addRow" href="#">Add new image</a>
            </div>
         </div>

         <br/>
        <!-- End promotion_banner -->

        <!-- Product Select Container -->
        <?php
           $productCategory = get_taxonomy_product('product_category');
           $productGroup = get_taxonomy_product('product_group');
           ?>
        @for( $i=1; $i<=2; $i++ )
        <?php
           $productSlug = isset($optionValue['product_slug_'.$i]) ? $optionValue['product_slug_'.$i] : '';
           $productType = isset($optionValue['product_type_'.$i]) ? $optionValue['product_type_'.$i] : '';
           if( $productType == '' ) $productType = 0;
           elseif( $productType == 'product_category' ) $productType = 1;
           else $productType = 2; // product_group
           ?>
        <!-- start  -->
        <div class="product-select-container product-select-container-row-{{ $i }}">
           <div><strong>Product Position {{ $i }}:</strong></div>
           <select class="main-select" name="main_select_{{ $i }}">
           <option value="0" @if( $productType == 0 ) selected @endif >Sản Phẩm Mới</option>
           <option value="1" @if( $productType == 1 ) selected @endif >Danh Mục Sản Phẩm</option>
           <option value="2" @if( $productType == 2 ) selected @endif >Nhóm Sản Phẩm</option>
           </select>
           <select class="product-category-select" name="product_category_{{ $i }}">
           @foreach( $productCategory as $taxonomy )
           <option value="{{ $taxonomy->taxonomy_slug }}" @if( $productSlug == $taxonomy->taxonomy_slug ) selected @endif >{{ $taxonomy->taxonomy_name }}</option>
           @endforeach
           </select>
           <select class="product-group-select" name="product_group_{{ $i }}">
           @foreach( $productGroup as $taxonomy )
           <option value="{{ $taxonomy->taxonomy_slug }}" @if( $productSlug == $taxonomy->taxonomy_slug ) selected @endif >{{ $taxonomy->taxonomy_name }}</option>
           @endforeach
           </select>
        </div>
        <!-- End -->
        @endfor
        <!--  End Product Select Container -->
         <br/>

    <div><input type="submit" value="Save" /></div>
  </div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    // Slider
    $('#slider .addRow').click(function(){
      var numberMaxElement = parseInt($('#slider .row').last().attr('data-id')) + 1;
      var row = '';
      row += '<div class="row form-group" data-id="'+numberMaxElement+'">';
      row += '<div>Image: <input type="text" class="form-control" name="slider['+numberMaxElement+'][image]" value="" /></div>';
      row += '<span class="input-group-btn">';
      row += '<span class="fileUpload btn btn-primary">';
      row += '<span>Upload</span>';
      row += '<input type="file" name="file" class="upload" />';
      row += '</span>';
      row += '</span>';
      row += '<div>Url: <input type="text" name="slider['+numberMaxElement+'][url]" value="" /></div>';
      row += '<div>Caption 1: <input type="text" name="slider['+numberMaxElement+'][caption_1]" value="" /></div>';
      row += '<div>Caption 2: <input type="text" name="slider['+numberMaxElement+'][caption_2]" value="" /></div>';
      row += '<div>Caption 3: <input type="text" name="slider['+numberMaxElement+'][caption_3]" value="" /></div>';
      row += '<a class="remove" href="javascript:;">Remove</a>';
      row += '</div>';
      // $('#slider .block').append(row);
      $('.resultetc').append(row);
      return false;
    });
    $('.theme').on('click','#slider .remove',function(){
      $(this).parent().remove();
      return false;
    });
    //End slide
    // Slider 1
    $('#slider .addRow').click(function(){
      var numberMaxElement = parseInt($('#slider .row').last().attr('data-id')) + 1;
      var row = '';
      row += '<div class="row form-group" data-id="'+numberMaxElement+'">';
      row += '<div>Image: <input type="text" class="form-control" name="slider['+numberMaxElement+'][image]" value="" /></div>';
      row += '<span class="input-group-btn">';
      row += '<span class="fileUpload btn btn-primary">';
      row += '<span>Upload</span>';
      row += '<input type="file" name="file" class="upload" />';
      row += '</span>';
      row += '</span>';
      row += '<div>Url: <input type="text" name="slider['+numberMaxElement+'][url]" value="" /></div>';
      row += '<div>Caption 1: <input type="text" name="slider['+numberMaxElement+'][caption_1]" value="" /></div>';
      row += '<div>Caption 2: <input type="text" name="slider['+numberMaxElement+'][caption_2]" value="" /></div>';
      row += '<div>Caption 3: <input type="text" name="slider['+numberMaxElement+'][caption_3]" value="" /></div>';
      row += '<a class="remove" href="javascript:;">Remove</a>';
      row += '</div>';
      // $('#slider .block').append(row);
      $('.resultetc').append(row);
      return false;
    });
    $('.theme').on('click','#slider .remove',function(){
      $(this).parent().remove();
      return false;
    });
    //End slide 1

    // slide 1
    $('#promotion_banner .addRow').click(function(){
      var numberMaxElement = parseInt($('#promotion_banner .row').last().attr('data-id')) + 1;
      var row = '';
      row += '<div class="row form-group" data-id="'+numberMaxElement+'">';
      row += '<div>Image: <input type="text" class="form-control" name="promotion_banner['+numberMaxElement+'][image]" value="" /></div>';
      row += '<span class="input-group-btn">';
      row += '<span class="fileUpload btn btn-primary">';
      row += '<span>Upload</span>';
      row += '<input type="file" name="file" class="upload" />';
      row += '</span>';
      row += '</span>';
      row += '<div>Url: <input type="text" name="promotion_banner['+numberMaxElement+'][url]" value="" /></div>';
      row += '<a class="remove" href="javascript:;">Remove</a>';
      row += '</div>';
      // $('#promotion_banner .block').append(row);
      $('.resultetc_promotion_banner').append(row);
      return false;
    });
    $('.theme').on('click','#promotion_banner .remove',function(){
      $(this).parent().remove();
      return false;
    });
    //End slide 2


    // Product Select Container
    $('.product-select-container .product-category-select, .product-select-container .product-group-select').hide();
    <?php
      $numBegin = 1;
      $numEnd = 2;
      for( $i=$numBegin; $i<=$numEnd; $i++ )
      {
      ?>
    var mainSelect = $('.product-select-container-row-{{ $i }} select[name=main_select_{{ $i }}]').val();
    if( mainSelect == 0 )
    {}
    else if( mainSelect == 1 )
    {
      $('.product-select-container-row-{{ $i }} select[name=product_category_{{ $i }}]').show();
    }else // mainSelect == 2
    {
      $('.product-select-container-row-{{ $i }} select[name=product_group_{{ $i }}]').show();
    }
    <?php
      }
      ?>
    $('.product-select-container').on('change','.main-select',function(){
      var mainSelect = $(this).val();
      var selectParentElement = $(this).parent();
      if( mainSelect == 0 )
      {
        selectParentElement.find('.product-category-select, .product-group-select').hide();
      }
      else if( mainSelect == 1 )
      {
        selectParentElement.find('.product-category-select').show();
        selectParentElement.find('.product-group-select').hide();
      }
      else // mainSelect == 2
      {
        selectParentElement.find('.product-category-select').hide();
        selectParentElement.find('.product-group-select').show();
      }
    });

  });
</script>
@stop