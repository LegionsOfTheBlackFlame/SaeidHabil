
<section class="portraits container">
    <div class="portraits-unit-1">
        <h2>{{ $unit['section'] }}</h2>
        <div class="portrait-image-block">
            @foreach ($unit['images'] as $index => $mediaFile)
                <div role="presentation" class="img portraits-image-{{ $index + 1 }}">
                    <img src="{{ asset($mediaFile) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <div class="portraits-unit-2 rel">
        <h3>{{ $unit['subtitle'] }}</h3>
        <p>{{ $unit['description'] }}</p>
    </div>
</section>
