<?php 
/*
| -------------------------------------------------------------------------------
| Author            : Galih Sophian
| Template Name     : G-Silvers V3
| -------------------------------------------------------------------------------
*/
require_once('pengaturan.php');
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
// redirect based on country code:
if ( $var_country_code == "US" ) {
    $offer = $affiliasi;
} elseif ( $var_country_code == "DK" || $var_country_code == "FR" || $var_country_code == "SE" || $var_country_code == "NL" || $var_country_code == "JP" || $var_country_code == "NZ" || $var_country_code == "CA" || $var_country_code == "QA" || $var_country_code == "AE" || $var_country_code == "CY" || $var_country_code == "JM" || $var_country_code == "CO" || $var_country_code == "KY" || $var_country_code == "BS" || $var_country_code == "BM" || $var_country_code == "SA" || $var_country_code == "EC" || $var_country_code == "GY" || $var_country_code == "AU" || $var_country_code == "ES" || $var_country_code == "PR" || $var_country_code == "GB" || $var_country_code == "IS" || $var_country_code == "HK" || $var_country_code == "PY" ) {
    $offer = $affiliasi;
} elseif ( $var_country_code == "BE" || $var_country_code == "NO" || $var_country_code == "FI" || $var_country_code == "CH" || $var_country_code == "LU" || $var_country_code == "TT" || $var_country_code == "KW" || $var_country_code == "IE" || $var_country_code == "DE" || $var_country_code == "TR" || $var_country_code == "IT" || $var_country_code == "PT" || $var_country_code == "CL" || $var_country_code == "PE" || $var_country_code == "SG" ) {
    $offer = $affiliasi;
} elseif ( $var_country_code == "AF" || $var_country_code == "AL" || $var_country_code == "DZ" || $var_country_code == "AO" || $var_country_code == "AI" || $var_country_code == "BB" || $var_country_code == "BY" || $var_country_code == "BJ" || $var_country_code == "BT" || $var_country_code == "BA" || $var_country_code == "BW" || $var_country_code == "BF" || $var_country_code == "BI" || $var_country_code == "CM" || $var_country_code == "CF" || $var_country_code == "TD" || $var_country_code == "CN" || $var_country_code == "CG" || $var_country_code == "CD" || $var_country_code == "CI" || $var_country_code == "CU" || $var_country_code == "DJ" || $var_country_code == "DO" || $var_country_code == "EG" || $var_country_code == "GQ" || $var_country_code == "ER" || $var_country_code == "ET" || $var_country_code == "GA" || $var_country_code == "GM" || $var_country_code == "GE" || $var_country_code == "GH" || $var_country_code == "GN" || $var_country_code == "GW" || $var_country_code == "IN" || $var_country_code == "ID" || $var_country_code == "IR" || $var_country_code == "IQ" || $var_country_code == "IL" || $var_country_code == "KE" || $var_country_code == "KP" || $var_country_code == "KR" || $var_country_code == "LS" || $var_country_code == "LR" || $var_country_code == "LY" || $var_country_code == "MK" || $var_country_code == "MG" || $var_country_code == "MY" || $var_country_code == "MV" || $var_country_code == "ML" || $var_country_code == "MR" || $var_country_code == "YT" || $var_country_code == "MA" || $var_country_code == "MZ" || $var_country_code == "MM" || $var_country_code == "NA" || $var_country_code == "NE" || $var_country_code == "NG" || $var_country_code == "PK" || $var_country_code == "RO" || $var_country_code == "AR" || $var_country_code == "TW" || $var_country_code == "PH" || $var_country_code == "MX" || $var_country_code == "BR" || $var_country_code == "ZA" || $var_country_code == "RU" || $var_country_code == "RW" || $var_country_code == "SM" || $var_country_code == "ST" || $var_country_code == "SN" || $var_country_code == "SL" || $var_country_code == "SO" || $var_country_code == "SD" || $var_country_code == "SZ" || $var_country_code == "SY" || $var_country_code == "TZ" || $var_country_code == "TH" || $var_country_code == "TG" || $var_country_code == "TN" || $var_country_code == "UG" || $var_country_code == "UA" || $var_country_code == "UZ" || $var_country_code == "VN" || $var_country_code == "EH" || $var_country_code == "ZM" || $var_country_code == "ZW" ) {
    $offer = $affiliasi;
} else {
    $offer = $affiliasi;
}
?>
<html>
<head>
<title>Redirecting to Secure Page</title>
<meta http-equiv="refresh" content="0;url=<?php if( isset($_GET['sport']) ) : ?>https://www.56srts.com/scripts/un981c6l?a_aid=ea53991d&a_bid=<?php echo $_GET['sport'];?>&chan=code108<?php elseif( empty($_GET['sport']) ) : ?><?php echo $offer;?><?php endif;?>">
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
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/et-line-font.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/simpletextrotator.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/style.css" rel="stylesheet">
    <link href="<?php echo $url_webs;?>assets/gsilvers/css/bg-video.css" rel="stylesheet">
    <link id="color-scheme" href="<?php echo $url_webs;?>assets/css/default.css" rel="stylesheet">
    <link data-n-head="ssr" rel="stylesheet" href="<?php echo $url_webs;?>assets/gsilvers/css/icon-fonts.css" async>

</head>
<body>
<div class="page-loader">
        <div class="loader">Loading...</div>
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