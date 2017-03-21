
<?php $__env->startSection('main-content'); ?>
	<?php if(Session::has('success')): ?>
		<p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
	<?php endif; ?>
	<?php if(Session::has('error')): ?>
		<p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
	<?php endif; ?>
	<?php echo Form::open(['route' => ['trademark.update',$trademark->id], 'method' => 'put','enctype' => 'multipart/form-data']); ?>

	<input class="col-lg-12" type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	
		<h3 class="text-center">CẬP NHẬT THÔNG TIN HÃNG SẢN XUẤT</h3>
		<div class="col-lg-6 form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
			<label class="control-label" for="trademark-name">Name</label>
			<input class="form-control" type="text" name="name" placeholder="trademark Name" value="<?php echo e(isset($trademark->name) ? $trademark->name : old('name')); ?>">
			<?php if($errors->has('name')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('url') ? ' has-error' : ''); ?>">
			<label class="control-label" for="trademark-name">URL</label>
			<input class="form-control" type="text" name="url" placeholder="trademark Url" value="<?php echo e($trademark->url); ?>">
			<?php if($errors->has('url')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('url')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('image') ? ' has-error' : ''); ?>">
			<label class="control-label" for="trademark-name">Image</label>
			<input class="form-control" type="file" name="image" placeholder="trademark Image Url" value="<?php echo e($trademark->image); ?>">
			<?php if($errors->has('image')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('image')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-6 form-group <?php echo e($errors->has('active') ? ' has-error' : ''); ?>">
			<label class="control-label" for="trademark-name">Active</label>
			<select class="form-control" name="active">
				<option value="0" <?php if($trademark->active == 0): ?><?php echo e('selected'); ?><?php endif; ?>>Khóa</option>
				<option value="1" <?php if($trademark->active == 1): ?><?php echo e('selected'); ?><?php endif; ?>>Mở Khóa</option>
				option
			</select>
			<?php if($errors->has('active')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('active')); ?></strong>
                </span>
            <?php endif; ?>
		</div>
		<div class="col-lg-12"><label class="control-label" for=""></label></div>
		<div class="col-lg-12">

			<input class="form-control btn btn-primary" type="submit" value="CẬP NHẬT THÔNG TIN HÃNG SẢN XUẤT">
		</div>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(true); ?>
<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>