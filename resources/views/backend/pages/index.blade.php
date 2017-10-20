@extends('layouts.backend')

@section('title', 'Pages')

@section('content')
	<a href="{{route('pages.create')}}" class="btn btn-primary">Create New Page</a>
	<table class="table table-hover">
    	<thead>
    		<tr>
    			<td>Title</td>
    			<td>URI</td>
    			<td>Name</td>
    			<td>Edit</td>
    			<td>Delete</td>
    		</tr>
    	</thead>
    	<tbody>
    		@if($pages->isEmpty())
    		<tr>
    			<td colspan="5" align="center">No Pages To Display</td>
    		</tr>

    		@else

    			@foreach($pages as $page)
    				<tr>
    					<td>
    						<a href="{{route('pages.edit',$page->id)}}">{{$page->title}}</a>
    					</td>
    					<td><a href="{{url($page->uri)}}">{{'/'.ltrim($page->uri, '/')}}</a></td>
    					<td>{{$page->name or 'None'}}</td>
    					<td>
    						<a href="{{route('pages.edit',$page->id)}}"><span class="glyphicon glyphicon-edit"></a>
    					</td>
    					<td>
    						<a href="{{route('backend.pages.confirm',$page->id)}}"><span class="glyphicon glyphicon-remove"></a>
    					</td>
    				</tr>

    			@endforeach

    		@endif

    			
    	</tbody>
    	
    </table>
@endsection