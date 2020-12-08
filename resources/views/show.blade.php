@extends('layouts.app')

@section('content')
	
	<title>{{$post->title}}</title>
	<div class="container">
		<a href="/posts" class="btn btn-secondary !important;">Go Back</a>
	</div>
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-10">
	            <div class="card" style="width: 100%">
					<div class="container" style="width: 100% !important; height: 100% !important;">
						<br>
						<div class="content">
							<h1>{{$post->title}}</h1>
							<img style="width:15%;" src="/storage/cover_images/{{$post->cover_image}}">
						</div>

						<hr>

						<div class="card-body">
							
							{!!$post->body!!}
						</div>
					</div>
					<div class="container">
						<hr>
						<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
						<hr>
						@if(!Auth::guest())
							@if(Auth::user()->id == $post->user_id)
								<div class="container">
									<div class="row" style="position: relative; text-align:;">
										<a href="/posts/{{$post->id}}/edit" class="btn btn-info !important;">Edit</a>
										{!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

											{{Form::hidden('_method', 'DELETE')}}
											{{Form::submit('Delete', ['class' => 'btn btn-danger',])}}

										{!!Form::close()!!}
									</div>
								</div>
							@endif
						@endif
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection