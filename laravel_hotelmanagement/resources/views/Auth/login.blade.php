


@extends('master')
@section('content')

<link rel="stylesheet" href="master-css/login.css">
<div class="contain">
    <form method="GET" action="{{ route('dashboard') }}">
    @csrf
            <div class="username">
                <input type="email" placeholder="USERNAME" name="email" required/>
            </div>
            <div class="password">
                <input type="password" placeholder="PASSWORD" name="password"  required/>
            </div>
            <div class="login">
                <span> <button class="log" type="submt">Log in</biutton></span>
               
    </form>
  </div>
</div>


@endsection