@extends('layouts.master') 
@section('content')
<div class="block register">
    <div class="option-wrap">
        <a href="/register" class="{{ Request::is('register') ? 'active' : '' }}">register</a>
        <a href="/login" class="{{ Request::is('login') ? 'active' : '' }}">log in</a>
    </div>
    <form method='POST' action='{{route("register")}}'>
        {{ csrf_field() }}

        <label for='first_name'>First name</label>
        <input id='first_name' type='text' name='first_name' value='{{ old(' first_name ')}}'required autofocus>

        <label for='last-name'>Last name</label>
        <input id='last_name' type='text' name='last_name' value='{{ old(' first_nghame ')}}'required>

        <label for='venmo_username'>Venmo username</label>
        <input id='venmo_username' type='venmo_username' value='' name='venmo_username' required>

        <label for='email'>E-Mail</label>
        <input id='email' type='email' name='email' value='' required>

        <label for='password'>Password</label>
        <input id='password' type='password' name='password' value='' required>

        <label for='password-confirm'>Confirm Password</label>
        <input id='password-confirm' type='password' value='' name='password_confirmation' required>

        <button type='submit' class='btn'>submit</button>
    </form>
</div>
@if($errors->any())
<div class="row collapse">
    <ul class="alert-box warning radius">
        @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>
@endif
@endsection