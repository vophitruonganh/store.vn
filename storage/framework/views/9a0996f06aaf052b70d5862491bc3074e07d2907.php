<?php $__env->startSection('main-content'); ?>

	<form action="<?php echo e(url('dashboard/product/edit',$product->id)); ?>" method="post" enctype="multipart/form-data">
	<input class="col-lg-12" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<h3 class="text-center">CẬP NHẬT THÔNG TIN SẢN PHẨM</h3>
		
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="Product Name" value="<?php echo e($product->name); ?>">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">URL</label>
			<input class="form-control" type="text" name="url" placeholder="Product Url" value="<?php echo e($product->url); ?>">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Image</label>
			<input class="form-control" type="file" name="image" placeholder="Product Image Url" value="<?php echo e($product->image); ?>">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Price</label>
			<input class="form-control" type="text" name="price" placeholder="Product Price" value="<?php echo e(number_format($product->price )); ?>">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Number Count</label>
			<input class="form-control" type="text" name="count" placeholder="Product Number" value="<?php echo e(number_format($product->count )); ?>">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Sale</label>
			<select class="form-control" name="sale">
				<option value="1" <?php if($product->sale == 1): ?><?php echo e('selected'); ?><?php endif; ?>>Sale</option>
				<option value="0" <?php if($product->sale == 0): ?><?php echo e('selected'); ?><?php endif; ?>>Not Sale</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Status</label>
			<select class="form-control" name="status">
				<option value="1" <?php if($product->status == 1): ?><?php echo e('selected'); ?><?php endif; ?>>Còn Hàng</option>
				<option value="0" <?php if($product->status == 0): ?><?php echo e('selected'); ?><?php endif; ?>>Hết Hàng</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="1" <?php if($product->active == 1): ?><?php echo e('selected'); ?><?php endif; ?>>Khóa</option>
				<option value="0" <?php if($product->active == 0): ?><?php echo e('selected'); ?><?php endif; ?>>Mở Khóa</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Trademark</label>
			<select class="form-control" name="trademark">
				<?php $__currentLoopData = $trademarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="13" <?php if($product->trademark == $trademark->id): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($trademark->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

			</select>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">

			<input class="form-control btn btn-primary" type="submit" value="CẬP NHẬT THÔNG TIN SẢN PHẨM">
		</div>
	</form>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>