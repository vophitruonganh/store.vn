<?php $__env->startSection('main-content'); ?>
	
	<?php echo Form::open(['route'=> ['product.store'],'method' => 'post', 'enctype' => 'multipart/form-data']); ?>

	<input class="col-lg-12" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<h3 class="text-center">TẠO SẢN PHẨM MỚI</h3>

		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="Product Name">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-count">Count Product</label>
			<input class="form-control" type="text" name="count" placeholder="Product Number">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Image</label>
			<input class="form-control filestyle" type="file" name="image" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Price</label>
			<input class="form-control" type="text" name="price" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Sale</label>
			<select class="form-control" name="sale">
				<option value="1">Sale</option>
				<option value="0" selected>Not Sale</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="0">Khóa</option>
				<option value="1" selected>Mở Khóa</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Category</label>
			<select class="form-control" name="category">
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="<?php echo e($category->id); ?>">
						<?php echo e($category->name); ?>

					</option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Trademark</label>
			<select class="form-control" name="trademark">
				<?php $__currentLoopData = $trademarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="<?php echo e($trademark->id); ?>">
						<?php echo e($trademark->name); ?>

					</option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</select>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">

			<input class="form-control btn btn-primary" type="submit" value="TẠO SẢN PHẨM">
		</div>
	
	<?php echo Form::close(); ?>

<?php $__env->stopSection(true); ?>
<?php echo $__env->make('dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>