<?php $__env->startSection('main-content'); ?>

	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">TÊN SẢN PHẨM</th>
				<th class="text-center">NHÓM</th>
				<th class="text-center">THƯƠNG HIỆU</th>
				<th class="text-center">GIÁ</th>
				<th class="text-center">SỐ LƯỢNG</th>
				<th class="text-center">CHỨC NĂNG</th>
			</tr>
		</thead>
		<tbody>

		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<th class="text-center"><?php echo e($product->id); ?></th>
				<th class="text-center"><strong><a href="<?php echo e(url('dashboard/product/detail/'.$product->id)); ?>"><?php echo e($product->name); ?></a></strong></th>
				<td class="text-right"><?php echo e($product->category_name); ?></td>
				<td class="text-right"><?php echo e($product->trademark_name); ?></td>
				<td class="text-right"><?php echo e(number_format($product->price).' VNĐ'); ?></td>
				<td class="text-left"><?php echo e($product->count); ?></td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="<?php echo e(url('dashboard/product/edit/'.$product->id)); ?>">EDIT</a>
						<a class="btn btn-danger" href="<?php echo e(url('dashboard/product/delete/'.$product->id)); ?>">DELETE</a>
					</div>
				</td>
			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

		</tbody>
	</table>
	<div class="col-lg-12 text-center"><?php echo e($products->links()); ?></div>

<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>