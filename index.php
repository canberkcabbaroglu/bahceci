  <?php get_header();?>


  <!-- ======= Neden Bahçeci Bursa Tüp Bebek Merkezi?Section ======= -->    
  <section class="reason">
    <div class="container" > 
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12" >
          <?php include "baglanti.php" ?>
          <h5 class="section-title">Neden Bahçeci Bursa Tüp Bebek Merkezi?</h5> 

          <div class="row grid mt-5">

            <?php 
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $nedensorgu = "SELECT neden_baslik,neden_icerik,neden_resim FROM nedenbahceci";
            $nedensonuc = $conn->query($nedensorgu);

            while($nedensec = $nedensonuc->fetch_assoc()) { ?>
             <div class="col-lg-6 col-md-12 col-sm-12"  >     
               <img src="/<?php echo $nedensec["neden_resim"]; ?>" class="card-img-top" >
               <div>
                 <h5><b><?php echo $nedensec["neden_baslik"]; ?></b></h5>
                 <p><?php echo $nedensec["neden_icerik"]; ?></p>
               </div>
             </div>
           <?php  } ?>  
         </div>
       </div>
       <!-- ======= END Neden Bahçeci Bursa Tüp Bebek Merkezi  Section ======= -->    


       <!-- =======  Sizi Arayalım Section ======= -->   

       <div  class="col-lg-4 col-md-12 col-sm-12"> 
         <div class="card">
           <div class="card-body" style="background-color:#FDFDFD">
             <h6 class="section-title">Sizi Arayalım</h6>
             <form action="/wordpress/wp-content/themes/bahceci/islem.php" method="POST">
               <div class="mb-4">
                 <label for="exampleFormControlInput1" class="form-label">Ad Soyad</label>
                 <input name="kullanici_ad" required="" type="text" class="form-control" >
               </div>
               <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="form-label">Telefon Numarası</label>
                 <input id='phone' name="kullanici_tel"  required="" type='text' class="form-control" placeholder="+(90) __________"/>
               </div>
               <div>ya da <a href="#" class="link-primary"><ins>444 35 34</ins></a> numaralı <br> telefondan bize ulaşabilirsiniz.</div>
             </div>
             <button type="submit" name="send" required="" class="btn btn-primary btn-md">Gönder</button>  
           </div> 
         </form>
       </div>
     </div>
   </div>
 </section>
 <!-- ======= END Sizi Arayalım Section ======= -->   



 <!-- POPUP -->
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="card">
       <div class="card-body" style="background-color:#FDFDFD">
         <h6 class="section-title">Sizi Arayalım</h6>
         <form action="/wordpress/wp-content/themes/bahceci/islem.php" method="POST">
           <div class="mb-4">
             <label for="exampleFormControlInput1" class="form-label">Ad Soyad</label>
             <input name="kullanici_ad" required="" type="text" class="form-control" >
           </div>
           <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Telefon Numarası</label>
             <input id='phone' name="kullanici_tel"  required="" type='text' class="form-control" placeholder="+(90) __________"/>
           </div>
           <div>ya da <a href="#" class="link-primary"><ins>444 35 34</ins></a> numaralı <br> telefondan bize ulaşabilirsiniz.</div>
         </div>
         <button type="submit" name="send" required="" class="btn btn-primary btn-md">Gönder</button>  
       </div> 
     </div>
   </div>

   

   <!-- ======= Basari Hikayeleri Section ======= -->  
   <section>
     <div class="container"> 
       <h5 class="section-title">Başarı Hikayeleri</h5>
       <?php include get_template_directory() . '/baglanti.php' ?> 
       <div style="height: 100%; overflow-x: hidden;">
         <div class="csslider infinity" id="slider1">
           <input type="radio" name="slides" checked="checked" id="slides_1"/>
           <input type="radio" name="slides" id="slides_2"/>
           <input type="radio" name="slides" id="slides_3"/>
           <ul>
             <?php 
             if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $basarisorgu = "SELECT * FROM basari";
            $basarisonuc = $conn->query($basarisorgu);

            while($basarisec = $basarisonuc->fetch_assoc()) { ?>
              <li>
                <div class="row"> 
                  <div  class="col-lg-5 col-md-12 col-sm-12">
                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/reSJdqjaFPE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
                  </div>
                  <div  class="col-lg-3 col-md-12 col-sm-12 ">
                    <div class=" mt-5">
                      <h5><b><?php echo $basarisec["basari_baslik"]; ?></b></h5>
                      <p><?php echo $basarisec["basari_aciklama"]; ?></p>
                      <button class="btn btn-md" onclick="window.location.href='https://www.youtube.com/watch?v=reSJdqjaFPE';">Videoyu İzle</button>
                    </div> 
                  </div> 
                </div> 
              </li>
            <?php  } ?> 

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
  <!-- ======= End Basari Hikayeleri Section ======= -->




  <!-- ======= 7 Ülke 13 Merkez Section ======= -->  
  <section>
    <div class="container" > 
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 ">
          <div class=" mt-5">
            <h3 ><b>7 Ülke 13 Merkez <br>105 Ülkede</b></h3>
            <h2 style="color:#E6007E"><b>70.000'in Üzerinde <br> Bahçeci Bebeği</b></h2>
            <p>Zor vakalarda Avrupa standartlarının <br> üzerinde başarı oranlarına sahip Bahçeci<br>ile sizinde bebek hayaliniz gerçek olsun.</p>
            <a href="#" class="link-primary"><ins>HAKKIMIZDA</ins></a>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/photo1.png" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- ======= End 7 Ülke 13 Merkez Section ======= -->

  <!-- Back to top button -->
  <div id="btnTop" class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;display: none;">
    <a href="#topSection" class="btn-floating btn-large red">
      <i class="fa fa-arrow-up"></i>
    </a>
  </div>
  <!-- ======= Neredeyiz Section ======= --> 


  <section>
    <div class="container" > 
      <div class="card mb-3" style="max-height: 325px;max-width: 100%; ">
        <div class="row g-0">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <?php include get_template_directory() . '/baglanti.php' ?>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6017.331886069342!2d28.998013092226923!3d41.054433827563166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7078ee17cd3%3A0xaed2f92d57b2a25a!2sBah%C3%A7eci%20Fulya%20T%C3%BCp%20Bebek%20Merkezi!5e0!3m2!1str!2str!4v1624473154624!5m2!1str!2str" style="border:0px; height: 100%;width: 100%;  " allowfullscreen aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ======= End Neredeyiz Section ======= -->



<?php get_footer();?>






