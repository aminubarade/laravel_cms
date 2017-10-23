@extends('layouts.backend')

@section('title', $page->exists ?'Editing '.$page->title : 'Create New Page')

@section('content')
	<form method="POST"  action="{{$page->exists ? route('pages.update',$page->id) : route('pages.store')}}">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="{{$page->exists ? 'PUT' : 'POST' }}">
      {{-- {{ method_field('PUT')}} --}}
   		<div class="form-group">
         <label for='title'>Title:</label>
         <input type="text" name="title" class="form-control" {{-- required="true" --}}>
   		</div>
   		<div class="form-group">
         <label for='uri'>URI:</label>
         <input type="text" name="uri" class="form-control" {{-- required="true" --}}>
   		</div>
   		<div class="form-group">
         <label for='name'>Name:</label>
         <input type="text" name="name" class="form-control" {{-- required="true" --}}>
         <p class="help-block">
         	The name is used to generate Links to the page.
         </p>
   		</div>
   		<div class="form-group">
         <label for='content'>Content:</label>
         <textarea name="content" class="form-control"></textarea>
   		</div>
   		<input type="submit" value="{{$page->exists ? 'Save Changes':'Create New Page'}}" class="btn btn-primary">
	</form>
	<script type="text/javascript">
			new SimpleMDE().render();
	</script>
@endsection