@extends('_layouts.master')

@section('meta-title', 'Wedding Registries | Hillary &amp; Forrest')

@section('header-class', 'header-registry')

@section('hero')
    <div id="hero" class="hero-registry">
        <h1 class="hero-headline-ceremony">Wedding Registries</h1>
        <h4 class="hero-desc">Here's stuff that you can buy us!<br>
            <hr class="half-rule">
            Or don't... Either way, either way's fine...
        </h4>
        <img src="/img/caret.png" class="caret">
    </div>
@endsection

@section('content')
    <section class="sec">
        <div class="flex-container">
            <div class="img-container">
                <img src="/img/gift32.png" alt="The Wedding Registry" class="img-responsive registry-icon">
            </div>
            <div class="flex-content">
                <h3>need a gift idea?</h3>
                <p class="">We're registered for a bunch of stuff at places like Target, Crate &amp; Barrel, and Bed
                    Bath &amp; Beyond. Please look through each registry at your convenience.</p>
            </div>

        </div>
    </section>

    <div class="sec sec-2">
        <div class="flex-container">
            <div class="img-container">
                <img src="/img/target.png" class="hotel-logo-lg">
            </div>
            <div class="flex-content">
                <h3>Target</h3>
                <img src="/img/target.png" class="hotel-logo-sm">
                <p>Yeah, so... here's the first store that we registered at. There's a plethora of options on there, so
                    if you feel oligated to buy us something, you'll have a wide range of items to choose from.</p>
                <a href="https://www-secure.target.com/gift-registry/giftgiver?registryId=xJe7es2Nd0p31LYYkdws-g&registryType=WEDDING"
                   target="_blank">
                    <button class="ghost-btn ghost-btn-black">TARGET LOOKS DOPE</button>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="sec sec-3">
        <div class="flex-container">
            <div class="img-container">
                <img src="/img/CrateBarrelLogo.jpg" class="hotel-logo-lg container">
            </div>
            <div class="flex-content">
                <h3>Crate &amp; Barrel</h3>
                <img src="/img/CrateBarrelLogo.jpg" class="hotel-logo-sm container">
                <p>Only two options for gifts here: Crates or Barrels. Neither are on our registry, so technically
                    there's no need for me to even put this unnecessarily lengthy placeholder text here. Unless I'm
                    lying... Which I'm totally not doing... Or am I? Your move...</p>
                <a href="http://www.crateandbarrel.com/gift-registry/hillary-wilson-and-forrest-olson/r5440444"
                   target="_blank">
                    <button class="ghost-btn ghost-btn-white ceremony-btn">I'll dabble</button>
                </a>
            </div>
        </div>
    </div>

    <div class="sec sec-2">
        <div class="flex-container">
            <div class="img-container">
                <img src="/img/bed-bathfix.png" class="hotel-logo-lg">
            </div>
            <div class="flex-content">
                <h3>BED BATH &amp; BEYOND</h3>
                <img src="/img/bed-bathfix.png" class="hotel-logo-sm">
                <p>We actually went to the store, and did the scanner gun thing like they always do in the movies. It
                    was dope as hell! Lots of bedding and bathroom items here. I think there's a citrus reemer on there
                    too! We love our citrus.</p>
                <a href="http://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&eventType=Wedding&registryId=542995029&pwsurl="
                   target="_blank">
                    <button class="ghost-btn ghost-btn-black">LIke the adam sandler movie "Click"?</button>
                </a>
            </div>
        </div>
    </div>
@endsection