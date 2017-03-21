<?php $__env->startSection('title-site','Home'); ?>

<?php $__env->startSection('navigation'); ?>

<?php $__env->stopSection(true); ?>

<?php $__env->startSection('main-left'); ?>
	<p>Building Main Left</p>
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('main-content'); ?>
	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<div class="col-lg-3">
		<?php $__currentLoopData = $product->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<h3><img class="img-responsive align-center" src="<?php echo e(url('images',$attachment->url)); ?>" alt=""></h3>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		<h3 class="text-center"><a href="<?php echo e(url('collection/'.$product->id.'/edit')); ?>"><?php echo e($product->name); ?></a></h3>
		<h5 class="text-center"><?php echo e(number_format($product->price)); ?><sup>&nbspVND</sup></h5>
		<div class="btn btn-group">
			<a class="btn btn-success" href="">Chi Tiết</a>
			<input class="btn btn-danger" type="submit" value="Mua Ngay">
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	<div class="col-lg-12 text-center"><?php echo e($products->links()); ?></div>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('layouts.frontend.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>