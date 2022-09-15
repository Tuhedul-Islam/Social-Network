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
									<a class="active" href="{{route('frontend.photopage')}}" title="" data-ripple="">Photos</a>
									<a class="" href="{{route('frontend.videospage')}}" title="" data-ripple="">Videos</a>
									<a class="" href="{{route('frontend.friendspage')}}" title="" data-ripple="">Friends</a>
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
					<ul class="photos">

						<li>
							<a class="strip" href="images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo2.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo3.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-44.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo4.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-55.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo5.jpg')}}" alt=""></a>
						</li>

						<li>
							<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo6.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-77.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo7.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-88.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo8.jpg')}}" alt=""></a>
						</li>

						<li>
							<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo12.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo10.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-101.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo11.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo1.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo9.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo12.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo6.jpg')}}" alt=""></a>
						</li>
						<li>
							<a class="strip" href="images/resources/photo-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
								<img src="{{asset('public/frontend/images/resources/photo13.jpg')}}" alt=""></a>
						</li>
					</ul>
					<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
				</div><!-- photos -->
			</div><!-- centerl meta -->
@endsection