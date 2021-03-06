@extends('layouts.default')
@section('title','login')
@section('content')

<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>Sign In</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group">
         <label for="email">email :</label>
         <input type="text" name="email" class="form-control" value="{{ old('email') }}">
         </div>

         <div class="form-group">
           <label for="password">password :</label>
           <input type="password" name="password" class="form-control" value="{{ old('password') }}">
         </div>


         <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
         
        <hr>
    
        <p>new to myweb?<a href="{{ route('signup') }}">create an account now</a></p>
</div>
</div>
</div>
@stop
