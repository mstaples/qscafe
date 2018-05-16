<div class="3u 12u(mobile)">
    <section>
        <a href="{{ route($feature['route']) }}" class="bordered-feature-image"><img src="{{ asset('images/'.$feature['image']) }}" alt="" /></a>
        <h2>{{ $feature['title'] }}</h2>
        <p>
            {{ $feature['body'] }}
        </p>
    </section>
</div>