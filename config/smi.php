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

    'period' => 52,

    /*
    |--------------------------------------------------------------------------
    | Story
    |--------------------------------------------------------------------------
    |
    | Options for defining similar articles and combining them
    |
    */

    'story'  => [
        'percent'  => 55,
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
        'https://newsfeed.zeit.de/index',
        'https://rss.sueddeutsche.de/app/service/rss/alles/index.rss?output=rss',
        'https://partner-feeds.publishing.tamedia.ch/rss/bernerzeitung/ticker',
        'https://www.luzernerzeitung.ch/schweiz.rss',
        'https://www.tagblatt.ch/schweiz.rss',
        'https://www.persoenlich.com/rss/news.xml',
        'https://insideparadeplatz.ch/feed/',
        'http://www.news.ch/rss/letztenews.xml',
        'https://www.netzwoche.ch/taxonomy/term/31/feed',
        'https://t3n.de/rss.xml',
        'https://rss.golem.de/rss.php?feed=RSS2.0',
        'https://www.heise.de/rss/heise-atom.xml',
        'https://www.derstandard.at/rss',
        'https://www.diepresse.com/rss/home',
        'https://www.kleinezeitung.at/rss/chronik',
        'https://kurier.at/xml/rssd',
    ],


];
