

<?php $__env->startSection('main-content'); ?>
<h3>THƯ VIỆN HÌNH ẢNH</h3>

<?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<div class="col-lg-3">

		<input type="checkbox" value="<?php echo e($attachment->id); ?>"><img  class="img-responsive" src="<?php echo e(URL::to('images',$attachment->url)); ?>" alt="">

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<div class="col-lg-12 text-center"><?php echo e($attachments->links()); ?></div>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>