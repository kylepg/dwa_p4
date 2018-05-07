@extends('layouts.master') 
@section('content')
<section class="block overview">
    <div class="step-wrap">
        <h3 style="text-align: center"><span style="font-weight: 400">Want some cold brew?</span> Here's how it works:</h3>
        <div class="step">
            <div class="step-circle">1</div>
            <div class="step-text">
                <a href="/">Create an account</a>
                <p class="step-description">Just need your name, email, and venmo username.</p>
            </div>
        </div>
        <div class="step">
            <div class="step-circle">2</div>
            <div class="step-text">
                <p>Take as much coffee as you want</p>
                <p class="step-description">Measure it out using the provided cup.</p>
            </div>
        </div>
        <div class="step">
            <div class="step-circle">3</div>
            <div class="step-text">
                <p>Log your purchase</p>
                <p class="step-description">Use the button below to choose a quantity and pay.</p>
            </div>
        </div>
        <div class="step">
            <div class="step-circle">4</div>
            <div class="step-text">
                <p>Pay your monthly bill</p>
                <p class="step-description">On the 1st of each month, you'll recieve a venmo request.</p>
            </div>
        </div>
        {{--
        <div>
            <p><span class="step-circle">2</span> Take as much coffee as you want
            </p>
            <p class="step-description"><span class="step-circle">2</span>Measure it out using the provided cup.</p>
        </div>
        <div>
            <p><span class="step-circle">3</span> Log your purchase
            </p>
            <p class="step-description"><span class="step-circle">2</span>Use the button below to choose a quantity and pay.</p>
        </div>
        <div>
            <p><span class="step-circle">4</span> Pay your monthly bill
            </p>
            <p class="step-description"><span class="step-circle">2</span>On the 1st of each month, you'll recieve a venmo request.</p>
        </div> --}}
    </div>
</section>

<section class="block pay">
    <div class="qty-wrap">
        <div class="qty-btn-wrap">
            <div class="qty-btn subtract inactive">-</div>
            <p class="qty">$0.80</p>
            <div class="qty-btn add">+</div>
        </div>
        <a class="pay-btn btn">PAY FOR <span class="cup-count">1</span> CUP</a>
    </div>
</section>
<section class="block inventory">
    <div class="inventory-header">
        <h2>Inventory</h2>
        <p>Updated at <span> -- -- -- </span> by <span> --- --- --- </span></p>
    </div>
    <div class="inventory-item">
        <p>Cold Brew</p>
        <p class="inventory-status">LOW</p>
    </div>
    <div class="inventory-item">
        <p>Vanilla Cream</p>
        <p class="inventory-status">LOW</p>
    </div>
    <div class="inventory-item">
        <p>Beans</p>
        <p class="inventory-status">LOW</p>
    </div>
</section>
@endsection