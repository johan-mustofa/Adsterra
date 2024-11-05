<?php require_once('pengaturan.php');?>	
<?php 
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-Silvers
   | Template Name     : G-Silvers Sports Landing Page Special
   | -------------------------------------------------------------------------------
   */
require("app/gsilvers.php");
if (isset($_GET['gsilvers'])) {
    $id = $_GET['gsilvers'];
}

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?php echo $title;?> | Watch Live &amp; On Demand">
    <meta name="description" content="<?php echo $desc;?>">
    <meta name="keywords" content="<?php echo $meta_title;?> Sports, sports scores, sports news, football scores, cricket scores, rugby scores, f1 scores, golf scores, tennis scores, MLB scores, NFL scores, NBA scores, NHL scores, College Football scores, College Basketball scores, sports videos, sports information, Fantasy sports, Fantasy games, Fantasy football, Fantasy baseball">
    <meta name="robots" content="index, follow">
    <meta name="googlebot">
    <meta name="language" content="English">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $url_webs;?>">
    <meta property="og:title" content"<?php echo $title;?> | Watch Live &amp; On Demand">
    <meta property="og:site_name" content="<?php echo $logo;?>">
    <meta property="og:description" content="<?php echo $desc;?>">
    <meta property="og:image" content="<?php echo $background_image;?>">
    <meta property="og:locale" content="en_US">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $url_webs;?>">
    <meta property="twitter:title" content"<?php echo $title;?> | Watch Live &amp; On Demand">
    <meta property="twitter:description" content="<?php echo $desc;?>">
    <meta property="twitter:image" content="<?php echo $background_image;?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <meta name="theme-color" content="#ffffff">
    <title><?php echo $title;?>American Football Live Stream | Full Match</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url_webs;?>assets/gsilvers/images/favicons/favicon.ico">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/animate.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>player/css/et-line-font.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/simpletextrotator.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/style.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/bg-video.css" rel="stylesheet">
    <link id="color-scheme" href="<?php echo $url_webs;?>assets/gsilvers/css/default.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/player.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>player/css/font-player.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
              <?php include("menu.php");?>
                    <div class="main">
                      <!-- GAM -->
  <div class="container">
    <h3 class="well text-center"><?php echo $title;?> American Football Live Stream </h3>
    <div class="row mb-20">
    <div class="player center-block">
        <div class="layar" data-video="<?php if( isset($_GET['gsilvers']) ) : ?><?php echo $background_image;?><?php elseif( empty($_GET['gsilvers']) ) : ?><?php echo $url_webs;?>/assets/gsilvers/images/football.jpg<?php endif;?>">
            <!--modal-direct-auth-->
            <div id="load" data-offer="<?php echo $url_webs;?>watching-request.php" data-act="modal">
                <span class="proses"></span>
            </div>
            <div class="playPrimary">
                <img src="<?php echo $url_webs;?>assets/gsilvers/images/play.png">
            </div>
        </div>
        <div class="control">
            <div class="playSecondary">
                <button class="lengserbtn"><span id="play" class="icon-play"></span></button>
            </div>
            <div class="waktu" data-waktu="1">
                <div class="stream">
                    <blink>00:00:00</blink>/00:00:00
                </div>
                <div class="live">
                    <blink><svg width="8" height="8">
                            <ellipse style="fill:red;" cx="50%" cy="50%" rx="48%" ry="48%"></ellipse>
                        </svg></blink>
                </div>
            </div>
            <div class="progressbar">
                <div class="psbar red stripes">
                    <span style="width: 100%"></span>
                </div>
            </div>
            <div class="quality lengserup">
                <button class="lengserbtn"><span class="icon-atur"></span></button>
                <ul class="lengserup-content">
                    <li>4K·2160p</li>
                    <li>HD·1080p</li>
                    <li>HD·720p</li>
                    <li>ED·480p</li>
                </ul>
            </div>
            <div class="volume lengserup">
                <button class="lengserbtn"><span class="icon-v-4"></span></button>
                <ul class="lengserup-content">
                    <li><input type="range"></li>
                </ul>
            </div>
            <div class="minmax">
                <button class="lengserbtn"><span id="mm" class="icon-s-max"></span></button>
            </div>
        </div>
    </div>
    <img src="<?php echo $url_webs;?>assets/gsilvers/images/shadow.png" class="center-block mt-30 mb-30">
    </div>
    <div class="table-responsive">
      <table class="table">
        <tbody>
          <tr>
            <td colspan="2" class="text-center"><h6>                         </h6></td>


          </tr>
          <tr>
            <td colspan="2" class="text-center">
              <a href="#" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-opacity=".6" fill-rule="evenodd" d="M24 0v24H0V0h24zM10.453 20h2.924v-7.292h2.476l.368-2.853h-2.827V8.038c0-.825.23-1.384 1.413-1.384h1.496V4.11a20.959 20.959 0 0 0-2.19-.11c-2.172 0-3.66 1.327-3.66 3.76v2.099H8v2.853h2.453V20z"></path></svg></a>&nbsp;
              <a href="#" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-opacity=".6" fill-rule="evenodd" d="M24 0H0v24h24V0zm-5.267 8.685v.458c0 4.342-3.314 9.372-9.372 9.372-1.828 0-3.542-.572-5.028-1.486h.8c1.486 0 2.972-.572 4.115-1.372-1.485 0-2.628-1.028-3.085-2.285.228 0 .457.115.572.115.342 0 .572 0 .914-.115-1.485-.343-2.628-1.6-2.628-3.2.458.228.915.343 1.486.457-.915-.8-1.486-1.714-1.486-2.857 0-.572.115-1.143.458-1.6 1.6 1.943 4 3.315 6.742 3.428 0-.228-.114-.457-.114-.8a3.317 3.317 0 0 1 3.314-3.315c.915 0 1.828.343 2.4 1.028.8-.114 1.486-.457 2.058-.8-.228.8-.8 1.372-1.486 1.828.686-.114 1.258-.228 1.943-.572a7.718 7.718 0 0 1-1.603 1.716z"></path></svg></a>&nbsp;
              <a href="#" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-opacity=".6" fill-rule="evenodd" d="M24 0H0v24h24V0zm-4 2.667a1.334 1.334 0 1 1-.001 2.667A1.334 1.334 0 0 1 20 2.667zm-8 2.666a6.667 6.667 0 1 1-.001 13.335A6.667 6.667 0 0 1 12 5.333zM12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"></path></svg></span></a>&nbsp;
              <a href="#" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FFF" fill-opacity=".6" fill-rule="evenodd" d="M24 0H0v24h24V0zM12 6.5c-2.039 0-3.844.211-4.941.375a2.137 2.137 0 0 0-1.778 1.738A19.51 19.51 0 0 0 5 12c0 1.445.141 2.598.281 3.387a2.141 2.141 0 0 0 1.778 1.738c1.101.164 2.914.375 4.941.375a34.38 34.38 0 0 0 4.938-.375h.003a2.137 2.137 0 0 0 1.778-1.738c.14-.793.281-1.946.281-3.387a19.05 19.05 0 0 0-.285-3.387 2.128 2.128 0 0 0-1.774-1.738A34.215 34.215 0 0 0 12 6.5zm-2 3v5l5-2.5-5-2.5z"></path></svg></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<!-- end GAM -->

    <script src="<?php echo $url_webs;?>assets/gsilvers/js/player.js"></script>
<?php include("footer.php");?>