@extends('layouts.master') 
@section('content')
<div class="block register">
    <div class="option-wrap">
        <a href="/register" class="{{ Request::is('register') ? 'active' : '' }}">register</a>
        <a href="/login" class="{{ Request::is('login') ? 'active' : '' }}">log in</a>
    </div>
    @if($errors->any())
    <div class="">
        <ul class="">
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method='POST' action='{{ route("login") }}'>
        {{ csrf_field() }}

        <label for='email'>E-Mail</label>
        <input id='email' type='email' name='email' value='' required>

        <label for='password'>Password</label>
        <input id='password' type='password' name='password' required>

        <button type='submit' class='btn btn-primary'>submit</button>
    </form>
</div>
@endsection