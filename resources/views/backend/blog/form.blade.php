@extends ('layouts.backend')

@section('title',$post->exists ? 'Editing' : 'Add Post')

@section('content')
	<form method="{{$post->exists ? 'put' : 'post'}}"  action="{{$post->exists ? route('blog.update',$post->id) : route('blog.store')}}">
      {{ csrf_field() }}
      {{-- {{ method_field('PUT')}} --}}
   		<div class="form-group">
         <label for='title'>Title:</label>
         <input type="text" name="title" class="form-control" {{-- required="true" --}}>
   		</div>
   		<div class="form-group">
         <label for='slug'>Slug:</label>
         <input type="text" name="slug" class="form-control" {{-- required="true" --}}>
         <p class="help-block">
         	The slug is used to generate Links to a post.
         </p>
   		</div>
   		<div class="form-group">
         <label for='published'>Published At:</label>
         <input type="text" name="published" class="form-control" {{-- required="true" --}}>
   		</div>
   		<div class="form-group">
         <label for='excerpt'>Excerpt:</label>
         <textarea name="excerpt" class="form-control"></textarea>
   		</div>
   		<div class="form-group">
         <label for='body'>Body:</label>
         <textarea name="body" class="form-control"></textarea>
   		</div>
   		<input type="submit" value="{{$post->exists ? 'Save Changes':'Create New Post'}}" class="btn btn-primary">
	</form>
	<script type="text/javascript">
			new SimpleMDE({
				element: document.getElementsByName('body')[0]
			}).render();

			new SimpleMDE({
				element: document.getElementsByName('excerpt')[0]
			}).render();
	</script>

@stop