@extends('layouts.master')

@section('content')

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                <h2>About Us</h2>
                </div>

                <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{Voyager::image(setting('site.background'))}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                    <p class="font-italic">
                    {!!setting('site.about')!!}
                    </p>
                </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Latest Post Section ======= -->
        <hr>
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                <h2>Latest Post</h2>
                </div>
        <hr>
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
        </section><!-- End Latest Section -->
     
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="/blog">View All Post →</a></div>

@endsection