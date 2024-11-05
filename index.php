<?php include('header.php');?>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
              <?php include('menu.php');?>
                  <div class="main">
      <div class="video-background">
      <div class="video-background">
        <video preload="auto" autoplay="autoplay" muted="muted" webkit-playsinline="true" playsinline="true" loop="loop" id="homeVideo" poster="<?php echo $url_webs;?>/assets/gsilvers/images/background.jpg">
           <source src="<?php echo $url_webs;?>/assets/splash-desktop.mp4" type="video/mp4">
        </video>
        <div class="gradient"></div>
        <div class="intro">
            <h1><?php echo $meta_title;?> <span class="sr-hidden"></span></h1>
            <p>With the rise of mobile technology and high-speed internet, sports live streaming has become increasingly accessible, giving fans the flexibility to watch on various devices, from smartphones and tablets to smart TVs and computers. This modern approach not only brings the thrill of live sports to your fingertips but also caters to diverse viewing preferences and schedules.</p><br>
        </div>
      </div>
        <section class="module">
          <div class="container">
          <div class="row">
            <div class="col-sm-12">
                <h4 class="font-alt mb-0">Live Today</h4>
                <hr class="divider-w mt-10 mb-20">
            </div>
            <div class="row multi-columns-row post-columns">
              <div id="today" class="col-sm-12">
                <?php 
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-Silvers
   | Template Name     : G-Silvers Sports Landing Page Special
   | -------------------------------------------------------------------------------
   */
include("app/grab.php");?>
                <?php 

                  $html = file_get_html('https://www.sofascore.com/api/v1/sport/football/events/live');


    $data =  json_decode($html,true);
    
foreach($data['events'] as $elem)  {
    $league = $elem['tournament']['name'];
    $category = $elem['tournament']['category']['name'];
    $sport = $elem['tournament']['category']['sport']['name'];
$sl = $elem['tournament']['category']['sport']['slug'];
    $usercount = $elem['tournament']['uniqueTournament']['userCount'];
    $description = $elem['status']['description'];
    $first_title = $elem['homeTeam']['name'];
    $first_logo = 'https://www.sofascore.com/api/v1/team/'.$elem['homeTeam']['id'].'/image';
    $homescore = $elem['homeScore']['current'];
    $status = $elem['status']['type'];
    $second_title = $elem['awayTeam']['name'];
    $second_logo = 'https://www.sofascore.com/api/v1/team/'.$elem['awayTeam']['id'].'/image';
    $awayscore = $elem['awayScore']['current'];
    $slug = $elem['slug'];
    $id = $elem['id'];
    $background_image = $url_webs . "/assets/gsilvers/images/soccer.jpg";
    $date = new DateTime;
    $dates = $date->format('D, j M Y g:i A | T | e');
                ?>
                   <a href="<?php echo $url_webs;?>football.php">
                  <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="post">
                      <div class="post-thumbnail">
                          <div class="gallery-item">
                            <div class="gallery-image">
                              <img src="<?php echo $background_image;?>" alt="<?php echo $sl;?>">
                              <div class="gallery-logo-kiri">
                                <img src="<?php echo $first_logo;?>" alt="<?php echo $first_title;?>">
                              </div>
                              <div class="gallery-logo-kanan">
                                <img src="<?php echo $second_logo;?>" alt="<?php echo $second_title;?>">
                              </div>
                              <div class="gallery-caption">
                                <div class="gallery-icon"><span class="fa fa-play-circle-o"></span></div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="post-header font-alt">
                        <h2 class="post-title text-center"><span class="live-icon" style="display: inline; vertical-align: middle; font-size: 12px; border: none; padding: 0; margin: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 20 12"><g fill="none" fill-rule="evenodd"><path fill="#E51937" d="M1.667 0h16.666C19.253 0 20 .672 20 1.5v9c0 .828-.746 1.5-1.667 1.5H1.667C.747 12 0 11.328 0 10.5v-9C0 .672.746 0 1.667 0z"></path> <path fill="#FFF" d="M6.238 8.357H3.333V3.643h.978v3.83h1.927v.884zm1.626 0h-.97V3.643h.97v4.714zm3.397 0h-1.217L8.288 3.643h1.1l1.265 3.619 1.264-3.62h1.1l-1.756 4.715zm5.406 0H13.44V3.643h3.226v.883H14.41v.99h2.208v.883H14.41v1.075h2.256v.883z"></path></g></svg></span>
                          <span data-v-7886e5a8="" aria-hidden="true" class="icon icon-soccer"></span><?php echo $sport;?> <span class="text-muted"><small>(<?php echo $dates;?>)</small></span></h2>
                        <div class="post-meta text-center"><marquee scrolldelay="120">
                        <?php echo $first_title;?> <small style="color: #777;">vs</small> <?php echo $second_title;?></marquee>
                        </div>
                      </div>
                      <div class="post-entry">
                      <marquee scrolldelay="120"><?php echo $sport;?> | <?php echo $category;?> | <?php echo $league;?></marquee>
                      </div>
                    </div>
                  </div>
                </a>
                <?php 
                  }
                  ?>
                </div>
            </div>
          </div>
        </section>

<?php include('footer.php');?>