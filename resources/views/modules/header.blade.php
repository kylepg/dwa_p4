<ul class="nav">
    @foreach(config('app.nav') as $request => $navItem)
    <li class="nav-item">
        <a class="{{ Request::is($request) ? 'active' : '' }}" href="{{ $request }}">{{ $navItem }}</a>
    </li>
    @endforeach
</ul>