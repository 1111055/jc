<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [
     'upload' => [
            'driver' => 'local',
            // 'root' => storage_path('app/public'),
            'root' => public_path() . '/logotipo/',
            // 'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
    'local' => [
        'driver' => 'local',
        'root' => storage_path('app'),
    ],

    'public-folder' => [
        'driver' => 'local',
        'root' => public_path(),
        'url' => env('APP_URL').'/storage',
        'visibility' => 'public',
    ],

    'public' => [
        'driver' => 'local',
        'root' => storage_path('public/images/products'),
        'url' => env('APP_URL').'/storage',
        'visibility' => 'public',
    ],

    'test' => [
        'driver' => 'local',
        'root' => storage_path('app/public/products/'),
        'url' => env('APP_URL').'/storage',
        'visibility' => 'public',
    ],

    'images_folder' => [
      'driver' => 'local',
      'root' => public_path() . '/images',
      'url' => env('APP_URL').'/images',
      'visibility' => 'public',
    ],

    'products_img' => [
      'driver' => 'local',
      'root' => public_path() . '/images/products',
      'url' => env('APP_URL').'/images/products',
      'visibility' => 'public',
    ],

    'slider_img' => [
      'driver' => 'local',
      'root' => public_path() . '/images/slides',
      'url' => env('APP_URL').'/images/slides',
      'visibility' => 'public',
    ],

    'index_featured' => [
      'driver' => 'local',
      'root' => public_path() . '/images/feature-content',
      'url' => env('APP_URL').'/images/feature-content',
      'visibility' => 'public',
    ],

    'catalog_ad' => [
      'driver' => 'local',
      'root' => public_path() . '/images/product-list',
      'url' => env('APP_URL').'/images/product-list',
      'visibility' => 'public',
    ],

    'banner-ads' => [
      'driver' => 'local',
      'root' => public_path() . '/images/banner-ads',
      'url' => env('APP_URL').'/images/banner-ads',
      'visibility' => 'public',
    ],

    'site_favicon' => [
      'driver' => 'local',
      'root' => public_path() . '/images/favicon',
      'url' => env('APP_URL').'/images/favicon',
      'visibility' => 'public',
    ],

    'site_logo' => [
      'driver' => 'local',
      'root' => public_path() . '/images/logo',
      'url' => env('APP_URL').'/images/logo',
      'visibility' => 'public',
    ],

    'thumb_products_img' => [
      'driver' => 'local',
      'root' => public_path() . '/images/products/thumbnails/',
      'url' => env('APP_URL').'/images/products/thumbnails/',
      'visibility' => 'public',
    ],

    's3' => [
        'driver' => 's3',
        'key' => env('AWS_KEY'),
        'secret' => env('AWS_SECRET'),
        'region' => env('AWS_REGION'),
        'bucket' => env('AWS_BUCKET'),
        ],

    ],

];
