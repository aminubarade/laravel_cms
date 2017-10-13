@extends('layouts.backend')


@section('title','Users')

@section('content')
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Name</th>
    			<th>Email</th>
    			<th>Edit</th>
    			<th>Delete</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($users as $user)
    			<tr>
    				<td>{{-- <a href="{{route('users.edit')}}">{{$user->name}} --}}{{$user->name}}</td>
    				<td>{{$user->email}}</td>
    				<td>
    					{{-- <a href="{{route('users.edit', $user->id)}}"> --}}<span class="glyphicon glyphicon-edit"></span></a>
    				</td>
    				<td>
    					<a href="{{route('backend.users.confirm', $user->id)}}"><span class="glyphicon glyphicon-remove"></span></a>
    				</td>
    			</tr>
    		@endforeach
    	</tbody>
    	
    </table>
@endsection