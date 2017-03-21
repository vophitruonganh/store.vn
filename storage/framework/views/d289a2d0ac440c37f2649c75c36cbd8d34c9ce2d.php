<?php $__env->startSection('head'); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(elixir('css/app.css')); ?>">
    <!-- Scripts -->
    <script src="<?php echo e(elixir('js/app.js')); ?>" type="text/javascript" charset="utf-8" async defer></script>
    <script src="<?php echo e(elixir('js/bootstrap.js')); ?>" type="text/javascript" charset="utf-8"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>