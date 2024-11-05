<?php 
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-Silvers
   | Template Name     : G-Silvers Sports Landing Page Special
   | -------------------------------------------------------------------------------
   */
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
    /*
    |--------------------------------------------------------------------------
    | Website Title
    |--------------------------------------------------------------------------
    */
$meta_title  = 'Live Stream Wuaze';  // Untuk ganti Title logo web, disarankan jangan pakai title web terlalu panjang
$logo  = 'Live Stream Wuaze';  // Untuk ganti Title logo web, disarankan jangan pakai title web terlalu panjang
    /*
    |--------------------------------------------------------------------------
    | Website Theme Version
    |--------------------------------------------------------------------------
    */
$meta_description  = "Football live scores on Sports Live livescore from 600+ soccer leagues. Follow live results, statistics, league tables, fixtures and videos from Champions League.";
    /*
    |--------------------------------------------------------------------------
    | Website Keyword
    |--------------------------------------------------------------------------
    */
$meta_keyword  = 'Sports Live, sports scores, sports news, football scores, cricket scores, rugby scores, f1 scores, golf scores, tennis scores, MLB scores, NFL scores, NBA scores, NHL scores, College Football scores, College Basketball scores, sports videos, sports information, Fantasy sports, Fantasy games, Fantasy football, Fantasy baseball';
    /*
    |--------------------------------------------------------------------------
    | Website Linkoffer,histats, url web wajib diganti
    |--------------------------------------------------------------------------
    */
$affiliasi    = ''; // Untuk Link Offer Anda
$affiliasi_soccer    = ''; // Untuk Link Offer Anda
$id_histats    = '4896645'; // Untuk ID HISTATS Anda
$background    = 'https://www.allnetarticles.com/wp-content/uploads/2020/04/best-free-sports-streaming-sites.png'; // Untuk gambar title manual contoh domain.com/match.php?live=Barca+vs+Milan
    /*
    |--------------------------------------------------------------------------
    | DO NOT MODIFY OPTIONS BELOW. UNTIL YOU KNOW WHAT ARE YOU DOING.
    |--------------------------------------------------------------------------
    */
$url_webs =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URL]" . "/";


define('TOPPATH', $_SERVER['DOCUMENT_ROOT'] );