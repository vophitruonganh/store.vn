
<?php $__env->startSection('website'); ?>
	<div class="sitebar">
		<div class="sitebar-top text-center">
			<?php if(Auth::user()->avata): ?>
			 <img class="img-resonsive" style="float:none !important;margin:40px 0px 0px 0px !important;width:70%;border-radius:50%;box-shadow: 0px 0px 4px 2px #aaa;" src="<?php echo e(asset('images/'.Auth::user()->avata)); ?>" alt="<?php echo e(Auth::user()->avata); ?>">
			 <?php endif; ?>
			 <h2 class="text-center" style="color:#34A853"><?php echo e(Auth::user()->firstname .' '.Auth::user()->lastname); ?></h2>
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
			<h4>Product</h4>
			<ul>

				<li><a href="<?php echo e(url('dashboard/category/create')); ?>">Create New Category</a></li>
				<li><a href="<?php echo e(url('dashboard/category')); ?>">View All Category</a></li>
				<li><a href="<?php echo e(url('dashboard/trademark/create')); ?>">Create New Trademark</a></li>
				<li><a href="<?php echo e(url('dashboard/trademark')); ?>">View All Trademark</a></li>
				<li><a href="<?php echo e(url('dashboard/product')); ?>">View List Product</a></li>
				<li><a href="<?php echo e(url('dashboard/product/create')); ?>">Create New Product</a></li>
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

				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Setting</h4>
			<ul>
				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
				<li><a href="#">Sub Item</a></li>
			</
			</ul>
	</div>
</div>