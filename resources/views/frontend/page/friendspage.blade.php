@extends('frontend.index')

@section('header')
<section>
		<div class="feature-photo">
			<figure><img src="{{asset('public/frontend/images/resources/timeline-1.jpg')}}" alt=""></figure>
			<div class="add-btn">
				<span>1205 followers</span>
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
								<img src="{{asset('public/frontend/images/resources/user-avatar.jpg')}}" alt="">
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
									<a class="" href="{{route('frontend.timeline')}}" title="" data-ripple="">time line</a>
									<a class="" href="{{route('frontend.photopage')}}" title="" data-ripple="">Photos</a>
									<a class="" href="{{route('frontend.videospage')}}" title="" data-ripple="">Videos</a>
									<a class="active" href="{{route('frontend.friendspage')}}" title="" data-ripple="">Friends</a>
									<a class="" href="{{route('frontend.groupspage')}}" title="" data-ripple="">Groups</a>
									<a class="" href="{{route('frontend.aboutpage')}}" title="" data-ripple="">about</a>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->

@endsection


@section('content')
<div class="col-lg-6">
								<div class="central-meta">
									<div class="frnds">
										<ul class="nav nav-tabs">
											 <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends</a> <span>55</span></li>
											 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>60</span></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active fade show " id="frends" >
											<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/friend-avatar9.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">jhon kates</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly1.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">sophia Gate</a></h4>
														<span>tv actresses</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly2.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">sara grey</a></h4>
														<span>work at IBM</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly3.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sexy cat</a></h4>
														<span>Student</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly4.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sara grey</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly5.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Amy watson</a></h4>
														<span>Study in university</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly6.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">caty lasbo</a></h4>
														<span>work as dancers</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly2.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Ema watson</a></h4>
														<span>personal business</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">unfriend</a>
														<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
													</div>
												</div>
											</li>
										</ul>
											<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
										  </div>
										  <div class="tab-pane fade" id="frends-req" >
											<ul class="nearby-contct">
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly5.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Amy watson</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>	

											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly1.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">sophia Gate</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly6.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">caty lasbo</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/friend-avatar9.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">jhon kates</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly2.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">sara grey</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly4.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sara grey</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/nearly3.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">Sexy cat</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
											<li>
												<div class="nearly-pepls">
													<figure>
														<a href="time-line.html" title=""><img src="{{asset('public/frontend/images/resources/friend-avatar9.jpg')}}" alt=""></a>
													</figure>
													<div class="pepl-info">
														<h4><a href="time-line.html" title="">jhon kates</a></h4>
														<span>ftv model</span>
														<a href="#" title="" class="add-butn more-action" data-ripple="">delete Request</a>
														<a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
													</div>
												</div>
											</li>
										</ul>	
											  <button class="btn-view btn-load-more"></button>
										  </div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
@endsection