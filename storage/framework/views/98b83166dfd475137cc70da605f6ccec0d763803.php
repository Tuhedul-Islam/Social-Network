

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
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('leftsidebar'); ?>
     <div class="widget">
		<h4 class="widget-title">Profile intro</h4>
		<ul class="short-profile">
			<li>
				<span>about</span>
				<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company. </p>
			</li>
			<li>
				<span>fav tv show</span>
				<p>Sacred Games, Spartcus Blood, Games of theron</p>
			</li>
			<li>
				<span>favourit music</span>
				<p>Justin Biber, Nati Natsha, Shakira</p>
			</li>
		</ul>
	</div>


<?php $__env->stopSection(); ?>





<?php $__env->startSection('content'); ?>
<div class="col-lg-6">
				<div class="central-meta">
					<div class="editing-info">
						<h5 class="f-title"><i class="ti-info-alt"></i> Create favourite Page</h5>
						<form method="post" action="<?php echo e(route('create_page.update_page',$create_page->id)); ?>" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>

							<div class="form-group half">	
							  <input type="text" name="page_name" id="page_name" required="required"
                                     value="<?php echo e($create_page->page_name); ?>"
							  />
							  <label class="control-label" for="input">Page Name</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group half">	
							  <input type="text" name="sub_title" required="required"
							   value="<?php echo e($create_page->sub_title); ?>"
							  />
							  <label class="control-label" for="input">Sub Title</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="text" name="email" required="required" 

                                      value="<?php echo e($create_page->email); ?>"
							  />
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96d3fbf7fffad6">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>

							<div class="form-group half">	
							  <input type="text" name="phone" required="required" 
							  value="<?php echo e($create_page->phone); ?>"
							  />
							  <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group half ">
							<h6>Banner Image</h6>	
							  <input type="file" name="banner" required="required"
							  value="<?php echo e($create_page->banner); ?>"

							  />
							 
							</div>
							<div class="form-group">	
							  <input type="text" name="domain" required="required"
							  value="<?php echo e($create_page->domain); ?>"
							  />
							  <label class="control-label" for="input">www.yourdomain.com</label><i class="mtrl-select"></i>
							</div>											
							<div class="form-group">	
							  <select name="states"
							  value="<?php echo e($create_page->states); ?>"
							  >
								<option value="country">Country</option>
								  <option value="Afghanistan" <?php echo e($create_page->states=="Afghanistan"?'selected':''); ?>>Afghanistan</option>

								  <option value="Ƭand Islands"<?php echo e($create_page->states=="Ƭand Islands"?'selected':''); ?>>Ƭand Islands</option>

								  <option value="Albania"<?php echo e($create_page->states=="Albania"?'selected':''); ?>>Albania</option>

								  <option value="Algeria"<?php echo e($create_page->states=="Albania"?'selected':''); ?>>Algeria</option>

								
								  <option value="Bangladesh" <?php echo e($create_page->states=="Bangladesh"?'selected':''); ?>>Bangladesh</option>
								  
								 
							  </select>
							</div>
							<div class="form-group">	
							  <input type="text" name="city" required="required"
							  value="<?php echo e($create_page->city); ?>"
							  />
							  <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <textarea rows="4" name="additional_info" id="textarea" required="required"><?php echo e($create_page->additional_info); ?></textarea>
							  <label class="control-label" for="textarea">Additional Info</label><i class="mtrl-select"></i>
							</div>
							
							<h5 class="f-title ext-margin"><i class="ti-share"></i> Your Social Accounts</h5>
							<div class="form-group">	
							  <input type="text" name="facebook_link" required="required"
							  value="<?php echo e($create_page->facebook_link); ?>"
							  />
							  <label class="control-label" for="input"><i class="fa fa-facebook-square"></i> Facebook</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="text" name="twitter" required="required"
							  value="<?php echo e($create_page->twitter); ?>"
							  />
							  <label class="control-label" for="input"><i class="fa fa-twitter-square"></i> Twitter</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="text" name="instagram" required="required"
							  value="<?php echo e($create_page->instagram); ?>"
							  />
							  <label class="control-label" for="input"><i class="fa fa-instagram"></i> Instagram</label><i class="mtrl-select"></i>
							</div>
							
							
							<div class="submit-btns">
								<button type="button" class="mtr-btn"><span>Cancel</span></button>
								<button type="submit" class="mtr-btn"><span>update</span></button>
							</div>
						</form>
					</div>
				</div>	
			</div><!-- centerl meta -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Mproject\social-network\resources\views/frontend/page/my_pages/edit_page.blade.php ENDPATH**/ ?>