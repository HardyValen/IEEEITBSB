@section('title', 'Create Article')
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
            &larr; <a href='/dashboard/admin'>Dashboard</a>
            <div class='form-group'>
                <h2>Create Article</h2>
            </div>

            <form action="/dashboard/admin/blog-create" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="input"><b>Title</b></label><br>
                            <input type="text" name="title" class='form-control'> <br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="input"><b>Summary</b></label> <br>
                            <textarea name="summary" cols="80" rows="2" class='form-control'></textarea><br>
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="input"><b>Content</b></label>
                            <textarea class="form-control" name="editor" id="editor" class='form-control'></textarea>
                        </div>
                    </div>
                </div>
                    
                <div class="form-group mt-5">
                    <input type="submit" value="Submit" class='primary-button'>
                </div>
                    
                
            </form>

        </div>
    </div>
    

<script>

    //Activate CKEDITOR to textarea with name editor
    window.onload = function() {
        
		CKEDITOR.replace( 'editor', {
			filebrowserUploadUrl: "{{ route('upload',['_token' => csrf_token() ]) }}"
		});
	};
</script>
  @endsection