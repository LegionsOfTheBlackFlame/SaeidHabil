<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    $portraits = [
        [
            'section' => 'Portraits',
            'text1'   => 'whatever',
            'media'   => ['img1.jpg', 'img2.jpg'], // files in /public/
            'text2'   => 'some other thing'
        ],
    ];
    $gallery = [
        [
            'title'    => 'City Landscape',
            'text' => 'the journey through light and shadow',
            'media'    => 'img5.jpg',       // lives in /public/img5.jpg
            'mediaMod' => 'gallery-media-1' // keep your per-item class
        ],
        [
            'title'    => 'Mobile Photography',
            'text' => 'fragments of a vision',
            'media'    => 'img3.jpg',
            'mediaMod' => 'gallery-media-2'
        ],
        [
            'title'    => 'Documentaries',
            'text' => 'fragments of a vision',
            'media'    => 'img4.jpg',
            'mediaMod' => 'gallery-media-3'
        ],
    ];

    return view('home', compact('gallery', 'portraits'));
});


