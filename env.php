<?php
return [
    'site_name' => 'Geomardy',
    'base_url'  => '/geomardy-new_website/',
    'contact_email' => 'info@geomardy.com',
    'db' => [
        'host' => getenv('DB_HOST') ?: '127.0.0.1', 
        'name' => getenv('DB_NAME') ?: 'geomardy',
        'user' => getenv('DB_USER') ?: 'root',
        'pass' => getenv('DB_PASS') ?: '',
        'charset' => getenv('DB_CHARSET') ?: 'utf8mb4'
    ],
    'smtp' => [
        'host' => getenv('SMTP_HOST') ?: '',
        'port' => (int)(getenv('SMTP_PORT') ?: 0),
        'user' => getenv('SMTP_USER') ?: '',
        'pass' => getenv('SMTP_PASS') ?: '',
        'secure' => getenv('SMTP_SECURE') ?: 'tls'
    ],
    'upload_dir' => dirname(__DIR__) . '/storage/uploads',
    'max_upload' => 5 * 1024 * 1024,
    'debug' => false,
    'hero_videos' => [
        'assets/videos/ocean_dark_loop.mp4'
    ],
    'about_video' => [
        'assets/videos/about_video1.mp4'
    ]
];
