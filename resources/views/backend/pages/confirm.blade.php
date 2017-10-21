
@extends('layouts.backend')

@section('title','Delete '.$page->title)

@section('content')
	<form method="" action="{{route('pages.destroy', $page->id)}}">
		<div class="alert alert-danger">
			<strong>Warning</strong> You are about to delete a Page. This action cannot be undone. Are you sure you want to continue?
			<input type="submit" name="" class="btn btn-danger" value="Yes, Delete This page">
			<a href="{{route('pages.index')}}" class="btn btn-success">No get me Out of here!</a>			
		</div>
	</form>
@endsection