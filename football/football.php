<?php include('../header.php');?>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
              <?php include('../menu.php');?>
                    <div class="main"><section class="">
  <div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-2 col-md-2 sidebar">
            <div class="widget">
                <marquee><h5 class="font-alt"><?php echo $meta_title;?> Soccer</h5></marquee>
            </div>
        </div>
        <div class="col-sm-8 col-md-10 col-md-10">
          <div id="schedule" class="row">
            <h4 class="font-alt mb-0"><i class="fa fa-angle-double-right"></i> Live Events</h4>
            <hr class="divider-w mt-10 mb-20">
              <div class="col-12">
                <?php 
   /*
   | -------------------------------------------------------------------------------
   | Author            : G-Silvers
   | Template Name     : G-Silvers Sports Landing Page Special
   | -------------------------------------------------------------------------------
   */
include("../app/grab.php");?>
                <?php 
                  $html = file_get_html('https://www.sofascore.com/api/v1/sport/football/events/live');
    $data =  json_decode($html,true);
    
foreach($data['events'] as $elem)  {
    $league = $elem['tournament']['name'];
    $category = $elem['tournament']['category']['name'];
    $sport = $elem['tournament']['category']['sport']['name'];
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
    $dt = $elem['startTimestamp'];
    $id = $elem['id'];
        $background_image = $url_webs . "/assets/gsilvers/images/soccer.jpg";
    $date = new DateTime;
    $date->setTimestamp($dt);
    $dates = $date->format('D, j M Y g:i A | T | e');


                ?>
                                <div class="col-sm-12 col-md-6 col-lg-6 gsilvers">
                  <a href="<?php echo $url_webs;?>football.php">
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
                    <h4 class="menu-title font-alt"><img src="<?php echo $first_logo;?>"/> <?php echo $first_title;?></h4>                    
                    <h4 class="menu-title font-alt"><img src="<?php echo $second_logo;?>"/> <?php echo $second_title;?></h4>                    
                    <div class="menu-detail font-serif"><?php echo $description;?> | <?php echo $category;?> | <?php echo $status;?> </div>
                    <div class="menu-detail font-serif"><?php echo $dates;?> </div>
                  </a>
                </div>
                <?php 
                  }
                  ?>
                    <div class="Cell-sc-t6h3ns-0 iqwpGQ" style="width: 100%; height: 360px; flex-direction: column; padding: 16px;">
                      <div style="color: rgb(128, 128, 128); margin: 0px 0px 4px; text-align: center;"><p>There are no live events at the moment</p>
                      </div>
                    </div>
                              </div>
          </div>
        </div>
    </div>
  </div>
</section>
<?php include('../footer.php');?>