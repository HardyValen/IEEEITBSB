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

@section('title','Update Newsboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-admin')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
<div class="teaminfo-container">
    <div class="row teaminfo-member">
        <div class="col-12">
            &larr; <a href='/dashboard/admin'>Dashboard</a>
            <h2>Newsboard Editor</h2>

                @if(session()->has('message'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class='alert alert-dismissible fade show alert-success'>
                            <i class='fas fa-trash'></i>&ensp;&ensp;{{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endif

            <div class="table-responsive-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Summary</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>
                                @if (strlen($post->summary) <= 40)
                                    {{$post->summary}}
                                @else
                                    {{substr($post->summary, 0, 40)}} ...
                                @endif
                            </td>
                            <td>{{getDateShort($post->created_at)}}</td>
                            <td>
                            @if(Auth::user())
                                @if (Auth::user()->isAdmin==1)
                                    <p>
                                        [<a href="/blog/{{$post->id}}">View</a>] 
                                        [<a href="/dashboard/admin/blog-update/{{$post->id}}">Edit</a>] 
                                        [<a href="/blog/delete/{{$post->id}}">Delete</a>]
                                    </p>
                                @endif
                            @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
</div>

@endsection

