<?php $__env->startSection('main-content'); ?>

	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				
				<th class="text-center">TÊN SẢN PHẨM</th>
				<th class="text-center">NHÓM</th>

				<th class="text-center">THƯƠNG HIỆU</th>
				<th class="text-center">GIÁ</th>
				<th class="text-center">SỐ LƯỢNG</th>
				<th class="text-center">TRẠNG THÁI</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>

		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

			<tr>
				
				<?php $__currentLoopData = $product->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<th class="text-center"><strong><a href="<?php echo e(url('dashboard/product/detail/'.$product->id)); ?>"><?php echo e($product->name); ?></a></strong></th>
				<?php $__currentLoopData = $product->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<td class="text-center"><?php echo e($category->name); ?></td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php $__currentLoopData = $product->trademark; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<th class="text-center"><?php echo e($trademark->name); ?></td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<td class="text-right"><?php echo e(number_format($product->price).' VNĐ'); ?></td>
				<td class="text-center"><?php echo e($product->count); ?></td>
				<td class="text-center"><?php if($product->status == 1): ?> <?php echo e('Đang Bán'); ?> <?php else: ?><?php echo e('Ngưng Bán'); ?> <?php endif; ?></td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="<?php echo e(url('dashboard/product/edit/'.$product->id)); ?>">Edit</a>
						<a class="btn btn-danger" href="<?php echo e(url('dashboard/product/delete/'.$product->id)); ?>">Drop</a>
					</div>
				</td>
			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

		</tbody>
	</table>
	<div class="col-lg-12 text-center"><?php echo e($products->links()); ?></div>

<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>