<?php

return [

    /*
    |--------------------------------------------------------------------------
    | File generated
    |--------------------------------------------------------------------------
    |
    | A value indicating when the records were generated
    |
    */

    'generated' => env('APP_GENERATED', LARAVEL_START),


    /*
    |--------------------------------------------------------------------------
    | Time Period
    |--------------------------------------------------------------------------
    |
    | The time period for which it is necessary to take news
    | Indicate in hours: 1,2..n
    |
    */

    'period' => 12,

    /*
    |--------------------------------------------------------------------------
    | Story
    |--------------------------------------------------------------------------
    |
    | Options for defining similar articles and combining them
    |
    */

    'story'  => [
        'percent'  => 75,
        'minCount' => 3,
    ],

    /*
    |--------------------------------------------------------------------------
    | News
    |--------------------------------------------------------------------------
    |
    | Options ...
    |
    */

    'news'  => [
        'renderCount' => 10,
    ],

    /*
    |--------------------------------------------------------------------------
    | RSS Feed
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'rss' => [
        'https://www.srf.ch/news/bnf/rss/1646',
        'https://www.nzz.ch/recent.rss',
        'https://www.blick.ch/news/rss.xml',
        'https://partner-feeds.publishing.tamedia.ch/rss/tagesanzeiger/ticker',
        //'https://partner-feeds.beta.20min.ch/rss/20minuten',
        'https://www.watson.ch/api/1.0/rss/index.xml',
        'https://bazonline.ch/basel/rss.html',
        'https://partner-feeds.publishing.tamedia.ch/rss/derbund/ticker',
    ],


];
