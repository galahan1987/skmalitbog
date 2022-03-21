@extends('layouts.master')

@section('content')
 <!-- Page Header-->
 <header class="masthead" style="background-image: url('{{Voyager::image(setting('site.background'))}}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>{!!setting('site.title')!!}</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
     <!-- Main Content-->

     <div class="container">
		<br><br>
		<div class="row">
		@foreach($posts as $post)
			<div class="col-md-4">
				<a href="/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:90%">
				</a>
			</div>
		@endforeach
		</div>
	</div>

@endsection