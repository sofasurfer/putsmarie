<?php include 'tpl/header.php'; ?>

<div class="container no-padding-top">
  <div class="row">
    <h2>New Record</h2>
    <div class="col-md-8 offset-md-2 text-center bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/pigeons_politicians_pinups_during_the_end_time_of_mankind_japan.jpg" alt="PUTS MARIE - pigeons, politicians & pinups during the end time of mankind" />
        <h3>pigeons, politicians & pinups during the end time of mankind (Japan Edition)</h3>
        <p>LP & Digital Download<br/>
        20 Aug 2025</p>
        <div class="order">
          <a title="Buy Top: pigeons, politicians & pinups during the end time of mankind" class="buy" target="_blank" href="https://putsmarie.bandcamp.com/album/pigeons-politicians-pinups-during-the-end-time-of-mankind">Buy now</a>
        </div>
      </div>
    </div>  
  </div>
</div>
<div id="shop" class="container section">
  <div class="row">
    <div class="col-md-12">
      <h2>Tour dates</h2>
      <table class="table table-hover" itemscope itemtype="http://schema.org/Event" >
        <?php
        $url = 'https://www.yagwud.com/cms/wp-admin/admin-ajax.php?action=events_list&bid=putsmarie';
        $content = file_get_contents($url);
        $json = json_decode($content, true);

        // Check if tours exist
        if( !empty($json['shows']) && count($json['shows']) > 0 && !empty($json['shows'][0]) ){
          foreach($json['shows'] as $item) {
            include 'tpl/tour-item.php';
          }    
        }else{
            echo( "<tr><td><h2>SORRY, no upcoming shows.</h2></td></tr>" );
        }
        ?>
      </table>          
      <!--center><p style="margin-top: 50px; margin-bottom: 50px;"><a title="Show past dates." class="buy france" href="tours.php">Show Past Shows</a></p></center-->
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <h2></h2>
    <img src="/assets/images/cover_2_2024.jpg" class="img-fluid header" />
  </div>
</div>
<div id="records" class="container section">
  <div class="row">
    <h2>Shop</h2>

    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/pigeons_politicians_pinups_during_the_end_time_of_mankind_japan.jpg" alt="PUTS MARIE - pigeons, politicians & pinups during the end time of mankind" />
        <h3>pigeons, politicians & pinups during the end time of mankind (japan edition)</h3>
        <p>LP & Digital Download<br/>
        20 Aug 2025</p>
        <div class="order">
          <a title="Buy : pigeons, politicians & pinups during the end time of mankind (Japan)" class="buy" target="_blank" href="https://putsmarie.bandcamp.com/album/pigeons-politicians-pinups-during-the-end-time-of-mankind">Buy</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/pigeons_politicians_pinups_during_the_end_time_of_mankind.webp" alt="PUTS MARIE - pigeons, politicians & pinups during the end time of mankind" />
        <h3>pigeons, politicians & pinups during the end time of mankind</h3>
        <p>LP & Digital Download<br/>
        20 Sept 2024</p>
        <div class="order">
          <a title="Buy : pigeons, politicians & pinups during the end time of mankind" class="buy" target="_blank" href="https://atomiumverlag.ch/puts-marie/">Buy</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/putsmarie-tshit.jpg" alt="PUTS MARIE  T-Shirt" />
        <h3>jersey t-shirt in charcoal gray or warm white</h3>
        <p>T-Shirt<br/>
        20 Aug 2025</p>
        <div class="order">
          <a title="Buy : PUTS MARIE  T-Shirt" class="buy" target="_blank" href="https://putsmarie.bandcamp.com/merch/jersey-t-shirt-in-charcoal-gray-or-warm-white">Buy</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/PutsMarieMusiqueImprovisee-front.png" alt="PUTS MARIE Musique improvisee" />
        <h3>PUTS MARIE Musique improvisee</h3>
        <p>2LP<br/>
        12 June 2022</p>
        <div class="order">
          <a title="Buy Love Boat 2 ||" class="buy" target="_blank" href="https://plattfon.ch/PUTS-MARIE-Musique-improvisee">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/dramedupastis_tape.jpg" alt="Le Drame Du Pastis" />
        <h3>Le Drame Du Pastis</h3>
        <p>Casette + Streaming + Download<br/>
        17 March 2022</p>
        <div class="order">
          <a title="Le Drame Du Pastis" class="buy" target="_blank" href="https://putsmarietape.bandcamp.com/album/le-drame-du-pastis">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/loveboat2.jpg" alt="Love Boat 2" />
        <h3>Love Boat 2</h3>
        <p>Streaming + Download <br/>
        24 June 2020</p>
        <div class="order">
          <a title="Buy Love Boat 2 ||" class="buy" target="_blank" href="https://putsmarie.bandcamp.com/">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/catchingbadtemper_3.jpg" alt="Catching Bad Temper" />
        <h3>Catching Bad Temper</h3>
        <p>CD / LP & Digital Download<br/>
        28 September 2018</p>
        <div class="order">
          <a title="Buy Catching Bad Temper ||" class="buy" target="_blank" href="https://www.twogentlemen.net/products/catching-bad-temper/">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/masochI-II.jpg" alt="Masoch I-II" />
        <h3>Masoch I-II</h3>
        <p>CD / LP & Digital Download<br/>
        25 September 2015</p>
        <div class="order">
          <a title="Buy Masoch ||" class="buy" target="_blank" href="https://www.twogentlemen.net/products/masoch-i-ii/">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/masochII.jpg" alt="Masoch II" />
        <h3>Masoch II</h3>
        <p>Vinyl 10'' & Digital<br/>
        25 September 2015</p>
        <div class="order">
          <a title="Buy Masoch ||" class="buy" target="_blank" href="https://www.twogentlemen.net/products/masoch-ii/">Buy</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/masoch.jpg" alt="Masoch" />
        <h3>Masoch</h3>
        <p>
        10'' & Digital<br/>
        12 December 2013</p>
        <div class="order">
          <a title="Buy Masoch" class="buy" target="_blank" href="https://www.twogentlemen.net/products/masoch/">Buy</a>
        </div>
      </div>
    </div>        
    <div class="col-md-4 bounce-up animation-element">
      <div class="subject">
        <img class="img-fluid" src="/assets/images/pornostar.jpg" alt="Pornstar" />
        <h3>Pornstar</h3>
        <p>Vinyl 7'' & Digital<br/>
        24 Oktober 2013</p>
        <div class="order">
          <a title="Buy Masoch ||" class="buy" target="_blank" href="https://www.twogentlemen.net/products/pornstar/">Buy</a>
        </div>
      </div>
    </div>          
  </div>
</div>
<div id="videos" class="container  section">
    <div class="row videos">
            <h2>Videos</h2>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/pWD_r9Znipk?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>

            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/gyFLbviyUys?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/IZfEbXRXt9c?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/96XuQZPov74?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/6NiOX__IYKs?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/jlN7E1X3mfQ?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/mPgOG5Smb9o?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/M4LVn2MU6BA?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/Qmu2uKhRtls?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>       
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/OHWL14EQOcc?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/4J2ZcZG891w?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="youtube-player" src="https://www.youtube.com/embed/EkX5W7Qe6jA?enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
    </div>
</div>
<div class="container">
    <div id="stream" class="row stream-list  bounce-up section">
        <h2>Stream</h2>
        <div class="col-md-4 bounce-up animation-element">
          <div class="subject">
            <a target="_blank" href="https://music.apple.com/de/artist/puts-marie/217937086">
              <img class="img-fluid" src="/assets/images/n_apple_music.png">
            </a>
          </div>
        </div>
        <div class="col-md-4 bounce-up animation-element">
          <div class="subject">
            <a target="_blank" href="https://open.spotify.com/artist/14h4AzYpNeMJh7HhHDx6gV">
              <img class="img-fluid" src="/assets/images/n_spotify.png">
            </a>
          </div>
        </div>
        <div class="col-md-4 bounce-up animation-element">
          <div class="subject">
            <a target="_blank" href="https://www.deezer.com/de/artist/868984">
              <img class="img-fluid" src="/assets/images/n_deezer.png">
            </a>
          </div>
        </div>   
    </div>
</div>
<div class="container">

  <h2>With the kind support of</h2>
  <div id="support" class="row support-list  bounce-up section">
    
    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://www.eda.admin.ch/countries/korea-republic/en/home/switzerland-and/culture.html">
          <img class="img-fluid" src="/assets/images/logos/SFK-logo.png">
        </a>
    </div>

    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://www.swisslos.ch">
          <img class="img-fluid" src="/assets/images/logos/pro-helvetia.png">
        </a>
    </div>
    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://www.ernst-goehner-stiftung.ch/index.php/de">
          <img class="img-fluid" src="/assets/images/logos/EGS_Schriftzug_blau.jpeg">
        </a>
    </div>
    
    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://www.eda.admin.ch/seoul">
          <img class="img-fluid" src="/assets/images/logos/swiss_02.png">
        </a>
    </div>

    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://www.swisslos.ch">
          <img class="img-fluid" src="/assets/images/logos/SL_KtBE_Kultur_d_4f.jpg">
        </a>
    </div>
    
    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://fondation-suisa.ch/">
          <img class="img-fluid" src="/assets/images/logos/fondation_suisa_standard.png">
        </a>
    </div>
    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://www.biel-bienne.ch">
          <img class="img-fluid" src="/assets/images/logos/BielBienne_Kultur.jpg">
        </a>
    </div>
    <div class="col-md-3 bounce-up animation-element">
        <a target="_blank" href="https://www.interpretenstiftung.ch/">
          <img class="img-fluid" src="/assets/images/logos/SIS_Logo_2014.png">
        </a>
    </div>
  </div>

  <div id="newsletter" class="row stream-list section">
    <div class="col-md-12">
        <h2>Newsletter</h2>
    </div>
    <?php include 'tpl/mailchimp.php'; ?>
  </div>

</div>

<?php include 'tpl/footer.php'; ?>
