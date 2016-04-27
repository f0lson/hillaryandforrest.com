@extends('_layouts.master')

@section('meta-title', 'Hillary &amp; Forrest | July 2nd, 2016 | Madison, Wisconsin')

@section('header-class', 'header-index')

@section('hero')
    <div id="hero" class="hero-index">
        <h1 class="hero-headline-index">July<span>2<sup>nd</sup></span>2016</h1>
        <h4 class="hero-desc">Marshall Park<br>
            <hr class="half-rule">
            The Madison Concourse
        </h4>
        <img src="img/caret.png" class="caret">
    </div>
@endsection

@section('content')
    <section class="sec">
        <div class="flex-container">
            <div class="img-container">
                <img src="img/ring34.png" alt="The Wedding Ceremony" class="img-responsive">
            </div>
            <div class="flex-content">
                <h3>Celebrate With Us!</h3>
                <p>The ceremony is to be held at 3:30 PM on July 2nd, 2016 at the beautiful Marshall Park located on the
                    northwest shoreline of Lake Mendota in scenic Madison, Wisconsin. </p>

                <a href="{{ $nav['ceremony']['link'] }}">
                    <button class="ghost-btn ghost-btn-white ceremony-btn">YAY! THEY'RE GETTING MARRIED!</button>
                </a>
            </div>

        </div>
    </section>

    <section class="sec content-purple">
        <div class="flex-container flex-container-reverse">
            <div class="img-container img-container-right">
                <img src="img/reception-black.png" alt="The Reception" class="img-responsive">
            </div>
            <div class="flex-content flex-content-right">
                <h3>Join us for the party!</h3>
                <p>Once the ceremony has concluded, it will be time for the real party! The Madison Concourse Hotel -
                    located two blocks off of the Capitol Square in downtown Madison - is the site of our
                    celebration.</p>

                <a href="{{ $nav['reception']['link'] }}">
                    <button class="ghost-btn ghost-btn-black">HELL YEAH! I LOVE PARTIES!</button>
                </a>
            </div>

        </div>
    </section>

    <section class="sec content-black">
        <div class="flex-container">
            <div class="img-container">
                <img src="img/gift32.png" alt="The Wedding Registry" class="img-responsive registry-icon">
            </div>
            <div class="flex-content">
                <h3>need a gift idea?</h3>
                <p>We're registered for a bunch of stuff at places like Target, Crate &amp; Barrel, and Bed Bath &amp;
                    Beyond. Some of the items are pretty, pretty, pretty (said in Larry David voice) neat.</p>

                <a href="{{ $nav['registry']['link'] }}">
                    <button class="ghost-btn ghost-btn-black">To the registries!</button>
                </a>
            </div>

        </div>
    </section>

    <section class="sec">
        <div class="flex-container flex-container-reverse">
            <div class="img-container img-container-right">
                <img src="img/hotel106.png" alt="The Hotels &amp; Accomodations" class="img-responsive">
            </div>
            <div class="flex-content flex-content-right">
                <h3>Need a hotel?</h3>
                <p>For all of our out of town guests, and those looking to have a good time, we've reseverved blocks of
                    rooms at The Madison Concourse Hotel and Hampton Inn (located 2 blocks south from the reception) to
                    meet any and all of your accomodations.</p>

                <a href="{{ $nav['hotels']['link'] }}">
                    <button class="ghost-btn ghost-btn-white">One hotel room, plz!</button>
                </a>
            </div>

        </div>
    </section>
@endsection
