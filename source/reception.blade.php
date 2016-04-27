@extends('_layouts.master')

@section('meta-title', 'The Reception | Hillary &amp; Forrest')

@section('header-class', 'header-reception')

@section('hero')
    <div id="hero" class="hero-index">
        <h1 class="hero-headline-ceremony">the reception</h1>
        <h4 class="hero-desc">The Madison Concourse Hotel<br>
            <hr class="half-rule">
            1 W Dayton St, Madison, WI 53703
        </h4>
        <img src="/img/caret.png" class="caret">
    </div>
@endsection

@section('content')
    <section class="sec">
        <div class="flex-container">
            <div class="img-container">
                <img src="/img/reception.png" class="img-responsive" alt="The Party">
            </div>
            <div class="flex-content">
                <h3>Join us for the party!</h3>
                <p class="">Once the ceremony has concluded, it will be time for the real party! The Madison Concourse
                    Hotel - located two blocks off of the Capitol Square in downtown Madison - is the site of our
                    celebration.</p>

                <a href="https://www.google.com/maps/dir/''/madison+concourse/data=!4m5!4m4!1m0!1m2!1m1!1s0x8806533887ba5c9f:0x56dbb1423adefed0?sa=X&ved=0ahUKEwjM05eP4dnKAhXK4yYKHQKYAosQ9RcIgwEwDg"
                   target="_blank">
                    <button class="ghost-btn ghost-btn-white ceremony-btn">click here for directions</button>
                </a>
            </div>

        </div>
    </section>
@endsection