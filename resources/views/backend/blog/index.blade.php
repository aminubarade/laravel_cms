@extends('layouts.backend')


@section('title','Posts')

@section('content')
	<a href="{{route('blog.create')}}" class="btn btn-primary">Create New Post</a>
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Title</th>
    			<th>Slug</th>
                <th>Author</th>
                <th>Published</th>
    			<th>Edit</th>
    			<th>Delete</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($posts as $post)
    			<tr>
    				<td><a href="{{route('blog.edit', $post->id)}}">{{$post->title}}</td>
    				<td>{{$post->slug}}</td>
                    <td>{{$post->author->name}}</td>
                    <td>{{$post->published_at or 'Not Published'}}</td>
    				<td>
    					<a href="{{route('blog.edit', $post->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
    				</td>
    				<td>
    					<a href="{{route('backend.blog.confirm', $post->id)}}"><span class="glyphicon glyphicon-remove"></span></a>
    				</td>
    			</tr>
    		@endforeach
    	</tbody>
    	
    </table>
@endsection