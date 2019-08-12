<?php
            function getMonthNameShort($x){
                if ($x == '01'){
                    return "Jan";
                } else if ($x == '02'){
                    return "Feb";
                } else if ($x == '03'){
                    return "Mar";
                } else if ($x == '04'){
                    return "Apr";
                } else if ($x == '05'){
                    return "May";
                } else if ($x == '06'){
                    return "Jun";
                } else if ($x == '07'){
                    return "Jul";
                } else if ($x == '08'){
                    return "Aug";
                } else if ($x == '09'){
                    return "Sep";
                } else if ($x == '10'){
                    return "Oct";
                } else if ($x == '11'){
                    return "Nov";
                } else if ($x == '12'){
                    return "Dec";
                } else {
                    return "";
                }
            }

            function getDateShort($x){
                $tahun = substr($x, 0, 4);
                $bulan = getMonthNameShort(substr($x, 5, 2));
                $tanggal = substr($x, 8, 2);

                return $bulan." ".$tanggal.", ".$tahun;
            }
        ?>
        
@extends('layouts.blog')

@section('content')
<section class="newsboard-container-body" id="newsboard-body">
@include('blog.subsection.nav')
    <div class="row">
        <div class="offset-md-3 col-lg-6 offset-md-2 col-md-8 article-navigation d-flex justify-content-between">
            @if($previous)
                <a href="/blog/{{($previous)}}#newsboard-body" class='optional-button'>
                    <i class="fas fa-arrow-circle-left fa-lg"></i>&ensp;Previous
                </a>
            @else
                <a href="/blog#newsboard-body" class='optional-button'>
                    <i class="fas fa-home fa-lg"></i>&ensp;Newsboard
                </a>
            @endif
            @if($next)
                <a href="/blog/{{($next)}}#newsboard-body" class='optional-button'>
                    Next&ensp;<i class="fas fa-arrow-circle-right fa-lg"></i>
                </a>
            @else
            <a href="/blog#newsboard-body" class='optional-button'>
                <i class="fas fa-home fa-lg"></i>&ensp;Newsboard
            </a>
            @endif
        </div>

        <div class="offset-md-3 col-lg-6 offset-md-2 col-md-8 article-header">
            <h1>{{$post->title}}</h1>
            <p>Creation Date &mdash; {{getDateShort($post->created_at)}}</p>
        </div>
        <div class="offset-md-3 col-lg-6 offset-md-2 col-md-8 article-body">
            {!! $post->body_html !!}
        </div>
    </div>    
</section>
@endsection
