@extends('_layouts.master')

@section('meta-title', 'The Ceremony | Hillary &amp; Forrest')

@section('header-class', 'header-ceremony')

@section('hero')
    <div id="hero" class="hero-index">
        <h1 class="hero-headline-ceremony">the ceremony</h1>
        <h4 class="hero-desc">MARSHALL PARK<br>
            <hr class="half-rule">
            2101 Allen Blvd, Madison, WI 53705
        </h4>
        <img src="/img/caret.png" class="caret">
    </div>
@endsection

@section('content')
    <section class="sec">
        <div class="flex-container">
            <div class="img-container">
                <img src="/img/ring34.png" alt="The Wedding Ceremony" class="img-responsive">
            </div>
            <div class="flex-content">
                <h3>Celebrate With Us!</h3>
                <p class="">The ceremony is to be held at 3:30 PM on July 2nd, 2016 at the beautiful Marshall Park
                    located on the northwest shoreline of Lake Mendota in scenic Madison, Wisconsin.</p>

                <a href="https://www.google.com/maps/dir/''/marshall+park,+madison+wi/@43.0929459,-89.5531179,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x8807aead8fbe8f1d:0x8e133ce2706cc942!2m2!1d-89.4830781!2d43.0929673"
                   target="_blank">
                    <button class="ghost-btn ghost-btn-white ceremony-btn">click here for directions</button>
                </a>
            </div>

        </div>
    </section>
@endsection