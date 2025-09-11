<div class="gallery-unit {{ $unit['displayMode'] === 'end' ? 'position-end' : '' }}">
    <div class="media-info">
        <h2>{{ $unit['title'] }}</h2>
        <p class="{{ $unit['displayMode'] === 'top' ? 'top-outlined' : '' }}">
            {{ $unit['caption'] }}
        </p>
    </div>
    <div class="gallery-image-block rel {{ $unit['cssClass'] }}">
        <img 
            role="presentation" 
            src="{{ asset($unit['image']) }}" 
            alt="{{ $unit['imageAlt'] }}" 
        />
    </div>
</div>
