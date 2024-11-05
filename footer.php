<div class="module-small bg-dark">
   <div class="container">
      <div class="row">
         <div class="col-sm-3">
            <div class="widget">
               <h5 class="widget-title font-alt">Features <?php echo $meta_title;?></h5>
               <p>Free to watch live broadcasts anywhere, schedule and live scores.</p>
               <p>Streaming is more Stable 4K, HD, HQ, SD</p>
               <p>Support Device: Desktop, Tablet, Mobile, Ipad and more.</p>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="widget">
               <h5 class="widget-title font-alt">Supported by</h5>
               <ul class="icon-list">
                  <li><a href="#">ESPN</a></li>
                  <li><a href="#">Sofascore</a></li>
                  <li><a href="#">SportsToday</a></li>
                  <li><a href="#">LiveScore</a></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="widget">
               <h5 class="widget-title font-alt">About Us</h5>
               <ul class="icon-list">
                  <li><a href="<?php echo $url_webs;?>about">About</a></li>
                  <li><a target="_blank" href="https://v.ht/customer-support">Customer Service</a></li>
                  <li><a href="<?php echo $url_webs;?>contact">Contact Us</a></li>
                  <li><a href="#https://v.ht/safe-report">Report</a></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="widget">
               <h5 class="widget-title font-alt">Legal</h5>
               <ul class="icon-list">
                  <li><a href="<?php echo $url_webs;?>privacy-policy">Privacy Policy</a></li>
                  <li><a href="<?php echo $url_webs;?>terms-of-use">Terms of Use</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

<hr class="divider-d">
<footer class="footer bg-dark">
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            <p class="copyright font-alt">&copy;<?php echo date("Y");?>&nbsp;<a href="<?php echo $url_webs;?>">livesports.wuaze.com</a>, All Rights Reserved</p>
         </div>
         <div class="col-sm-6">
            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
            </div>
         </div>
      </div>
   </div>
</footer>
</div>

<div id="counter" data-min="9938" data-max="12631">
   <span class="globe">
   <span class="fa fa-user-o"></span>
   </span>
   <span class="counter-value blinking">
      <script type="text/javascript"> document.write(Math.floor(Math.random()*12631)); </script>
   </span>
   Users Online
</div>
<div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
<!--Modal-->
<!-- register -->
<div id="player-modal" class="modal fade nocontext" id="detailContent" tabindex="-1" role="dialog" aria-labelledby="detailContentLabel">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header text-center">GET FREE LIVE STREAMING</div>
         <div class="modal-body">
            <img class="img-responsive" src="<?php if( isset($_GET['i']) ) : ?><?php echo "https://i.imgur.com/" . $_GET['i'] . ".jpeg";?><?php elseif( empty($_GET['i']) ) : ?><?php echo $url_webs;?>assets/gsilvers/images/backdrop.jpg<?php endif;?>" width="780" height="439">
            <span class="img-cover"></span>
            <span class="offerlay ease"></span>
            <span class="modal-text ease">Join the network of satisfied members and try this service for 
            <strong>Free.</strong> Fill out the signup form and 
            <strong>start watching instantly.</strong>
            </span>
            <div class="modal-ft ease">
               <ul>
                  <li>
                     <span class="fa fa-film"></span> Unlimited Access
                  </li>
                  <li>
                     <span class="fa fa-search"></span> Search for Anything
                  </li>
                  <li>
                     <span class="fa fa-ban fa-lg"></span> Ads Free
                  </li>
                  <li>
                     <span class="fa fa-desktop"></span> All Platforms
                  </li>
               </ul>
            </div>
         </div>
         <div class="modal-footer">
            <div class="text-center">
               <button class="btn btn-b btn-responsive" onclick="window.location.href='<?php if( isset($_GET['sport']) ) : ?><?php echo $url_webs;?>watching-request.php?sport=<?php echo $_GET['sport'];?><?php elseif( empty($_GET['sport']) ) : ?><?php echo $url_webs;?>watching-request.php<?php endif;?>'">
               <span class="fa fa-angle-double-right fa-lg"></span> Create Free Account
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<!--END Modal-->
<!--content modal-->
<div class="modal fade" id="detailContent" tabindex="-1" role="dialog" aria-labelledby="detailContentLabel">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header bg-primary" style="background-color: rgb(3 71 133 / 1);">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div data-v-5328d1cb="" class="device-list" style="justify-items: center; display: grid; grid-template-columns: repeat(7,1fr); grid-template-rows: 1fr; grid-template-areas: "a b c d e f g";">
      <img data-v-5328d1cb="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iMCAwIDMwIDMwIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTIwLjE1NiAyLjVjLTEuNDQxLjA4NC0zLjA5Ni44ODctNC4wOCAxLjkxLS44ODguOTMtMS41OSAyLjMxLTEuMzAzIDMuNjQ3IDEuNTY2LjA0IDMuMTM4LS43ODMgNC4wOC0xLjgyNC44NzgtLjk3NCAxLjU0NC0yLjMzMyAxLjMwMy0zLjczM3ptLjA4NiA1LjU1NGMtMi4yNjIgMC0zLjIwNyAxLjM5LTQuNzczIDEuMzktMS42MTEgMC0zLjA4NC0xLjMwMi01LjAzNC0xLjMwMkM3Ljc4MiA4LjE0MyAzLjc1IDEwLjYgMy43NSAxNi4zOWMwIDUuMjY2IDQuNzcyIDExLjExMSA3LjQ2NiAxMS4xMTEgMS42MzYuMDE2IDIuMDMzLTEuMDI5IDQuMjUzLTEuMDQgMi4yMjItLjAxNiAyLjcwMiAxLjA1NCA0LjM0IDEuMDQgMS44NDYtLjAxNCAzLjI4Ni0yLjA0MSA0LjMzOS0zLjY0Ny43NTUtMS4xNSAxLjA2NS0xLjczOCAxLjY1LTMuMDM4LTQuMzQtMS4xLTUuMjA1LTguMSAwLTkuNTQ4LS45ODItMS42NzYtMy44NS0zLjIxMy01LjU1Ni0zLjIxM3oiLz4KPC9zdmc+Cg=="> 
      <p data-v-5328d1cb="">iOS</p>

      <img data-v-5328d1cb="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iMCAwIDMwIDMwIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTkuMzc1IDEuMjVjLS4xNiAwLS4zMi4wNjEtLjQ0Mi4xODMtLjI0NC4yNDQtLjI0NC42NCAwIC44ODRsMS42MzggMS42MzhDOC43MTEgNS4zMiA3LjUgNy41MTUgNy41IDEwaDE1YzAtMi40ODQtMS4yMTEtNC42OC0zLjA3MS02LjA0NWwxLjYzOC0xLjYzOGMuMjQ0LS4yNDUuMjQ0LS42MzkgMC0uODg0LS4yNDQtLjI0NC0uNjQtLjI0NC0uODg0IDBMMTguMzMgMy4yODZjLTEuMDA0LS41LTIuMTMyLS43ODYtMy4zMy0uNzg2cy0yLjMyNi4yODctMy4zMy43ODZMOS44MTcgMS40MzNjLS4xMjItLjEyMi0uMjgyLS4xODMtLjQ0Mi0uMTgzem0xLjg3NSA1aDEuMjVWNy41aC0xLjI1VjYuMjV6bTYuMjUgMGgxLjI1VjcuNUgxNy41VjYuMjV6bS0xMi41IDVjLS42OSAwLTEuMjUuNTYtMS4yNSAxLjI1VjIwYzAgLjY5LjU2IDEuMjUgMS4yNSAxLjI1czEuMjUtLjU2IDEuMjUtMS4yNXYtNy41YzAtLjY5LS41Ni0xLjI1LTEuMjUtMS4yNXptMi41IDB2MTBjMCAuNjkuNTYgMS4yNSAxLjI1IDEuMjVIMTB2NC4zNzVjMCAxLjAzNS44NCAxLjg3NSAxLjg3NSAxLjg3NSAxLjAzNSAwIDEuODc1LS44NCAxLjg3NS0xLjg3NVYyMi41aDIuNXY0LjM3NWMwIDEuMDM1Ljg0IDEuODc1IDEuODc1IDEuODc1IDEuMDM1IDAgMS44NzUtLjg0IDEuODc1LTEuODc1VjIyLjVoMS4yNWMuNjkgMCAxLjI1LS41NiAxLjI1LTEuMjV2LTEwaC0xNXptMTcuNSAwYy0uNjkgMC0xLjI1LjU2LTEuMjUgMS4yNVYyMGMwIC42OS41NiAxLjI1IDEuMjUgMS4yNXMxLjI1LS41NiAxLjI1LTEuMjV2LTcuNWMwLS42OS0uNTYtMS4yNS0xLjI1LTEuMjV6Ii8+Cjwvc3ZnPgo="> 
      <p data-v-5328d1cb="">Android</p>

      <img data-v-5328d1cb="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iMCAwIDMwIDMwIj4KICAgIDxwYXRoIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTUgMy43NWMtMS4zNjYgMC0yLjUgMS4xMzQtMi41IDIuNXYxMi41YzAgMS4zNjYgMS4xMzQgMi41IDIuNSAyLjVIMHYyLjVoMTYuMjV2LTVINVY2LjI1aDIyLjVjMC0xLjM2Ni0xLjEzNC0yLjUtMi41LTIuNUg1em0xNi4yNSA1Yy0xLjM3OSAwLTIuNSAxLjEyMS0yLjUgMi41djEyLjVjMCAxLjM3OSAxLjEyMSAyLjUgMi41IDIuNWg2LjI1YzEuMzc5IDAgMi41LTEuMTIxIDIuNS0yLjV2LTEyLjVjMC0xLjM3OS0xLjEyMS0yLjUtMi41LTIuNWgtNi4yNXptMCAyLjVoNi4yNVYyMi41aC02LjI1VjExLjI1eiIvPgo8L3N2Zz4K"> 
      <p data-v-5328d1cb="">Any browser</p>
    </div>
         </div>
         <div class="modal-body" style="background-color: #002241">
            <div class="container-fluid">
               <div class="row">
                  <h3 class="well well-sm text-primary text-center">All Passes include</h3>
                  <br>
                  <div class="table-responsive">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td class="text-center">Full access to Live regular season and post-season sporting events</td>
                           </tr>
                           <tr>
                              <td class="text-center">Immediate access to events when they are available On Demand</td>
                           </tr>
                           <tr>
                              <td class="text-center">Support for participating school’s programs</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="col-md-6 col-md-offset-6"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><a type="button" class="btn btn-b" href="<?php echo $url_webs;?>watching-request.php">Remind Me</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- cookie -->
<div class="modal" id="GSContent" tabindex="-1" role="dialog" aria-labelledby="GSContentLabel">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header bg-success">
            <h4 class="modal-title text-center" id="GSContentLabel" style="color: #000;">We respect your privacy</h4>
         </div>
         <div class="modal-body text-center">
            <img src="https://i.imgur.com/xA7MDgK.png" height="80" width="80">
            <h5 style="color: #000;">Our site uses technology, such as cookies, and processing of personal data, such as IP addresses and cookie identifiers, to personalize content based on your interests, measure the performance of content, and gain insights about the audience viewing the content. Click <mark>I Accept</mark> / agree by touching anywhere to use this technology to continue and process your personal data for this purpose. You can change your mind and change your choice of consent at any time by returning to this site.</h5>
         </div>
         <div class="modal-footer">
            <button id="accept" type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">I Accept</span></button>
         </div>
      </div>
   </div>
</div>
<!-- cookie -->
<div class="modal" id="GSContent" tabindex="-1" role="dialog" aria-labelledby="GSContentLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header bg-success">
            <h4 class="modal-title text-center" id="GSContentLabel">We respect your privacy</h4>
         </div>
         <div class="modal-body text-center">
            <img src="https://i.imgur.com/xA7MDgK.png" height="80" width="80">
            <h5>Our site uses technology, such as cookies, and processing of personal data, such as IP addresses and cookie identifiers, to personalize content based on your interests, measure the performance of content, and gain insights about the audience viewing the content. Click <mark>I Accept</mark> / agree by touching anywhere to use this technology to continue and process your personal data for this purpose. You can change your mind and change your choice of consent at any time by returning to this site.</h5>
         </div>
         <div class="modal-footer">
            <button id="accept" type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">I Accept</span></button>
         </div>
      </div>
   </div>
</div>

<script src="<?php echo $url_webs;?>assets/gsilvers/js/jquery.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/dateFormat.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/bootstrap.min.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/wow.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/jquery.mb.YTPlayer.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/isotope.pkgd.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/jquery.flexslider.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/owl.carousel.min.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/smoothscroll.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/jquery.magnific-popup.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/jquery.simple-text-rotator.min.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/plugins.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script src="<?php echo $url_webs;?>assets/gsilvers/js/scripts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.6/lib/darkmode-js.min.js"></script>
<script type='text/javascript'>
   $(document).ready(function () {
     if (!document.cookie.split('; ').find(row => row.startsWith('privacy'))) {
       $('#GSContent').modal('show');
     }
     $('#accept').on('click', function () {
       document.cookie = "privacy=true; path=/";
     });
     
     function fn(text, count){
         return text.slice(0, count) + (text.length > count ? "..." : "");
     }
     Cookies.set('errLoop', 0);let setc = parseInt(Cookies.get('errLoop'));
     const sports = ['baseball','basketball','cricket','football','field hockey','ice hockey','lacrosse','soccer','softball','volleyball'];
     $.each(sports , function(indx, sportx) { 
       $.ajax({
           type: "GET",
           async: true,
           url: ./content/",
           data: { opsi: 'home',sport: sportx},
           dataType: "json",
           success: function (res) {
             let tdy = '';const tdx=`<p class="gagal text-center mt-50">There are no live events at the moment</p>`;
           if(res!==null){
             $.each(res, function (k, v) {
             tdy+=`
             <a href="<?php echo $url_webs;?>${v.sport}/live/${v.key}">
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <div class="post">
                   <div class="post-thumbnail">
                       <div class="gallery-item">
                         <div class="gallery-image">
                           <img src="${v.bgi}" alt="${v.sport}"/>
                           <div class="gallery-logo-kiri">
                             <img src="${v.first_logo}" alt="${v.first_title}">
                           </div>
                           <div class="gallery-logo-kanan">
                             <img src="${v.second_logo}" alt="${v.second_title}">
                           </div>
                           <div class="gallery-caption">
                             <div class="gallery-icon"><span class="fa fa-play-circle-o"></span></div>
                           </div>
                         </div>
                       </div>
                   </div>
                   <div class="post-header font-alt">
                     <h2 class="post-title text-center">${v.sport} <span class="text-muted">(${$.format.date(v.date,"dd MMM yyyy HH:mm")})</span></h2>
                     <div class="post-meta text-center">
                     ${fn(v.first_title,30)}<br>${fn(v.second_title,30)}
                     </div>
                   </div>
                   <div class="post-entry">
                   <marquee scrolldelay="120">${v.detail}</marquee>
                   </div>
                 </div>
               </div>
             </a>
             `;});
             $('#today').append(tdy);
             }else{
               Cookies.set('errLoop', ++setc);
             }
             if((!$.trim(res))&&(setc>=8)){$('#today').append(tdx);Cookies.set('errLoop', 0);}
           }
       });
     });
   });
</script>
<script type='text/javascript'>
   //<![CDATA[
   shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/watching-request.php"});
   //]]>
</script>
  <!-- Optional JavaScript -->

  <script type="text/javascript">var _Hasync= _Hasync|| [];

_Hasync.push(['Histats.start', '1,<?php echo $id_histats;?>,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?<?php echo $id_histats;?>&101" alt="website page counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body>
</html>