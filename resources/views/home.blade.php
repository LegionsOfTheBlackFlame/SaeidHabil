@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="section-hero bb">
        <div class="hero-image-wrapper">
            <img class="hero-image" src="{{ asset('hero-img.jpg') }}"  alt="Portrait of Saeid Habil"/>
        </div>
        <div class="hero-content">
            <h4>Hi, I am</h4>
            <h1>Saeid Habil</h1>
            <p>A journalist, Photographer and documentary filmmaker who tells real stories that connect people</p>
        </div>
    </div>

    {{-- Portraits Section --}}
    @foreach ($portraits as $unit)
        <div class="portraits sec">
            <div class="portraits-unit-1">
                <h2>{{ $unit['section'] }}</h2>
                <div class="image-wrapper">
                    @foreach ($unit['media'] as $index => $mediaFile)
                        <div class="img portraits-image-{{ $index + 1 }}" 
                             style="background-image: url('{{ asset($mediaFile) }}');"></div>
                    @endforeach
                </div>
            </div>
            <div class="portraits-unit-2 gu1">
                <h4>{{ $unit['text1'] }}</h4>
                <p>{{ $unit['text2'] }}</p>
            </div>
        </div>
    @endforeach

<div class="gallery sec">
    @foreach ($gallery as $index => $unit)
        <div class=" {{ $unit['displayMode'] === 'end' ? 'gallery-unit-end' : 'gallery-unit' }}">
            <div class="media-info">
                <h2>{{ $unit['title'] }}</h2>

                <p class="gu2 {{ $unit['displayMode'] === 'top' ? 'top-outlined' : '' }}">
                    {{ $unit['text'] }}
                </p>
            </div>

            <div class="media-wrapper gu1 {{ $unit['mediaMod'] }}">
                <img src="{{ asset($unit['media']) }}" alt="{{ $unit['title'] }}"/>
            </div>
        </div>

        @if ($index < count($gallery) - 1)
            <div class="gallery-divider">
                <div></div>
                <div></div>
                <div class="divider-line"></div>
            </div>
        @endif
    @endforeach
</div>

@endsection