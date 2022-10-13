@extends('layouts.default')
@section('content')
    <div class="content animate-panel">
    	<div class="card">
    		<h2>User Control</h2>
        <div class="row">
            <div class="col-lg-12 text-center">
             

                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
            	<th>ID</th>
                <th>User name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Approved User</th>

            </tr>
        </thead>
        <tbody>
            	@foreach($approve_user as $data)
					<tr>
						
						<td>{{$loop->iteration}}</td>
						<td>{{$data->full_name}}</td>
						<td>{{$data->email}}</td>
						<td> <img height="50px" width="40px" src="{{asset('public/profile/profile_image/'.$data->profile_image)}}" alt="not found"></td>

						
						<td>
							@if($data->panding_id==1)
							<button class="btn btn-success" ><a href="{{route('change-user-status',$data->id)}}"style="color:white;">Approved user</a></button>
							@else
							<button class="btn btn-warning" ><a href="{{route('change-user-status',$data->id)}}"style="color:white;">panding user</a></button>
							@endif
						</td>
	
					</tr>
					@endforeach
          
        </tbody>
    </table>

                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>
        </div>
    </div>


@stop


@section('js')





    <script>
        $(document).ready(function(){

            $('.randColorChange').each(function() {
                $(this).css('background',randomColor());
                $(this).css('color','white');
                $(this).css('text-align','center');

            });

        });

        var safeColors = ['11','33','66','99','cc','ee'];//["#00e64d","#ff80aa","#990099","#30DDBC","#ff8533"];
        var rand = function() {
            return Math.floor(Math.random()*6);
        };
        var randomColor = function() {
            var r = safeColors[rand()];
            var g = safeColors[rand()];
            var b = safeColors[rand()];
            return "#"+r+g+b;
            //return r;
        };
    </script>

    <script type="text/javascript">
    	$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
          } );
 
    new $.fn.dataTable.FixedHeader( table );
         } );
    </script>
@endsection
