@extends('layouts.master')

@section('content')

          <hr>
               <section id="about" class="about">
                    <div class="container">

                         <div class="section-title">
                         <h2>SK Officials</h2>
                         </div>
          <hr>
          <div class="container">
               <br><br>
               <div class="row">
               @foreach($officials as $official)
                    <div class="col-md-3">
                              <img src="{{ Voyager::image( $official->image ) }}" style="width:100%">
                         <b>{{ $official->fname }}&nbsp;&nbsp;{{ $official->lname }}</b>
                         <br>{{ $official->brgy }}
                    

                    </div>
               @endforeach
               </div>
          </div>

@endsection