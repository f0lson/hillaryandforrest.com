@extends('_layouts.master')

@section('meta-title', 'RSVP | Hillary &amp; Forrest | July 2nd, 2016 | Madison, Wisconsin')

@section('header-class', 'header-index')

@section('hero')
    <div id="hero" class="hero-index">
        <h1 class="hero-headline-index">R S V P</h1>
        <h4 class="hero-desc">Marshall Park<br>
            <hr class="half-rule">
            The Madison Concourse
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
                <h3>RSVP TO OUR WEDDING!</h3>
                <p>Please click on the button below in order to RSVP for our wedding. Make sure that you follow the instructions accordingly. If you have any questions regarding the RSVP form, please do not hesitate to call one of us and vent.</p>
                <p><strong>Hillary:</strong> <a href="tel:16084451299">608-445-1299</a></p>
                <p><strong>Forrest:</strong> <a href="tel:16085130449">608-513-0449</a></p>

                <a href="https://docs.google.com/forms/d/1KkB0a5WbuAwyTLEar-_bQLM3KovLZx-NPwUK8bW2d1o/viewform" target="_blank"><button class="ghost-btn ghost-btn-white ceremony-btn"><strong>CLICK HERE TO RSVP</strong></button></a>
            </div>

        </div>
    </section>
@endsection
