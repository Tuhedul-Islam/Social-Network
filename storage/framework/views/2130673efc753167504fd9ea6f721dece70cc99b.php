

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
								  <h5><?php echo e(Auth::user()->full_name); ?></h5>
								  <span><?php echo e(Auth::user()->email); ?></span>
								</li>
								<li>
									<a class="" href="<?php echo e(route('frontend.timeline')); ?>" title="" data-ripple="">time line</a>
									<a class="" href="<?php echo e(route('frontend.photopage')); ?>" title="" data-ripple="">Photos</a>
									<!-- <a class="" href="<?php echo e(route('frontend.videospage')); ?>" title="" data-ripple="">Videos</a> -->
									<a class="" href="<?php echo e(route('frontend.friendspage')); ?>" title="" data-ripple="">Friends</a>
									<!-- <a class="" href="<?php echo e(route('frontend.groupspage')); ?>" title="" data-ripple="">Groups</a> -->
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
									<div class="editing-interest">
										<h5 class="f-title"><i class="ti-bell"></i>All Notifications </h5>
										<div class="notification-box">
											<ul>
												<li>
													<figure><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar.jpg')); ?>" alt=""></figure>
													<div class="notifi-meta">
														<p>bob frank like your post</p>
														<span>30 mints ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar2.jpg')); ?>" alt=""></figure>
													<div class="notifi-meta">
														<p>Sarah Hetfield commented on your photo. </p>
														<span>1 hours ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar3.jpg')); ?>" alt=""></figure>
													<div class="notifi-meta">
														<p>Mathilda Brinker commented on your new profile status. </p>
														<span>2 hours ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar4.jpg')); ?>" alt=""></figure>
													<div class="notifi-meta">
														<p>Green Goo Rock invited you to attend to his event Goo in Gotham Bar. </p>
														<span>2 hours ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar5.jpg')); ?>" alt=""></figure>
													<div class="notifi-meta">
														<p>Chris Greyson liked your profile status. </p>
														<span>1 day ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
												<li>
													<figure><img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar6.jpg')); ?>" alt=""></figure>
													<div class="notifi-meta">
														<p>You and Nicholas Grissom just became friends. Write on his wall. </p>
														<span>2 days ago</span>
													</div>
													<i class="del fa fa-close"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Mproject\social-network\resources\views/frontend/page/notification_page.blade.php ENDPATH**/ ?>