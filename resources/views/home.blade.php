@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="full-width">
    <div class="hero-image-block">
        <img class="hero-image" src="{{ asset('hero-img.jpg') }}" alt="Portrait of Saeid Habil" />
    </div>
    <div class="hero-content">
        <h1>
            <span class="intro">Hi, I am</span>
            Saeid Habil
        </h1>
        <p>
            A journalist, Photographer and documentary filmmaker who 
            tells real stories that connect people
        </p>
    </div>
</section>

{{-- Portraits Section --}}
@each('components.portrait', $portraits, 'unit')
   

{{-- Gallery Section --}}
<section class="gallery sec">
    @foreach ($gallery as $index => $unit)
        @include('components.gallery_unit', ['unit' => $unit])

        @if ($index < count($gallery) - 1)
            <div class="gallery-divider">
                <div></div>
                <div></div>
                <div class="divider-line"></div>
            </div>
        @endif
    @endforeach
</section>
@endsection
