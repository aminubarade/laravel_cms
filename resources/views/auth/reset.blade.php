@extends('layouts.auth')


@section('title','Reset Passsword')

@section('heading','Please enter your new password.')

@section('content')
   <form method="post" action="">
      <input name="token" type="hidden" value="token">
      {{ csrf_field() }}
   <div class="form-group">
         <label for='email'>Email:</label>
         <input type="email" name="email" class="form-control" {{-- required="true" --}}>
   </div>
   <div class="form-group">
         <label for='password'>Password:</label>
         <input type="password" name="password" class="form-control">
   </div>
   <div class="form-group">
         <label for='password_confirmation'>Password:</label>
         <input type="password" name="password_confirmation" class="form-control">
   </div>
   <input type="submit" name="login" class="btn btn-primary" value="Reset Password">
   <a href="#" class="small">Forgot Password</a>
   </form>
@endsection 