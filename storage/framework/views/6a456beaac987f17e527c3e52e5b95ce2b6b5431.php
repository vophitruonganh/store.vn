<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- Styles -->
	    <link rel="stylesheet" type="text/css" href=" <?php echo e(asset('css/frontend/bootstrap.css')); ?>">
	    <!-- Scripts -->
	    <script src="<?php echo e(asset('js/frontend/bootstrap.js')); ?>" type="text/javascript" charset="utf-8"></script>
	    <script src="<?php echo e(asset('js/jquery-3.1.1.min.js')); ?>" type="text/javascript" charset="utf-8"></script>

	    <title><?php echo $__env->yieldContent('title-site',config('app.name')); ?></title>

	    <!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	</head>
<body>
<?php echo $__env->yieldContent('header'); ?>

<?php $__env->startSection('navigation'); ?>

<?php echo $__env->yieldSection(); ?>
<div class="col-lg-3">
	<?php $__env->startSection('main-left'); ?>

	<?php echo $__env->yieldSection(); ?>
</div>
<div class="main-content col-lg-9">
	<?php $__env->startSection('main-content'); ?>

	<?php echo $__env->yieldSection(); ?>
</div>
<div class="col-lg-3">
	<?php $__env->startSection('main-right'); ?>

	<?php echo $__env->yieldSection(); ?>
</div>
<div class="col-lg-12">
	<?php $__env->startSection('footer'); ?>

	<?php echo $__env->yieldSection(); ?>
</div>
</body>
</html>