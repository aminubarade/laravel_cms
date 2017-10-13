@extends('layouts.auth')

@section('title','Forgot Password')

@section('heading','Please provide your email to reset your password')

@section('content')
   <form method="post" action="">
      {{ csrf_field() }}
   <div class="form-group">
         <label for='email'>Email:</label>
         <input type="email" name="email" class="form-control" {{-- required="true" --}}>
   </div>
   <input type="submit" name="login" class="btn btn-primary" value="Send reset password link">
   </form>
@endsection 