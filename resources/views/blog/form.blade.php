@section('title', 'Write a Post')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
@if(Auth::user())
@if(Auth::user()->is_admin==1)
<form action="/submit" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="input">Title</label>
        <input type="text" name="title"> <br>
        <label for="input">Summary</label> <br>
        <textarea name="summary" cols="80" rows="5"></textarea> <br>
        <label for="input">Content</label>
        <textarea class="form-control" name="editor" id="input" rows="20"></textarea>
        <input type="submit" value="Submit">
    </div>
</form>
<script src="js/ckeditor/ckeditor.js"></script>
<script src="js/ckfinder/ckfinder.js"></script>
<script>
    //Activate CKEDITOR to textarea with name editor
    window.onload = function() {
		CKEDITOR.replace( 'editor', {
			filebrowserUploadUrl: "{{ route('upload',['_token' => csrf_token() ]) }}"
		});
	};
</script>
@else
You are not Admin
@endif
@else
Please login
@endif
  @endsection