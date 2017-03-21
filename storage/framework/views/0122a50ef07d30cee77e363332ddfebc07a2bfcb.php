<!DOCTYPE html>
<html lang="en">
<?php $__env->startSection('head'); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href=" <?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dashboard.css')); ?>">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>" type="text/javascript" charset="utf-8" async defer></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<?php echo $__env->yieldSection(); ?>
<body>
<?php echo $__env->yieldContent('header'); ?>
<?php $__env->startSection('navigation'); ?>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', config('name'))); ?>

                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>"><span class="glyphicon glyphicon-user"></span>&nbsp&nbspĐăng nhập</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>"><span class="  glyphicon glyphicon-log-in"></span>&nbsp&nbspTạo tài khoản</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-expanded="false">
                                <?php echo e(Auth::user()->firstname .' '.Auth::user()->lastname); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo e(url('/logout')); ?>"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('main-left'); ?><?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('main-content'); ?><?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('main-right'); ?><?php echo $__env->yieldSection(); ?>
<?php $__env->startSection('footer'); ?><?php echo $__env->yieldSection(); ?>
</body>
</html>
