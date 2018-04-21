@extends('layouts.base')

@section('banner')
<div class="container">
    <div class="row">
        <div class="6u 12u(mobile)">

            <!-- Banner Copy -->
            <p>We do something really useful, important, and unique. Learn all about it here ...</p>
            <a href="#" class="button-big">Go on, click me!</a>

        </div>
        <div class="6u 12u(mobile)">

            <!-- Banner Image -->
            <a href="#" class="bordered-feature-image"><img src="{{ asset('images/banners/'.$banner) }}" alt="" /></a>

        </div>
    </div>
</div>
@endsection

@section('body')
<div id="features-wrapper">
    <div id="features">
        <div class="container">
            <div class="row">
                @foreach ($features as $feature)
                    @include('layouts.feature', [ 'feature' => $feature])
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
