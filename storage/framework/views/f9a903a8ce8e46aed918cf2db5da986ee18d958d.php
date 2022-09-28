 

<?php $__env->startSection('header'); ?>
<section>
		<div class="feature-photo">
			<figure><img src="<?php echo e(asset('public/frontend/images/resources/timeline-1.jpg')); ?>" alt=""></figure>
			<div class="add-btn">
				<span> followers</span>
				<a href="#" title="" data-ripple="">Add Friend</a>
			</div>
			<form class="edit-phto">
				<i class="fa fa-camera-retro"></i>
				<label class="fileContainer">
					Edit Cover Photo
				<input type="file"/>
				</label>
			</form>
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="<?php echo e(asset('public/frontend/images/resources/user-avatar.jpg')); ?>" alt="">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>Janice Griffith</h5>
								  <span>Group Admin</span>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
                           <div class="col-lg-6">
								<div class="central-meta">
									<h6>My Page List</h6>
									<?php $__currentLoopData = $my_page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<ul class="list-group">

										  <li class="list-group-item bg-info text-white mb-2">
										  	<a href="<?php echo e(route('my_page.view_page',$data->id)); ?>"><?php echo e($data->page_name); ?></a>
										  	<a href="<?php echo e(route('create_page.edit_page',$data->id)); ?>" class="btn btn-info btn-xs" style="margin-left: 527px;" > <i class='fa fa-edit' style='color: black;  '></i></a>

										  	<a href="<?php echo e(route('create_page.delete_page',$data->id)); ?>" class="btn btn-info btn-xs" > <i class='fa fa-remove'></i></a>


										  </li>
										  
									</ul>

									
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
									
								</div><!-- add post new box -->
								<div class="">
								
								</div>
							</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Mproject\social-network\resources\views/frontend/page/my_page.blade.php ENDPATH**/ ?>