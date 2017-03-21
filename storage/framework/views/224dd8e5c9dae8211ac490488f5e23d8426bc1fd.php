
<?php $__env->startSection('website'); ?>
	<div class="sitebar">
		<div class="sitebar-top text-center">
			<?php if(Auth::user()->avata): ?>
			 <img class="img-resonsive" style="float:none !important;margin:40px 0px 0px 0px !important;width:70%;border-radius:50%;box-shadow: 0px 0px 4px 2px #aaa;" src="<?php echo e(asset('images/'.Auth::user()->avata)); ?>" alt="<?php echo e(Auth::user()->avata); ?>">
			 <?php endif; ?>
			 <h3 class="text-center" style="color:#34A853"><?php echo e(Auth::user()->firstname .' '.Auth::user()->lastname); ?></h3>
			 
			 <h5 class="text-center" style="color:#34A853"><?php echo e(Auth::user()->role->name); ?></h5>
			 

			 <span>Status : <?php if(Auth::user()->status == true): ?>
			 	Online
			 <?php else: ?>
			 	Offline
			 <?php endif; ?></span>
		</div>
		<div class="subnav">
			<h4></span> Website</h4>
			<ul>
				<li><a href="#">Infomaion</a></li>
				<li><a href="#">Domain</a></li>
				<li><a href="#">Page</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Manager User</h4>
			<ul>
				<li><a href="<?php echo e(url('dashboard/user/create')); ?>">Create New User</a></li>
				<li><a href="<?php echo e(url('dashboard/user')); ?>">List User</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Product</h4>
			<ul>
				<li><a href="<?php echo e(url('dashboard/category/create')); ?>">Create New Category</a></li>
				<li><a href="<?php echo e(url('dashboard/trademark/create')); ?>">Create New Trademark</a></li>
				<li><a href="<?php echo e(url('dashboard/product/create')); ?>">Create New Product</a></li>
				<li><a href="<?php echo e(url('dashboard/category')); ?>">List Category</a></li>
				<li><a href="<?php echo e(url('dashboard/trademark')); ?>">List Trademark</a></li>
				<li><a href="<?php echo e(url('dashboard/product')); ?>">List Product Active</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Order</h4>
			<ul>

				<li><a href="#">View All Order</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Shipping</h4>
			<ul>
				<li><a href="#">All Ship</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Upload</h4>
			<ul>
				<li><a href="/dashboard/attachment">Thư Viện Hình Ảnh</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Site Option</h4>
			<ul>
				<li><a href="#">Template Theme</a></li>
				<li><a href="#">Infomation Site</a></li>
			</
			</ul>
		</div>

</div>