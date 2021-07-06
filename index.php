<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bahçeci Tüp Bebek Merkezi</title>
  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
</head>
<body>
  <section id="home" class="home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
       <div class="col-lg-12 col-md-12 col-sm-12 mt-1">

        <img src="assets/img/beyazlogo.png" style="height: 5rem;">
        <h1 class="text-white font-weight-bold">Bahçeci Tüp Bebek Merkezi <br> Bursada Hizmetinizde!</h1>
        <h6 class="text-white font-weight">Kısa süreliğine geçerli olan "Ücretsiz Muayeneler" için <br> telefon numaranızı bırakın,sizi arayalım. </h6>
      </div>     

      <div class="col-lg-8 align-self-baseline mt-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModelLong">Sizi Arayalım</button>
      </div>
      <div class="area mt-3">
        <div class="row grid mt-auto">
          <div class="row"> 
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="row mt-4 ml-4"> 
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <img src="assets/img/newseek.png" class="card-img-top" alt="...">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                 <h4>Newseek</h4>
                 <p style="font-size:14px;">Yılın En İyi 3 Tüp Bebek Merkezi Ödülü</p>
               </div>
             </div>
           </div>

           <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="row mt-4 ml-2 mr-2"> 
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="assets/img/newseek.png" class="card-img-top" alt="...">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
               <h4>WHTC</h4>
               <p style="font-size:14px;">Dünyanın En İyi 3 Tüp Bebek <br> Merkezinden Biri Ödülü</p>
             </div>
           </div>
         </div>



         <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="row mt-4 mr-4"> 
            <div class="col-lg-6 col-md-12 col-sm-12">
              <img src="assets/img/newseek.png" class="card-img-top" alt="...">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
             <h4>Oxford Üniversitesi</h4>
             <p style="font-size:14px;">ile Bilimsel İş Birliği</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>
<img src="assets/img/wave.svg">






<section id="reason">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <?php include "baglanti.php" ?>
        <h5 class="section-title">Neden Bahçeci Tüp Bebek Merkezi</h5>
        <div class="row grid mt-5">
          <?php 
          if ($conn->connect_error){
            die("Connection Failed:".$conn->connect_error);
          }
          $nedensorgu= "SELECT neden_baslik,neden_icerik,neden_resim FROM nedenbahceci";
          $nedensonuc=$conn->query($nedensorgu);
          while($nedensec=$nedensonuc->fetch_assoc()) {?>
           <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="/<?php  echo $nedensec["neden_resim"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5><b><?php  echo $nedensec["neden_baslik"]; ?></b></h5>
              <p class="card-text"><?php  echo $nedensec["neden_icerik"]; ?></p>
            </div>
          </div>


        <?php } ?> 



      </div>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12">
      <div class="card">
        <div class="card-body" style="background-color:#FDFDFD;">
          <h6 class="section-title">Sizi Arayalım</h6>
          <form action="islem.php" method="POST">

            <div class="mb-4">
              <label for="exampleFormControlInput1" class="form-label">Ad Soyad</label>
              <input type="text" name="kullanici_ad" class="form-control" required="">
            </div>
            <div>
              <label for="exampleFormControlTextarea1" class="form-label">Telefon Numarası</label>
              <input id="phone" name="kullanici_tel" class="form-control" type="text" required="" placeholder="+(90)__________">
            </div>

            <div>ya da <a href="#" class="link-primary"><ins>444 35 34</ins></a>numaralı <br> telefondan bize ulaşabilirsiniz.
            </div>

            <button type="submit" name="send" required="" class="btn btn-primary btn-md">Gönder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


















<!-- Başarı Hikayeleri -->


<section>
 <div class="container"> 
  <h5 class="section-title">Başarı Hikayeleri</h5> 
  <div style="height: 100%; overflow-x: hidden;">
    <div class="csslider infinity" id="slider1">
      <input type="radio" name="slides" checked="checked" id="slides_1"/>
      <input type="radio" name="slides" id="slides_2"/>
      <input type="radio" name="slides" id="slides_3"/>
      <ul>

        <?php 
        if ($conn->connect_error){
          die("Connection Failed:".$conn->connect_error);
        }
        $basarisorgu= "SELECT * FROM basari";
        $basarisonuc=$conn->query($basarisorgu);
        while($basarisec=$basarisonuc->fetch_assoc()) {?>
          <li>
            <div class="row"> 
             <div  class="col-lg-5 col-md-12 col-sm-12">
               <iframe width="100%" height="400px" src="https://www.youtube.com/embed/reSJdqjaFPE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
             </div>
             <div  class="col-lg-3 col-md-12 col-sm-12 ">
              <div class=" mt-5">
                <h5><b><?php  echo $basarisec["basari_baslik"]; ?></b></h5>
                <p><?php  echo $basarisec["basari_aciklama"]; ?></p>
                <button class="btn btn-md" onclick="window.location.href='https://www.youtube.com/watch?v=reSJdqjaFPE';">Videoyu İzle</button>
              </div> 
            </div> 
          </div> 
        </li>

      <?php } ?> 
    </ul>

    <div class="navigation"> 
      <div>
        <label for="slides_1"></label>
        <label for="slides_2"></label>
        <label for="slides_3"></label>
      </div>
    </div>
  </div>
</div>
</div>
</section>



<div class="modal fade" id="exampleModelLong" tabindex="-1" role="dialog" aria-labelledby="exampleModelLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="card">
      <div class="card-body" style="background-color:#FDFDFD;">
        <h6 class="section-title">Sizi Arayalım</h6>
        <form action="islem.php" method="POST">

          <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Ad Soyad</label>
            <input type="text" name="kullanici_ad" class="form-control" required=""/>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Telefon Numarası</label>
            <input id="phone" name="kullanici_tel" class="form-control" type="text" required="" placeholder="+(90)__________"/>
          </div>

          <div>ya da <a href="#" class="link-primary"><ins>444 35 34</ins></a>numaralı <br> telefondan bize ulaşabilirsiniz.
          </div>

          <button type="submit" name="send" required="" class="btn btn-primary btn-md">Gönder</button>

        </div>
      </div>
    </div>
  </div>
</div>



<section>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="mt-5">

          <h3><b>7 ÜLKE 13 Merkez <br> 105 Ülkede</b></h3>
          <h2 style="color: #E6007E"><b>70.000'in Üzerinde <br>Bahçeçi Bebeği</b></h2>
          <p>Zor vakalarda Avrupa standartlarının <br> üzerinde başarı oranlarına sahip Bahçeci <br> ile sizinde bebek hayaliniz gerçek olsun.</p>
          <a href="#" class="link-primary"><ins>HAKKIMIZDA</ins></a>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12"> 
        <img src="assets/img/photo1.png" class="img-fluid">
      </div>
    </div>
  </div>
</section>


<!-- ======= Neredeyiz Section ======= --> 


<section>
  <div class="container" > 
    <div class="card mb-3" style="max-height: 325px;max-width: 100%; ">
     <div class="row g-0">
       <div class="col-lg-6 col-md-12 col-sm-12">
        <?php include "baglanti.php" ?>
        <div class="card-body mt-5 ml-4">
          <h3>Neredeyiz?</h3>
          <?php 
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $neredeyizsorgu = "SELECT * FROM harita";
          $neredeyizsonuc = $conn->query($neredeyizsorgu);
          while($neredeyizsec = $neredeyizsonuc->fetch_assoc()) { ?>

            <p class="mt-4"><b style="color:#E6007E">Adres: </b><span><?php echo $neredeyizsec["adres"]; ?></span></p>
            <p><b style="color:#E6007E">Telefon: </b><span><?php echo $neredeyizsec["telefon"]; ?></span></p>
            <p><b style="color:#E6007E">E-Posta: </b><span>
              <?php echo $neredeyizsec["eposta"]; ?>
            </span></p>
          <?php  } ?> 
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12">
        <?php include "harita.php" ?>
        <div class="maps">
          <?php 
          require_once 'harita.php';
          $edu = new harita;
          $coll = $edu->getMaps();
          $coll = json_encode($coll, true);
          echo '<div id="data">' . $coll . '</div>'; 
          ?>
          <div id="map"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- ======= End Neredeyiz Section ======= -->
<section class="footer">
  <div class="container">
    <div class="row align-items-center"> 
      <div class="col-md-12 col-sm-12">
        <img src="assets/img/logo.png" class="img-fluid"> 

      </div>
    </div>
  </div>
</section>


<div id="btnTop" class="fixed-action-btn smooth scroll" style="bottom:45px; right:24px; display: none;">
  <a href="#topSection" class="btn-floating btn-large red">
    <i class="fa fa-arrow-up"></i>

  </a>


</div>





</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/googlemap.js"></script>
<!-- ======= HARİTA ======= -->
<script  
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrcvFTOLRkR4A0orq5i02aLgd6SI3fCoY&callback=loadMap">
</script>


</html>

<button onclick="scrollTop()" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc=true></button>








<!-- ======= Back To Top ======= -->
<script type="text/javascript">
  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 1200) {
        $('#toTopBtn').fadeIn();
      } else {
        $('#toTopBtn').fadeOut();
      }
    });

    $('#toTopBtn').click(function() {
      $("html, body").animate({
        scrollTop: 700
      }, 1000);
      return false;
    });
  });
</script>












<!-- ======= Phone Mask ======= -->
<script>
  (function( jQuery, window, undefined ) {
    "use strict";

    var matched, browser;

    jQuery.uaMatch = function( ua ) {
      ua = ua.toLowerCase();

      var match = /(opr)[\/]([\w.]+)/.exec( ua ) ||
      /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
      /(version)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec( ua ) ||
      /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
      /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
      /(msie) ([\w.]+)/.exec( ua ) ||
      ua.indexOf("trident") >= 0 && /(rv)(?::| )([\w.]+)/.exec( ua ) ||
      ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
      [];

      var platform_match = /(ipad)/.exec( ua ) ||
      /(iphone)/.exec( ua ) ||
      /(android)/.exec( ua ) ||
      /(windows phone)/.exec( ua ) ||
      /(win)/.exec( ua ) ||
      /(mac)/.exec( ua ) ||
      /(linux)/.exec( ua ) ||
      /(cros)/i.exec( ua ) ||
      [];

      return {
        browser: match[ 3 ] || match[ 1 ] || "",
        version: match[ 2 ] || "0",
        platform: platform_match[ 0 ] || ""
      };
    };

    matched = jQuery.uaMatch( window.navigator.userAgent );
    browser = {};

    if ( matched.browser ) {
      browser[ matched.browser ] = true;
      browser.version = matched.version;
      browser.versionNumber = parseInt(matched.version);
    }

    if ( matched.platform ) {
      browser[ matched.platform ] = true;
    }

  // These are all considered mobile platforms, meaning they run a mobile browser
  if ( browser.android || browser.ipad || browser.iphone || browser[ "windows phone" ] ) {
    browser.mobile = true;
  }

  // These are all considered desktop platforms, meaning they run a desktop browser
  if ( browser.cros || browser.mac || browser.linux || browser.win ) {
    browser.desktop = true;
  }

  // Chrome, Opera 15+ and Safari are webkit based browsers
  if ( browser.chrome || browser.opr || browser.safari ) {
    browser.webkit = true;
  }

  // IE11 has a new token so we will assign it msie to avoid breaking changes
  if ( browser.rv )
  {
    var ie = "msie";

    matched.browser = ie;
    browser[ie] = true;
  }

  // Opera 15+ are identified as opr
  if ( browser.opr )
  {
    var opera = "opera";

    matched.browser = opera;
    browser[opera] = true;
  }

  // Stock Android browsers are marked as Safari on Android.
  if ( browser.safari && browser.android )
  {
    var android = "android";

    matched.browser = android;
    browser[android] = true;
  }

  // Assign the name and platform variable
  browser.name = matched.browser;
  browser.platform = matched.platform;


  jQuery.browser = browser;
})( jQuery, window );

/*
  Masked Input plugin for jQuery
  Copyright (c) 2007-2011 Josh Bush (digitalbush.com)
  Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license) 
  Version: 1.3
  https://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js
  */
  (function(a){var b=(a.browser.msie?"paste":"input")+".mask",c=window.orientation!=undefined;a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn"},a.fn.extend({caret:function(a,b){if(this.length!=0){if(typeof a=="number"){b=typeof b=="number"?b:a;return this.each(function(){if(this.setSelectionRange)this.setSelectionRange(a,b);else if(this.createTextRange){var c=this.createTextRange();c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select()}})}if(this[0].setSelectionRange)a=this[0].selectionStart,b=this[0].selectionEnd;else if(document.selection&&document.selection.createRange){var c=document.selection.createRange();a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length}return{begin:a,end:b}}},unmask:function(){return this.trigger("unmask")},mask:function(d,e){if(!d&&this.length>0){var f=a(this[0]);return f.data(a.mask.dataName)()}e=a.extend({placeholder:"_",completed:null},e);var g=a.mask.definitions,h=[],i=d.length,j=null,k=d.length;a.each(d.split(""),function(a,b){b=="?"?(k--,i=a):g[b]?(h.push(new RegExp(g[b])),j==null&&(j=h.length-1)):h.push(null)});return this.trigger("unmask").each(function(){function v(a){var b=f.val(),c=-1;for(var d=0,g=0;d<k;d++)if(h[d]){l[d]=e.placeholder;while(g++<b.length){var m=b.charAt(g-1);if(h[d].test(m)){l[d]=m,c=d;break}}if(g>b.length)break}else l[d]==b.charAt(g)&&d!=i&&(g++,c=d);if(!a&&c+1<i)f.val(""),t(0,k);else if(a||c+1>=i)u(),a||f.val(f.val().substring(0,c+1));return i?d:j}function u(){return f.val(l.join("")).val()}function t(a,b){for(var c=a;c<b&&c<k;c++)h[c]&&(l[c]=e.placeholder)}function s(a){var b=a.which,c=f.caret();if(a.ctrlKey||a.altKey||a.metaKey||b<32)return!0;if(b){c.end-c.begin!=0&&(t(c.begin,c.end),p(c.begin,c.end-1));var d=n(c.begin-1);if(d<k){var g=String.fromCharCode(b);if(h[d].test(g)){q(d),l[d]=g,u();var i=n(d);f.caret(i),e.completed&&i>=k&&e.completed.call(f)}}return!1}}function r(a){var b=a.which;if(b==8||b==46||c&&b==127){var d=f.caret(),e=d.begin,g=d.end;g-e==0&&(e=b!=46?o(e):g=n(e-1),g=b==46?n(g):g),t(e,g),p(e,g-1);return!1}if(b==27){f.val(m),f.caret(0,v());return!1}}function q(a){for(var b=a,c=e.placeholder;b<k;b++)if(h[b]){var d=n(b),f=l[b];l[b]=c;if(d<k&&h[d].test(f))c=f;else break}}function p(a,b){if(!(a<0)){for(var c=a,d=n(b);c<k;c++)if(h[c]){if(d<k&&h[c].test(l[d]))l[c]=l[d],l[d]=e.placeholder;else break;d=n(d)}u(),f.caret(Math.max(j,a))}}function o(a){while(--a>=0&&!h[a]);return a}function n(a){while(++a<=k&&!h[a]);return a}var f=a(this),l=a.map(d.split(""),function(a,b){if(a!="?")return g[a]?e.placeholder:a}),m=f.val();f.data(a.mask.dataName,function(){return a.map(l,function(a,b){return h[b]&&a!=e.placeholder?a:null}).join("")}),f.attr("readonly")||f.one("unmask",function(){f.unbind(".mask").removeData(a.mask.dataName)}).bind("focus.mask",function(){m=f.val();var b=v();u();var c=function(){b==d.length?f.caret(0,b):f.caret(b)};(a.browser.msie?c:function(){setTimeout(c,0)})()}).bind("blur.mask",function(){v(),f.val()!=m&&f.change()}).bind("keydown.mask",r).bind("keypress.mask",s).bind(b,function(){setTimeout(function(){f.caret(v(!0))},0)}),v()})}})})(jQuery);

  /*     My Javascript      */

  $(function(){

    $("#phone").mask("9999999999");


    $("#phone").on("blur", function() {
      var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

      if( last.length == 5 ) {
        var move = $(this).val().substr( $(this).val().indexOf("-") + 1, 1 );

        var lastfour = last.substr(1,4);

        var first = $(this).val().substr( 0, 9 );

        $(this).val( first + move + '-' + lastfour );
      }
    });
  }); 



</script>