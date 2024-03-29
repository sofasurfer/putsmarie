    <?php include 'tpl/header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Past Tour dates</h2>
          <table class="table table-hover" itemscope itemtype="http://schema.org/Event" >
            <?php
            $url = 'http://tourdate.twogentlemen.net/json.php?id=413&past';
            $content = file_get_contents($url);
            $jsonExternal = json_decode($content, true);

            $url = __DIR__ . "/assets/data/shows.json";
            $content = file_get_contents($url);
            $jsonLocal = json_decode($content, true);

            $json = array();
            $json['shows'] = array_merge($jsonExternal['shows'],$jsonLocal['shows']);

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
          <center><p style="margin-top: 50px; margin-bottom: 50px;"><a title="Back." class="buy france" href="/">Back Home</a></p></center>
        </div>
      </div>
    </div>
    <?php include 'tpl/footer.php'; ?>


