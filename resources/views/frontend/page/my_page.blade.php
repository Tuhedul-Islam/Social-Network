 @extends('frontend.index')

@section('header')
<section>
		<div class="feature-photo">
			<figure><img src="{{asset('public/profile/profile_banner/'.$image->profile_banner)}}" alt=""></figure>
			<div class="add-btn">
				<span>{{$requestcount}} followers</span>
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
								<img src="{{asset('public/profile/profile_image/'.$image->profile_image)}}" alt="">
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
								  <h5>{{Auth::user()->full_name}}</h5>
								  <span>{{Auth::user()->email}}</span>
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
									<h6>My Page List</h6>
									@foreach($my_page as $data)
									<ul class="list-group">

										  <li class="list-group-item bg-info text-white mb-2">
										  	<a href="{{route('my_page.view_page',$data->id)}}">{{$data->page_name}}</a>
										  	<a href="{{route('create_page.edit_page',$data->id)}}" class="btn btn-info btn-xs" style="margin-left: 527px;" > <i class='fa fa-edit' style='color: black;  '></i></a>

										  	<a href="{{route('create_page.delete_page',$data->id)}}" class="btn btn-info btn-xs" > <i class='fa fa-remove'></i></a>


										  </li>
										  
									</ul>

									
									@endforeach	
									
								</div><!-- add post new box -->
								<div class="">
								
								</div>
							</div><!-- centerl meta -->
@endsection