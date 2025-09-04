<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    $portraits = [
        [
            'section' => 'Portraits',
            'text1'   => 'A glimpse beyond',
            'media'   => ['img1.jpg', 'img2.jpg'], // files in /public/
            'text2'   => 'My work is about one thing only: giving stories voice and making them seen.'
        ],
    ];
    $gallery = [
        [
            'title'    => 'City Landscape',
            'text' => 'the journey through light and shadow',
            'media'    => 'img5.jpg',       // lives in /public/img5.jpg
            'mediaMod' => 'gallery-media-1', // keep your per-item class
            'displayMode' => 'top'
        ],
        [
            'title'    => 'Mobile Photography',
            'text' => 'fragments of a vision',
            'media'    => 'img3.jpg',
            'mediaMod' => 'gallery-media-2',
            'displayMode' => 'end'
        ],
        [
            'title'    => 'Documentary',
            'text' => 'fragments of a vision',
            'media'    => 'img4.jpg',
            'mediaMod' => 'gallery-media-3',
            'displayMode' => 'end'
        ],
    ];

    return view('home', compact('gallery', 'portraits'));
});


