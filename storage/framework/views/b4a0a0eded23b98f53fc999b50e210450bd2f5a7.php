
<?php $__env->startSection('main-content'); ?>
	<?php echo Form::open(['route' => ['category.update',$category->id], 'method' => 'put','enctype' => 'multipart/form-data']); ?>

	
	<input class="col-lg-12" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<input class="col-lg-12" type="hidden" name="id" value="<?php echo e($category->id); ?>">
		<h3 class="text-center">DANH MỤC, CẬP NHẬT</h3>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Name</label>
			<input class="form-control" type="text" name="name" value="<?php echo e($category->name); ?>" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">URL</label>
			<input class="form-control" type="text" name="url"  value="<?php echo e($category->url); ?>" placeholder="ID Product">
		</div>
		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Image</label>
			<?php if(sizeof($category->attachment) == null): ?>
				<input class="form-control" type="file" name="image" placeholder="ID Product">
			<?php else: ?>
			
				<?php $__currentLoopData = $category->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<input class="form-control" type="file" name="image"  placeholder="<?php echo e($attachment->url); ?>">
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<?php endif; ?>

		</div>

		<div class="col-lg-6 form-group">
			<label class="control-label" for="product-name">Active</label>
			<select class="form-control" name="active">
				<option value="0" <?php if($category->status == false): ?> selected <?php endif; ?>>Khóa</option>
				<option value="1" <?php if($category->status == true): ?> selected <?php endif; ?>>Mở Khóa</option>
			</select>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">
			<input class="form-control btn btn-primary" type="submit" value="TẠO DANH MỤC">
		</div>

	
	<?php echo Form::close(); ?>

<?php $__env->stopSection(true); ?>
<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>