<a class="logo-wrap" href="/"><img class="logo" src="/images/kkcb-logo.svg" alt="Kyle's Killer Cold Brew Logo"/></a>
<ul class="nav">
    @foreach(config('app.nav') as $request => $navItem)
    <li class="nav-item {{ $request == 'login' ? 'btn' : '' }}">
        <a class="{{ Request::is($request) ? 'active' : '' }}" href="{{ $request }}">{{ $navItem }}</a>
    </li>
    @endforeach
</ul>