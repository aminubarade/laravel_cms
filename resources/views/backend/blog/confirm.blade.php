@extends('layouts.backend')

@section('title','Delete '.$post->title)

@section('content')
	<form method="POST" action="{{route('blog.destroy', $post->id)}}">
		 {{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<div class="alert alert-danger">
			<strong>Warning</strong> You are about to delete a Post. This action cannot be undone. Are you sure you want to continue?
			<input type="submit" name="" class="btn btn-danger" value="Yes, Delete This post">
			<a href="{{route('blog.index')}}" class="btn btn-success">No get me Out of here!</a>			
		</div>
	</form>
@endsection