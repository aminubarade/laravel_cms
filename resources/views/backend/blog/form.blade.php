@extends ('layouts.backend')

@section('title',$post->exists ? 'Editing' : 'Add Post')

@section('content')
	<form method="POST"  action="{{$post->exists ? route('blog.update',$post->id) : route('blog.store')}}">
      {{ csrf_field() }}
       <input type="hidden" name="_method" value="{{$post->exists ? 'PUT' : 'POST' }}">
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
   		<div class="form-group row">
         <div class="col-md-12">
         <label for='published_at'>Published At:</label>
         </div>
         <div class="col-md-4">
         <input type="text" name="published_at" class="form-control" {{-- required="true" --}}>
   		</div>
         </div>
   		<div class="form-group excerpt">
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

         $('input[name=published_at]').datetimepicker({
            allowInputToggle: true,
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true,
            defaultDate: '{{ old('published_at', $post->published_at) }}'
        });

         $('input[name=title]').on('blur', function () {
            var slugElement = $('input[name=slug]');

            if (slugElement.val()) {
                return;
            }

            slugElement.val(this.value.toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, ''));
        });
	</script>

@stop
