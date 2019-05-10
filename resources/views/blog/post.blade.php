@extends('layouts.app')

@section('content')
<section class='generic-container'>
    <div class="generic-content__text" style='width:100%;'>

        <div class="row">
            <div class="offset-lg-2 col-lg-8">

                <div class="blog-container">
                    <div class="blog-header">
                        <h1>{{$post->title}}</h1>
                        <p>Creation Date &mdash; {{$post->created_at}}</p>
                    </div>
                    <div class="blog-content">
                        {!! $post->body_html !!}
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>
@endsection