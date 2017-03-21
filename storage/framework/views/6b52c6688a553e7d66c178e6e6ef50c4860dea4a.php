<?php $__env->startSection('main-content'); ?>

	<form action="<?php echo e(url('dashboard/product/create')); ?>" method="post" enctype="multipart/form-data">
	<input class="col-lg-12" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<h3 class="text-center">TẠO SẢN PHẨM MỚI</h3>

		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">URL</label>
			<input class="form-control" type="text" name="url" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Image</label>
			<input class="form-control" type="file" name="image" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Price</label>
			<input class="form-control" type="text" name="price" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Sale</label>
			<select class="form-control" name="sale">
				<option value="1" selected>Sale</option>
				<option value="0" selected>Not Sale</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Status</label>
			<select class="form-control" name="status">
				<option value="1" selected>Còn Hàng</option>
				<option value="0" selected>Hết Hàng</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="1" selected>Khóa</option>
				<option value="0" selected>Mở Khóa</option>
				option
			</select>
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Trademark</label>
			<select class="form-control" name="trademark">
				<option value="13" selected>Apple</option>
				<option value="14" selected>Asus</option>
				option
			</select>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">

			<input class="form-control btn btn-primary" type="submit" value="TẠO SẢN PHẨM">
		</div>
	</form>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>