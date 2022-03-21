@extends('layouts.master')

@section('content')
       <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{Voyager::image(setting('site.background'))}}')">
                <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="site-heading">
                                <h1>{!!setting('site.title')!!}</h1>
                                <span class="subheading">{!!setting('site.motto')!!}</span>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
         <!-- Main Content-->
                <hr>
                <p class="text-center" style="font-weight: bold" >Downloadable Files</p>
                <hr><br><br>
        <div class="align-items-center">
            <table align="center" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Filename</th>
                    <th scope="col">Date Uploaded</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                    <td>{{ $page->title }}</td>
                    <td><a href="{{ $page->image }}"><?php echo basename($page->image) ?></td>
                    <td>{{ $page->created_at ->format('M d Y')}}</td>
                    </tr>
                    @endforeach
                </tbody>
          </table>
        </div>
        

@endsection