<?php
return [
    'portraits' => [
        [
            'section' => 'Portraits',
            'subtitle'  => 'A glimpse beyond',
            'images'   => ['img1.jpg', 'img2.jpg'],
            'description'   => 'My work is about one thing only: giving stories voice and making them seen.'
        ],
    ],
    'gallery' => [
       [
            'title'    => 'City Landscape',
            'caption' => 'the journey through light and shadow',
            'image'    => 'img5.jpg',       // lives in /public/img5.jpg
            'imageAlt' => 'Guy walking on the sidewalk',
            'cssClass' => 'gallery-image-1', // keep your per-item class
            'displayMode' => 'top'
        ],
        [
            'title'    => 'Mobile Photography',
            'caption' => 'fragments of a vision',
            'image'    => 'img3.jpg',
            'imageAlt' => 'a tree in front of a dessert hill',
            'cssClass' => 'gallery-media-2',
            'displayMode' => 'end'
        ],
        [
            'title'    => 'Documentary',
            'caption' => 'fragments of a vision',
            'image'    => 'img4.jpg',
            'imageAlt' => 'Building windows reflecting the sunset',
            'cssClass' => 'gallery-media-3',
            'displayMode' => 'end'
        ],
    ]
];
