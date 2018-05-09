@extends('layouts.master') 
@section('content')
<section class="block account">
    <div class="title-wrap">
        <h2>{{ $user->first_name }}{{ substr($user->first_name, -1) == 's' ? "'" : "'s"}} Account</h2>
        <form method='POST' id='logout' action='/logout'>{{ csrf_field() }}<a href="#" class="btn" onClick="document.getElementById('logout').submit();">log out</a></form>
    </div>
    <p>Lorem ipsum dolor sit amet, ei sea viris commune, ad mei fabellas deserunt. At eam elit omnium, eu has odio definitiones.
        Eam causae timeam ea. Duo cu vide novum. Ad sed decore referrentur, amet dicat mazim no sed, ea est veniam decore
        ullamcorper. In vix exerci dolores efficiantur.</p>
    <p> Justo facilisis an qui. Ad his convenire erroribus. Eam brute sapientem signiferumque ut, te dicant praesent torquatos
        mei, ut has suas suscipit efficiantur. Ex sit novum petentium consetetur.</p>
    <p> Et ius exerci convenire similique. Per id modus inermis, has rebum aliquid te, ne mei everti signiferumque. Ea est aliquip
        salutandi, falli vitae in nec. Ne ius hinc neglegentur, no impedit omittantur vituperatoribus ius.</p>
    <h3>Awards</h3>
</section>
@endsection