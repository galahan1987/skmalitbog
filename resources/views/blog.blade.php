@extends('layouts.master')

@section('content')

<hr>
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                <h2>All Post</h2>
                </div>
        <hr>
     <div class="container">
		<br><br>
		<div class="row">
		@foreach($posts as $post)
			<div class="col-md-3">
			  <a href="/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				  <h5>{{ $post->title }}</h5>
			  </a>
                <p style="font-size: small">{{ $post->created_at->format('M d Y') }}</p>
                    
                
			</div>
		@endforeach
		
		</div>
	</div>
	<div>
			<br><br>
		  <div align="right">{{$posts-> links()}}</div>
		</div>
@endsection