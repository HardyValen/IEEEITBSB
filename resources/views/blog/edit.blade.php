@extends('layouts.dashboard')

@section('title', 'Page Title')

@section('content')
@if(Auth::user())
@if(Auth::user()->is_admin==1)
<form action="/update/{{$post->id}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="input">Title</label>
    <input type="text" name="title" value="{{$post->title}}"> <br>
        <label for="input">Content</label>
        <textarea class="form-control" name="editor" id="input" rows="20"></textarea>
        <input type="submit" value="Submit">
    </div>
</form>
<script src="{{URL::asset('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{URL::asset('js/ckfinder/ckfinder.js')}}"></script>
<script>
    window.onload = function() {
		CKEDITOR.replace( 'editor', {
			filebrowserUploadUrl: "{{ route('upload',['_token' => csrf_token() ]) }}",
        });
        
        CKEDITOR.instances['input'].setData(`{!!$post->body_html!!}`)
    };
</script>
@endif
@else
<h1>You Are Not Admin</h1>
@endif
@endsection