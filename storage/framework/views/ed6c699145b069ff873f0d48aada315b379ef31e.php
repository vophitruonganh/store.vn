<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('layouts.dashboard.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
<?php echo $__env->yieldContent('header'); ?>

<?php $__env->startSection('navigation'); ?>
    <?php echo $__env->make('layouts.dashboard.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<div class="col-lg-3">
	<?php $__env->startSection('main-left'); ?>
	    <?php echo $__env->make('layouts.dashboard.mainleft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldSection(); ?>
</div>
<div class="main-content col-lg-9">
	<?php $__env->startSection('main-content'); ?>
	    <?php echo $__env->make('layouts.dashboard.maincontent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldSection(); ?>
</div>
<div class="col-lg-3">
	<?php $__env->startSection('main-right'); ?>
	    <?php echo $__env->make('layouts.dashboard.mainright', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldSection(); ?>
</div>
<div class="col-lg-12">
	<?php $__env->startSection('footer'); ?>
	    <?php echo $__env->make('layouts.dashboard.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldSection(); ?>
</div>
</body>
</html>
