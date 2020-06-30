    <?php include 'tpl/header.php'; ?>
    <div class="container-fluid ">
        <div class="row">
                <h2 >Videos</h2>
                <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                   <div class="item active">
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

            $url = 'http://tourdate.twogentlemen.net/json.php?id=413';
            $content = file_get_contents($url);
            $json = json_decode($content, true);

            // $url = __DIR__ . "/assets/data/shows.json";
            // $content = file_get_contents($url);
            // $jsonLocal = json_decode($content, true);

            // $json = array();
            // $json['shows'] = array_merge($jsonExternal['shows'],$jsonLocal['shows']);
            usort($json['shows'], function($a, $b) {
                return $a['show_date'] <=> $b['show_date'];
            });

            // Check if tours exist
            if( count($json['shows']) > 0 && !empty($json['shows'][0]) ){
              foreach($json['shows'] as $item) {
                $item['event_link'] = $item['club_website'];
                if( !empty($item['show_link'])){
                  $item['event_link'] = $item['show_link'];
                }
                include 'tpl/tour-item.php';
              }    
            }else{
              include 'tpl/mailchimp.php';
            }
            ?>
          </table>          
          <center><p style="margin-top: 50px; margin-bottom: 50px;"><a title="Show past dates." class="buy france" href="tours.php">Show Past Shows</a></p></center>
        </div>
      </div>

      <div class="row">
        <h2>Records</h2>
        <div class="col-md-6 bounce-up animation-element">
          <div class="subject">
            <img class="img-responsive" src="/assets/images/catchingbadtemper_3.jpg" alt="" />
            <h3>Catching Bad Temper</h3>
            <p>CD / LP & Digital Download<br/>
            28 September 2018</p>
            <div class="order">
              <a title="Buy Catching Bad Temper ||" class="buy" target="_blank" href="https://store.twogentlemen.net/en/287-catching-bad-temper">Buy</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 bounce-up animation-element">
          <div class="subject">
            <img class="img-responsive" src="/assets/images/masochI-II.jpg" alt="" />
            <h3>Masoch I-II</h3>
            <p>CD / LP & Digital Download<br/>
            25 September 2015</p>
            <div class="order">
              <a title="Buy Masoch ||" class="buy" target="_blank" href="http://store.twogentlemen.net/en/268-masoch-i-ii">Buy</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 bounce-up animation-element">
          <div class="subject">
            <img class="img-responsive" src="/assets/images/masochII.jpg" alt="" />
            <h3>Masoch II</h3>
            <p>Vinyl 10'' & Digital<br/>
            25 September 2015</p>
            <div class="order">
              <a title="Buy Masoch ||" class="buy" target="_blank" href="http://store.twogentlemen.net/267-masoch-ii">Buy</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 bounce-up animation-element">
          <div class="subject">
            <img class="img-responsive" src="/assets/images/masoch.jpg" alt="" />
            <h3>Masoch</h3>
            <p>
            10'' & Digital<br/>
            12 December 2013</p>
            <div class="order">
              <a title="Buy Masoch" class="buy" target="_blank" href="http://store.twogentlemen.net/194-masoch">Buy</a>
            </div>
          </div>
        </div>        
        <div class="col-md-4 bounce-up animation-element">
          <div class="subject">
            <img class="img-responsive" src="/assets/images/pornostar.jpg" alt="" />
            <h3>Pornstar</h3>
            <p>Vinyl 7'' & Digital<br/>
            24 Oktober 2013</p>
            <div class="order">
              <a title="Buy Masoch ||" class="buy" target="_blank" href="https://store.twogentlemen.net/en/187-pornstar">Buy</a>
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


