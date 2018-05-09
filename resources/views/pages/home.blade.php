@extends('layouts.master') 
@section('content') @if(Auth::check()) @else
<section class="block overview">
    <div class="step-wrap">
        <h3 style="text-align: center"><span style="font-weight: 400">Want some cold brew?</span> Here's how it works:</h3>
        <div class="step">
            <div class="step-circle">1</div>
            <div class="step-text">
                <a href="/register">Create an account</a>
                <p class="step-description">Register with your name, email, & venmo username.</p>
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
    </div>
</section>
@endif
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
        <h2>Inventory</h2><img class="edit-icon" src="/images/edit.svg" alt="Edit icon" />
        <p>Updated at <span style="font-weight: 400">{{ $updated_at }}</span> by <span style="font-weight: 400">{{ $updated_by_fn }} {{ $updated_by_ln }}</span></p>
    </div>
    <div class="inventory-item">
        <div class="delete-btn inactive">-</div>
        <p>Cold Brew</p>
        <p class="inventory-status">LOW</p>
    </div>
    <div class="inventory-item">
        <div class="delete-btn inactive">-</div>
        <p>Vanilla Cream</p>
        <p class="inventory-status">LOW</p>
    </div>
    <div class="inventory-item">
        <div class="delete-btn inactive">-</div>
        <p>Beans</p>
        <p class="inventory-status">LOW</p>
    </div>
    <div class="delete-btn inactive">-</div>
</section>
@endsection