<?php
return [
    'site_name' => 'Geomardy',
    'base_url'  => '/geomardy/',
    'contact_email' => 'info@geomardy.com',
    'db' => [
        'host' => '127.0.0.1',
        'name' => 'geomardy',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8mb4'
    ],
    'smtp' => [
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'user' => 'shashanknadimpalle@gmail.com',
        'pass' => 'juhj aarj mtsu gozo ',
        'secure' => 'tls'
    ],
    'upload_dir' => __DIR__ . '/uploads',
    'max_upload' => 5 * 1024 * 1024,
    'debug' => true,
    'hero_videos' => [
        'assets/videos/ocean_dark_loop.mp4'
    ],
    'about_video' => [
        'assets/videos/about_video1.mp4'
    ]
];
