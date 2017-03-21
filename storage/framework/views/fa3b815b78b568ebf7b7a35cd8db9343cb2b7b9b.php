<?php $__env->startSection('main-content'); ?>
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">ĐỊA CHỈ</th>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TRẠNG THÁI</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<th class="text-center"><?php echo e($category->id); ?></th>
				<th class="text-center"><strong><a href="<?php echo e(url('dashboard/category/detail/'.$category->url)); ?>"><?php echo e($category->name); ?></a></strong></th>
				<td class="text-right"><?php echo e($category->url); ?></td>
				<td class="text-right"><?php echo e(isset($category->image) ? $category->image : 'ĐANG CẬP NHẬT'); ?></td>
				<td class="text-right"><?php echo e($category->active); ?></td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="<?php echo e(url('dashboard/category/edit/'.$category->url)); ?>">EDIT</a>
						<a class="btn btn-danger" href="<?php echo e(url('dashboard/category/delete/'.$category->url)); ?>">DELETE</a>
					</div>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	<div class="col-lg-12 text-center"><?php echo e($categories->links()); ?></div>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('layouts.dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>