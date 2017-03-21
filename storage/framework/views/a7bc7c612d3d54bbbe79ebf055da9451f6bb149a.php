

<?php $__env->startSection('main-content'); ?>

	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TÊN SẢN PHẨM</th>
				<th class="text-center">NHÓM</th>

				<th class="text-center">THƯƠNG HIỆU</th>
				<th class="text-center">GIÁ</th>
				<th class="text-center">SỐ LƯỢNG</th>
				<th class="text-center">Sale</th>
				<th class="text-center">Active</th>
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
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

			<tr class="text-center">
				<?php if(sizeof($product->attachment) > 0): ?>
					<?php $__currentLoopData = $product->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<th class="text-center">
						<image style="max-width: 70px;" class="img-responsive" src="<?php echo e(URL::to('/images/'.$attachment->url)); ?>">
					</th>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php else: ?>
					<td class="text-center">
						<image style="max-width: 70px;" class="img-responsive" src="<?php echo e(URL::to('/images/logo.png')); ?>">
					</td>
				<?php endif; ?>
				<td class="text-center"><strong><a href="/dashboard/product/<?php echo e($product->id); ?>/edit"><?php echo e(strtoupper($product->name)); ?></a></strong></td>
				<?php $__currentLoopData = $product->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<td class="text-center"><?php echo e($category->name); ?></td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php $__currentLoopData = $product->trademark; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trademark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<td class="text-center"><?php echo e($trademark->name); ?></td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<td class="text-right"><?php echo e(number_format($product->price)); ?></td>
				<td class="text-center"><?php echo e($product->count); ?></td>
				<td class="text-center">
					<?php if($product->sale == 1): ?>
					<?php echo Form::label('sale',$product->sale); ?>

					<?php else: ?>
					<?php echo Form::label('sale',$product->sale); ?>

					<?php endif; ?>
				</td>
				<th class="text-center"><?php if($product->active == 1): ?> <?php echo e('Có'); ?> <?php else: ?><?php echo e('Không'); ?> <?php endif; ?></th>
				<th class="text-center">
				
				<?php echo e(Form::open(['route' => ['product.destroy', $product->id], 'method' => 'delete'])); ?>

					<a class="btn btn-success" href="/dashboard/product/<?php echo e($product->id); ?>/edit">Sửa</a>
					<input class="btn btn-danger" type="submit" value="Xóa">
				<?php echo e(Form::close()); ?>

				</th>
			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	<div class="col-lg-12 text-center"><?php echo e($products->links()); ?></div>

<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>