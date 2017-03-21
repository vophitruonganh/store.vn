<?php echo $__env->make('frontend.theme.shop.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.theme.shop.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('frontend.theme.shop.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>