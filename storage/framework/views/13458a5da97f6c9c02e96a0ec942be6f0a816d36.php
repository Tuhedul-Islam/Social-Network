

<?php $__env->startSection('header'); ?>
<section>
		<div class="feature-photo">
			<figure><img src="<?php echo e(asset('public/profile/profile_banner/'.$image->profile_banner)); ?>" alt=""></figure>
			<div class="add-btn">
				<span><?php echo e($requestcount); ?> followers</span>
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
								<img src="<?php echo e(asset('public/profile/profile_image/'.$image->profile_image)); ?>" alt="">
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
								<li>
									<a class="" href="<?php echo e(route('frontend.timeline')); ?>" title="" data-ripple="">time line</a>
									<a class="" href="<?php echo e(route('frontend.photopage')); ?>" title="" data-ripple="">Photos</a>
									<a class="" href="<?php echo e(route('frontend.videospage')); ?>" title="" data-ripple="">Videos</a>
									<a class="" href="<?php echo e(route('frontend.friendspage')); ?>" title="" data-ripple="">Friends</a>
									<a class="active" href="<?php echo e(route('frontend.groupspage')); ?>" title="" data-ripple="">Groups</a>
									<a class="" href="<?php echo e(route('frontend.aboutpage')); ?>" title="" data-ripple="">about</a>
									
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
									<div class="groups">
										<span><i class="fa fa-users"></i> joined Groups</span>
									</div>
									<ul class="nearby-contct">
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group1.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">funparty</a></h4>
													<span>public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group2.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">ABC News</a></h4>
													<span>Private group</span>
													<em>5M Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group3.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">SEO Zone</a></h4>
													<span>Public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group4.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Max Us</a></h4>
													<span>Public group</span>
													<em> 756 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group5.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Banana Group</a></h4>
													<span>Friends Group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group6.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Bad boys n Girls</a></h4>
													<span>Public group</span>
													<em>32k Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group7.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Bachelor's fun</a></h4>
													<span>Public Group</span>
													<em>500 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="<?php echo e(asset('public/frontend/images/resources/group4.jpg')); ?>" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Max Us</a></h4>
													<span>Public group</span>
													<em> 756 Members</em>
													<a href="#" title="" class="add-butn" data-ripple="">leave group</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
								</div><!-- photos -->
							</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Mproject\social-network\resources\views/frontend/page/groupspage.blade.php ENDPATH**/ ?>