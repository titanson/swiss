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

    'period' => 48,

    /*
    |--------------------------------------------------------------------------
    | Story
    |--------------------------------------------------------------------------
    |
    | Options for defining similar articles and combining them
    |
    */

    'story'  => [
        'percent'  => 50,
        'minCount' => 2,
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
        'https://www.watson.ch/api/1.0/rss/index.xml',
        'https://www.srf.ch/news/bnf/rss/1646',
        'https://www.nzz.ch/recent.rss',
        'https://www.blick.ch/news/rss.xml',

        'https://partner-feeds.publishing.tamedia.ch/rss/tagesanzeiger/ticker',
        'https://bazonline.ch/basel/rss.html',
        'https://partner-feeds.publishing.tamedia.ch/rss/derbund/ticker',
        'https://partner-feeds.20min.ch/rss/20minuten',
        'https://partner-feeds.publishing.tamedia.ch/rss/bazonline/ticker',

        'https://www.faz.net/rss/aktuell/',
        'https://www.srf.ch/news/bnf/rss/1890',
        'https://telebasel.ch/feed/',
        'https://www.watson.ch/api/1.0/rss/index.xml?tag=Schweiz',
        
        /*
        'https://www.independent.co.uk/topic/switzerland/rss',
        'https://feeds.thelocal.com/rss/ch',
        */

    ],


];
