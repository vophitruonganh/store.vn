
<?php $__env->startSection('title-site','Xstore Mose'); ?>
<?php $__env->startSection('main-content'); ?>
	<ul>
		<li><h3><a href=""><?php echo e($product->name); ?></a></h3></li>
		<h5>THÔNG SỐ CHI TIẾT</h5>
		<ul>
			<?php if($product->description): ?>
			<li><?php echo e($product->description->size); ?></li>
			<li><?php echo e($product->description->color); ?></li>
			<?php endif; ?>
		</ul>
	</ul>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('layouts.frontend.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>