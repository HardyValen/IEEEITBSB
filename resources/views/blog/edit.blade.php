@section('title', 'Edit '.$post->title)
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-admin')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-admin')
@endsection

@section('content')
<div class="row editor-container">
        <div class="col-lg-8 offset-lg-2">
            &larr; <a href='/dashboard/admin'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/admin/blog-update'>Update Articles</a>
            <div class='form-group'>
                <h2>Update {{$post->title}}</h2>
            </div>

            <form action="/dashboard/admin/blog-update/{{$post->id}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <label for="input"><b>Title</b></label><br>
                            <input type="text" name="title" value='{{$post->title}}' class='form-control'> <br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input"><b>Summary</b></label> <br>
                            <input type="text" name="summary" class='form-control' value='{{$post->summary}}'><br>
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input"><b>Content</b></label>
                            <textarea class="form-control" name="editor" id="input" class='form-control'></textarea>
                        </div>
                    </div>
                </div>
                    
                <div class="form-group mt-5">
                    <input type="submit" value="Update Article" class='primary-button'>
                </div>
                
            </form>

        </div>
    </div>

<script src="{{URL::asset('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{URL::asset('js/ckfinder/ckfinder.js')}}"></script>
<script>
    window.onload = function() {
		CKEDITOR.replace( 'editor', {
			filebrowserUploadUrl: "{{ route('upload',['_token' => csrf_token() ]) }}",
        });
        
        CKEDITOR.instances['input'].setData(`{!!$post->body_html!!}`);
    };
</script>
@endsection