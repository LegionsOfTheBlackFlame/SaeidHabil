<div class="gallery">
    @foreach($gallery as $unit)
        <div class="gallery-unit">
            <div class="media-info">
                <h2>{{ $unit['title'] }}</h2>
                <p>{{ $unit['text'] }}</p>
            </div>
            <div class="media-wrapper">
                <img src="{{ asset($unit['media']) }}" alt="">
            </div>
        </div>

        {{-- Divider row --}}
        <div class="divider-row">
            <div></div>
            <div></div>
            <div class="divider-cell"></div>
        </div>
    @endforeach
</div>


@foreach ($portraits as $portrait)
    <div class="section-2">
        <div class="section-2-unit-1">
            <h2>{{ $portrait['section'] }}</h2>
            
            <div class="image-wrapper">
                @foreach ($portrait['media'] as $index => $media)
                    {{-- Preserve your .section-2-image-* naming pattern --}}
                    <div class="img section-2-image-{{ $loop->iteration }}">
                        <img src="{{ asset($media) }}" alt="" loading="lazy" />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="section-2-unit-2 gu1">
            <p>{{ $portrait['text1'] }}</p>
            <p>{{ $portrait['text2'] }}</p>
        </div>    
    </div>
@endforeach