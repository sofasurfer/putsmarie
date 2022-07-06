    <?php include 'tpl/header.php'; ?>
    <div class="container-fluid ">
        <div class="row">
                <h2>Videos</h2>
                <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    
                    <div class="item active">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/IZfEbXRXt9c" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/96XuQZPov74" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                   <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/6NiOX__IYKs" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/jlN7E1X3mfQ" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                   <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/mPgOG5Smb9o" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                   <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/M4LVn2MU6BA" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                   <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/Qmu2uKhRtls" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>       
                    <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/OHWL14EQOcc?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="100%" height="800px" src="https://www.youtube.com/embed/4J2ZcZG891w?showinfo=0&iv_load_policy=3&controls=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/EkX5W7Qe6jA" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Tour dates</h2>
          <table class="table table-hover" itemscope itemtype="http://schema.org/Event" >
            <?php
            $url = 'https://www.yagwud.com/cms/wp-admin/admin-ajax.php?action=events_list&bid=putsmarie';
            $content = file_get_contents($url);
            $json = json_decode($content, true);

            // Check if tours exist
            if( count($json['shows']) > 0 && !empty($json['shows'][0]) ){
              foreach($json['shows'] as $item) {
                include 'tpl/tour-item.php';
              }    
            }else{
              include 'tpl/mailchimp.php';
            }
            ?>
          </table>          
          <!--center><p style="margin-top: 50px; margin-bottom: 50px;"><a title="Show past dates." class="buy france" href="tours.php">Show Past Shows</a></p></center-->
        </div>
      </div>

      <div class="row">
        <h2>Records</h2>
        <div class="col-md-4 bounce-up animation-element">
          <div class="subject">
            <img class="img-responsive" src="/assets/images/PutsMarieMusiqueImprovisee-front.png" alt="PUTS MARIE Musique improvisee" />
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
            <img class="img-responsive" src="/assets/images/dramedupastis_tape.jpg" alt="Le Drame Du Pastis" />
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
            <img class="img-responsive" src="/assets/images/loveboat2.jpg" alt="Love Boat 2" />
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
            <img class="img-responsive" src="/assets/images/catchingbadtemper_3.jpg" alt="Catching Bad Temper" />
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
            <img class="img-responsive" src="/assets/images/masochI-II.jpg" alt="Masoch I-II" />
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
            <img class="img-responsive" src="/assets/images/masochII.jpg" alt="Masoch II" />
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
            <img class="img-responsive" src="/assets/images/masoch.jpg" alt="Masoch" />
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
            <img class="img-responsive" src="/assets/images/pornostar.jpg" alt="Pornstar" />
            <h3>Pornstar</h3>
            <p>Vinyl 7'' & Digital<br/>
            24 Oktober 2013</p>
            <div class="order">
              <a title="Buy Masoch ||" class="buy" target="_blank" href="https://www.twogentlemen.net/products/pornstar/">Buy</a>
            </div>
          </div>
        </div>          
      </div>
      <div class="row">
        <div class="col-md-12">
          <center><p style="margin-top: 50px;"><a title="Shop only for france" class="buy france" target="_blank" href=" http://www.wiseband.com/yo/shop.php?boutique=5501">Online shop france</a></p></center>
        </div>
      </div>


        <div class="row stream-list  bounce-up">
            <h2>Stream</h2>
            <div class="col-md-4 col-xs-6 bounce-up animation-element">
              <div class="subject">
                <a target="_blank" href="https://music.apple.com/de/artist/puts-marie/217937086">
                  <img class="img-responsive" src="/assets/images/n_apple_music.png">
                </a>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 bounce-up animation-element">
              <div class="subject">
                <a target="_blank" href="https://open.spotify.com/artist/14h4AzYpNeMJh7HhHDx6gV">
                  <img class="img-responsive" src="/assets/images/n_spotify.png">
                </a>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 bounce-up animation-element">
              <div class="subject">
                <a target="_blank" href="https://www.deezer.com/de/artist/868984">
                  <img class="img-responsive" src="/assets/images/n_deezer.png">
                </a>
              </div>
            </div>   
        </div>
        <!--div class="row stream-list">
            <div class="col-md-12">
                <h2>Buy</h2>
            </div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://music.apple.com/ch/album/jo-sicher/1500271075?app=itunes&ign-mpt=uo%3D4"><img class="img-responsive" src="/assets/images/n_itunes.png"></a></div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://play.google.com/store/music/album/Studeyeah_Jo_Sicher?id=Bprgxe6damfc4oai7x5sz4hp4du"><img class="img-responsive" src="/assets/images/n_google_play.png"></a></div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://www.amazon.de/dp/B08546F5X4?tag=igroove0a-21"><img class="img-responsive" src="/assets/images/n_amazon.png"></a></div>    
        </div-->

    </div>
    <?php include 'tpl/footer.php'; ?>


