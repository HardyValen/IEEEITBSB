@extends('layouts.dashboard')

@section('title', 'Page Title')

@section('content')
@if(Auth::user())
@if(Auth::user()->isAdmin==1)
<form action="/submit" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="input">Title</label><br>
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