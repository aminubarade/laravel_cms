@extends('layouts.backend')


@section('title', $user->exists ?'Editing '.$user->name : 'Create New User')

@section('content')

{{-- {!! Form::model($user, [
        'method' => $user->exists ? 'put' : 'post',
        'route' => $user->exists ? ['backend.users.update', $user->id] : ['backend.users.store']
    ]) !!} --}}

	<form method="{{$user->exists ? 'put' : 'post'}}"  action="{{$user->exists ? route('users.update',$user->id) : route('users.store')}}">
      {{ csrf_field() }}
      {{-- {{ method_field('PUT')}} --}}
   		<div class="form-group">
         <label for='name'>Name:</label>
         <input type="text" name="name" class="form-control" {{-- required="true" --}}>
   		</div>
   		<div class="form-group">
         <label for='email'>Email:</label>
         <input type="email" name="email" class="form-control" {{-- required="true" --}}>
   		</div>
   		<div class="form-group">
         <label for='password'>Password:</label>
         <input type="password" name="password" class="form-control" {{-- required="true" --}}>
   		</div>
   		<div class="form-group">
         <label for='cpassword'>Password Confirmation:</label>
         <input type="password" name="cpassword" class="form-control" {{-- required="true" --}}>
   		</div>
   		<input type="submit" value="{{$user->exists ? 'Save user':'Create New User'}}" class="btn btn-primary">
	</form>
@endsection