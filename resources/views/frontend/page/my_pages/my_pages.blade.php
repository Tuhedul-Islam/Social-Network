@extends('frontend.index')

@section('header')
<section>
	@foreach($my_page as $data)
		<div class="feature-photo">
			<figure><img src="{{asset('public/post/banner/'.$data->banner)}}" alt=""></figure>
			
			
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>{{$data->page_name}}</h5>
								  <span>{{$data->email}}</span>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</section>

@endsection


@section('content')
          <div class="col-lg-6">
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
											<img src="{{asset('frontend/images/resources/admin2.jpg')}}" alt="">
										</figure>
										<div class="newpst-input">
											<form method="post" action="{{route('my_page.store')}}"  enctype="multipart/form-data">
												@csrf
												<textarea rows="2" name="page_post_content" placeholder="write something"></textarea>
												<div class="attachments">
													<ul>
														
														
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file"
																accept="image/png, image/jpeg,image/jpg"
																 name="image">
															</label>
														</li>
														
														
														<input type="hidden" name="username" id="" class="form-control" value="">
														<input type="hidden" name="user_id" id="" class="form-control" value="">

														<input type="hidden" name="page_id" id="" class="form-control" value="">

														<li>
															<button type="submit">Post</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div><!-- add post new box -->
								<div class="loadMore">
								
								
								
								
								</div>
							</div><!-- centerl meta -->
@endsection