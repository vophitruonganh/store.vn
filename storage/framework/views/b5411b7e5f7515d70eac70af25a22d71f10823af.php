<?php $__env->startSection('main-content'); ?>
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">TRẠNG THÁI</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>

		<?php $__currentLoopData = $trademarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<th class="text-center"><?php echo e($trademark->id); ?></th>
				<th class="text-center"><strong><a href="<?php echo e(url('dashboard/trademark/detail/'.$trademark->url)); ?>"><?php echo e($trademark->name); ?></a></strong></th>
				<td class="text-right"><?php echo e($trademark->active); ?></td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="<?php echo e(url('dashboard/trademark/edit/'.$trademark->url)); ?>">EDIT</a>
						<a class="btn btn-danger" href="<?php echo e(url('dashboard/trademark/delete/'.$trademark->url)); ?>">DELETE</a>
					</div>
				</td>
			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

		</tbody>
	</table>
	<div class="col-lg-12 text-center"><?php echo e($trademarks->links()); ?></div>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>