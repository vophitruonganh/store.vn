<?php $__env->startSection('main-content'); ?>
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">TRẠNG THÁI</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>
		<?php if(Session::has('success')): ?>
			<p class="alert alert-success"><?php echo e(Session::get('success')); ?></p>
		<?php endif; ?>
		<?php if(Session::has('error')): ?>
			<p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
		<?php endif; ?>
		<?php $__currentLoopData = $trademarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<th class="text-center"><?php echo e($trademark->id); ?></th>
				<?php if(sizeof($trademark->attachment) >0): ?>
					<?php $__currentLoopData = $trademark->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<th class="text-center"><img style="max-width: 70px;" class="img-responsive" src="<?php echo e(URL::to('images',$attachment->url)); ?>" alt=""></th>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php else: ?>
					<th class="text-center"><img style="max-width: 70px;" class="img-responsive" src="<?php echo e(URL::to('images/logo.png')); ?>" alt=""></th>
				<?php endif; ?>

				<th class="text-center"><strong><a href="<?php echo e(url('dashboard/trademark/'.$trademark->url.'/edit/')); ?>"><?php echo e(strtoupper($trademark->name)); ?></a></strong></th>
				<td class="text-center"><?php if($trademark->active == 1): ?>Mở Khóa <?php else: ?> Khóa <?php endif; ?></td>
				<td class="text-center">
				<?php echo Form::open(['route' => ['trademark.destroy',$trademark->id], 'method' => 'delete']); ?>

					<input class="btn btn-danger" type="submit" value="DELETE">
				<?php echo Form::close(); ?>

				</td>
			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

		</tbody>
	</table>
	<div class="col-lg-12 text-center"><?php echo e($trademarks->links()); ?></div>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>