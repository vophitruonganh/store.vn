<?php $__env->startSection('main-content'); ?>
	<?php if(Session::has('success')): ?>
		<p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
	<?php endif; ?>
	<?php if(Session::has('error')): ?>
		<p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
	<?php endif; ?>
	
	<?php echo Form::open(['route' => ['product.update',$product->id],'method' => 'PUT','enctype' => 'multipart/form-data']); ?>

		<h3 class="text-center">CẬP NHẬT THÔNG TIN SẢN PHẨM</h3>
		<div class="col-lg-6 form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">ID</label>
			<input class="form-control"  disabled  type="text" name="id" placeholder="Product ID" value="<?php echo e(isset($product->id) ? $product->id : old('id')); ?>">
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="Product Name" value="<?php echo e(isset($product->name) ? $product->name : old('name')); ?>">
			<?php if($errors->has('name')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('url') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">URL</label>
			<input class="form-control" type="text" name="url" placeholder="Product Url" value="<?php echo e($product->url); ?>">
			<?php if($errors->has('url')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('url')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('image') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Image</label>
			<input class="form-control" type="file" name="image" placeholder="Product Image Url" value="<?php echo e($product->image); ?>">
			<?php if($errors->has('image')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('image')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Price</label>
			<input class="form-control" type="text" name="price" placeholder="Product Price" value="<?php echo e(round($product->price)); ?>">
			<?php if($errors->has('price')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('price')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('count') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Number Count</label>
			<input class="form-control" type="text" name="count" placeholder="Product Count" value="<?php echo e($product->count); ?>">
			<?php if($errors->has('count')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('count')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('sale') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Sale</label>
			<select class="form-control" name="sale">
				<option value="1" <?php if($product->sale == 1): ?><?php echo e('selected'); ?><?php endif; ?>>Sale</option>
				<option value="0" <?php if($product->sale == 0): ?><?php echo e('selected'); ?><?php endif; ?>>Not Sale</option>
				option
			</select>
			<?php if($errors->has('sale')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('sale')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Status</label>
			<select class="form-control" name="status">
				<option value="1" <?php if($product->status == 1): ?><?php echo e('selected'); ?><?php endif; ?>>Còn Hàng</option>
				<option value="0" <?php if($product->status == 0): ?><?php echo e('selected'); ?><?php endif; ?>>Hết Hàng</option>
				option
			</select>
			<?php if($errors->has('status')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('status')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('active') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="1" <?php if($product->active == 1): ?><?php echo e('selected'); ?><?php endif; ?>>Mở Khóa</option>
				<option value="0" <?php if($product->active == 0): ?><?php echo e('selected'); ?><?php endif; ?>>Khóa</option>
				option
			</select>
			<?php if($errors->has('active')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('active')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('trademark') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Category</label>
			<select class="form-control" name="category">
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="<?php echo e($category->id); ?>" <?php if($product->category_id == $category->id): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($category->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

			</select>
			<?php if($errors->has('trademark')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('trademark')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('trademark') ? ' has-error' : ''); ?>">
			<label class="control-label" for="product-name">Trademark</label>
			<select class="form-control" name="trademark">
				<?php $__currentLoopData = $trademarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="<?php echo e($trademark->id); ?>" <?php if($product->trademark_id == $trademark->id): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($trademark->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

			</select>
			<?php if($errors->has('trademark')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('trademark')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">

			<input class="form-control btn btn-primary" type="submit" value="CẬP NHẬT THÔNG TIN SẢN PHẨM">
		</div>
	
	<?php echo Form::close(); ?>

<?php $__env->stopSection(true); ?>
<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>