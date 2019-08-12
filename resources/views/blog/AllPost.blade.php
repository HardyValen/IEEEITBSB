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
        <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 blog-card-container" id='blog-container'>
        @foreach($posts as $post)
            <div class="row">
                <a class='blog-card-link' href='/blog/{{$post->id}}'>
                    <div class="col-12 blog-card">
                        <h1>{{$post->title}}</h1>
                        <p class="blog-card-date">
                            {{getDateShort($post->created_at)}}
                        </p>
                        <p>
                            @if (strlen($post->summary) <= 160)
                                {{$post->summary}}
                            @else
                                {{substr($post->summary, 0, 160)}} ...
                            @endif
                        </p>
                    </div>
                </a>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="row">
            <div class="col-2">
                @if($posts->currentPage()-1 != 0)
                <a href='/blog?page=1' class='optional-button'>
                    <i class="fas fa-angle-double-left"></i>
                </a>
                @endif
            </div>
            <div class="col-8 d-flex justify-content-center">
                @if(!($posts->currentPage()-2 <= 0))
                    <a href='{{$posts->url($posts->currentPage()-2)}}' class='optional-button'>
                        {{$posts->currentPage()-2}}
                    </a>
                @endif
                @if(!($posts->currentPage()-1 <= 0))
                    <a href='{{$posts->previousPageUrl()}}' class='optional-button'>
                        {{$posts->currentPage()-1}}
                    </a>
                @endif
                <a href='/' class='primary-button'>
                    {{$posts->currentPage()}}
                </a>
                @if(!($posts->currentPage()+1 >= $posts->lastPage()+1))
                    <a href='{{$posts->nextPageUrl()}}' class='optional-button'>
                        {{$posts->currentPage()+1}}
                    </a>
                @endif
                @if(!($posts->currentPage()+2 >= $posts->lastPage()+1))
                    <a href='{{$posts->url($posts->currentPage()+2)}}' class='optional-button'>
                        {{$posts->currentPage()+2}}
                    </a>
                @endif
            </div>
            <div class="col-2 d-flex justify-content-end">
                @if($posts->currentPage() != $posts->lastPage())
                <a href='{{$posts->url($posts->lastPage())}}' class='optional-button'>
                    <i class="fas fa-angle-double-right"></i>
                </a>
                @endif
            </div>
        </div>
        <!-- End of Pagination -->
        </div>
    </div>    
</section>

@endsection

