@extends('layouts.master')

@section('content')

            <!-- ======= Post Section ======= -->
                <section id="about" class="about">
                <div class="container">

                    <div class="section-title">
                    <h2>About Us</h2>
                    </div>

                    <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ Voyager::image( $post->image ) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                        <h3>{{ $post->title }}</h3>
                        <p class="font-italic">
                        {!!$post->body!!}
                        </p>
                        <p>
                        Posted by on {{ $post->created_at }}
                    </div>
                    </div>

                </div>
                 </section>
            <!-- End Post Section -->

@endsection
