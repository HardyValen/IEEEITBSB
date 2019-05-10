@extends('layouts.app')


@section('content')
<section class="landing-post">

    <div>
        <div>
            <br><br>
        </div>
        @foreach($posts as $post)
                <div class="blogcard-container">
                    <div class="blogcard-header">
                        <a href="/blog/{{$post->id}}"><h1>{{substr($post->title, 0,24)}}</h1></a>
                    </div>
                    <div class="blogcard-content">
                        <p>{{substr($post->summary, 0, 40)}}...</p>
                        <p><a href='/blog/{{$post->id}}'>see more &mdash;</a></p>
                        @if(Auth::user())
                        @if (Auth::user()->is_verified==0)
                            <p><a href="/blog/edit/{{$post->id}}">Edit</a></p>
                            <p><a href="/blog/delete/{{$post->id}}">Delete</a></p>
                        @endif
                        @endif
                    </div>
                </div>
                
            @endforeach
    </div>
     
</section>
@endsection

