@extends('layouts.backend')

@section('title', 'Pages')

@section('content')
	<form method="{{$page->exists ? 'put' : 'post'}}"  action="{{$page->exists ? route('page.update',$user->id) : route('users.store')}}">
      {{ csrf_field() }}
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
   		<input type="submit" value="{{$page->exists ? 'Save Page':'Create New Page'}}" class="btn btn-primary">
	</form>
	<script type="text/javascript">
			new SimpleMDE().render();
	</script>
@endsection