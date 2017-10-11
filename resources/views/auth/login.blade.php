@extends('layouts.auth')


@section('title','Login')

@section('heading','Welcome please login.')

@section('content')
   {{-- {!! Form::open !!}
   <div class="form-group">
   		{!! Form::label('email') !!}
   		{!! Form::text('email',null,['class' =>'form-control']) !!}
   </div>

   <div class="form-group">
   		{!! Form::label('password') !!}
   		{!! Form::text('email',['class' =>'form-control']) !!}
   </div>
   {!! Form::submit('Login',['class' =>'btn btn-primary']) !!}

   <a href="#" class="small">Forgot Password</a>
   {!! Form::open !!} --}}
   <form method="post" action="">
      {{ csrf_field() }}
   <div class="form-group">
         <label for='email'>Email:</label>
         <input type="email" name="email" class="form-control" {{-- required="true" --}}>
   </div>
   <div class="form-group">
         <label for='password'>Password:</label>
         <input type="password" name="password" class="form-control">
   </div>
   <input type="submit" name="login" class="btn btn-primary" required="true">
   <a href="#" class="small">Forgot Password</a>
   </form>
@endsection 