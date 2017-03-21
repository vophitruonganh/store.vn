

<?php $__env->startSection('main-content'); ?>


	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">ĐỊA CHỈ</th>

				
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
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr class="text-center">
				<th class="text-center"><?php echo e($category->id); ?></th>
				<?php if(!is_null($category->image)): ?>
					<?php $__currentLoopData = $category->attachment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<td class="text-center"><img class="img-responsive" style="max-width: 50px;" src="<?php echo e(URL::to('images',$attachment->url)); ?>" alt=""></td>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php else: ?>
						<td class="text-center"><img class="img-responsive" style="max-width: 50px;" src="<?php echo e(URL::to('images/logo.png')); ?>" alt=""></td>
				<?php endif; ?>

				<th class="text-center"><strong><a href="<?php echo e(url('dashboard/category/'.$category->url.'/edit')); ?>"><?php echo e(strtoupper($category->name)); ?></a></strong></th>
				<td class="text-center"><?php echo e($category->url); ?></td>
				
				<?php echo Form::open(['route'=>['category.destroy',$category->id],'method' => 'delete']); ?>

				<td class="text-center">
					<input class="btn btn-danger" type="submit" value="DELETE">
				</td>
				<?php echo Form::close(); ?>

			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	<div class="col-lg-12 text-center"><?php echo e($categories->links()); ?></div>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('dashboard.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>