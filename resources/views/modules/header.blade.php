<a class="logo-wrap" href="/"><img class="logo" src="/images/kkcb-logo.svg" alt="Kyle's Killer Cold Brew Logo"/></a>
<ul class="nav">
    @foreach(config('app.nav') as $request => $navItem)
    <li class="nav-item {{ $request == 'login' ? 'btn' : '' }}">
        <a class="{{ Request::is($request) ? 'active' : '' }}" href="{{ URL::to($request) }}">{{ $navItem }}</a>
    </li>
    @endforeach {{-- --}} @if(Auth::check())
    <li class="nav-item">
        <a class="{{ Request::is('account/'.$user->id) ? 'active' : '' }}" href="/account/{{ $user->id }}">my account</a>
    </li>
    @else
    <li class="nav-item">
        <a class="{{ Request::is('login') || Request::is('register') ? 'active' : '' }}" href="/login">log in</a>
    </li>
    @endif
</ul>