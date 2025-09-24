<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    
</head>
<body>
@extends('layouts.app')

@section('content')
 <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
   
   <form method="POST" action="{{ route('register') }}">
     @csrf   
     <h3>Register</h3>
            
   <label for="name" >{{ __('Name') }}</label>
    <input id="name" type="text" class=" @error('name') is-invalid @enderror" 
    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      @error('name')
      <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
       @enderror              
<label for="email" >{{ __('Email Address') }}</label>                          
<input id="email" type="email" class=" @error('email') is-invalid @enderror" 
name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
     <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
       </span>
       @enderror  
       <label for="is_admin" >{{ __('Role') }}</label>                          
<input id="is_admin" type="number" class=" @error('is_admin') is-invalid @enderror" 
name="is_admin" value="{{ old('is_admin') }}" required autocomplete="is_admin">
    @error('is_admin')
     <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
       </span>
       @enderror                             
 <label for="password" >{{ __('Password') }}</label>                 
<input id="password" type="password" class=" @error('password') is-invalid @enderror"
 name="password" required autocomplete="new-password">
@error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
       </span>
 @enderror                    
   <label for="password-confirm" >{{ __('Confirm Password') }}</label>
     <input id="password-confirm" type="password" 
      name="password_confirmation" required autocomplete="new-password">                 
    <button type="submit" class="z" >
     {{ __('Register') }}
     </button>  
                         
</form>     
@endsection
</body>
</html>