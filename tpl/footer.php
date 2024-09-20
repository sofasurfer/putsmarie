    <div class="container-fluid dark">
            <div class="row">
              <div class="col-md-4">
                <h2 class="no-padding">Booking</h2>
                <p><a href="mailto:info@putsmarie.com" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="For bookings and other inquiries" target="_blank">info@putsmarie.com</a></p>
              </div>
              <div class="col-md-4">
                <h2 class="no-padding">Music</h2>
                <a href="http://putsmarie.bandcamp.com/"  data-toggle="tooltip" data-placement="bottom" title="Listen on Bandcamp" target="_new"><img src="https://s0.bcbits.com/img/buttons/bandcamp_130x27_black.png"></a>
              </div>
              <div class="col-md-4">
                <h2 class="no-padding">Connect</h2>

                <a href="mailto:info@putsmarie.com"  data-toggle="tooltip" data-placement="bottom" title="Send E-Mail"><i class="fas fa-envelope"></i></a>
                <a href="https://www.facebook.com/putsmariefans/"  data-toggle="tooltip" data-placement="bottom" title="Follow on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/explore/tags/putsmarie/"  data-toggle="tooltip" data-placement="bottom" title="See on Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
    </div>
    <footer class="container-fluid">
        <center><small>Built by <a href="https://www.sofasurfer.org" title="Sofasurfer.org" target="_blank">sofasurfer.org</a></small></center>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>


    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//piwik.sofasurfer.org/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 12]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//piwik.sofasurfer.org/piwik.php?idsite=12" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

    <script>
        var pmScripts = {
            data : [],
            init : function() {
                pmScripts.initTracking();
            },

            initTracking : function() {
                $('.ticket').click(function() {
                    _paq.push(['trackGoal', 3]);
                    _paq.push(['trackEvent', 'links', 'linkticket', $(this).attr('href')]);                   
                });
                $('.buy').click(function() {
                    _paq.push(['trackGoal', 4]);
                    _paq.push(['trackEvent', 'links', $(this).attr('title'), $(this).attr('href')]);                   
                });
            },
        };
        $(function() {
            pmScripts.init();

            $('[data-toggle="tooltip"]').tooltip();

        });


        var $animation_elements = $('.animation-element');
        var $window = $(window);

        function check_if_in_view() {
          var delay = 200;
          var window_height = $window.height();
          var window_top_position = $window.scrollTop();
          var window_bottom_position = (window_top_position + window_height);

          $.each($animation_elements, function() {

            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);


            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
              (element_top_position <= window_bottom_position)) {

                setTimeout(function(element) {  
                    $element.addClass('in-view');
                }, delay);
                if( $element.prop("tagName") == 'TR' ){
                   delay = delay + 10;
                }else{
                   delay = delay + 200;
                }
            }

          });
        }

        $window.on('scroll resize', check_if_in_view);
        $window.trigger('scroll');



        // Video Player
        var players = [];
        
        // This function is called when the IFrame Player API is ready
        function onYouTubeIframeAPIReady() {

            // Find all iframes with class 'youtube-player'
            var iframes = document.querySelectorAll('.youtube-player');
            
            // Create a new YouTube player for each iframe and store in 'players' array
            iframes.forEach(function(iframe, index) {
                console.log('VIDEO');
                players[index] = new YT.Player(iframe, {
                    events: {
                        'onReady': function(event) {
                            // Store the initialized player instance when it is ready
                            players[index] = event.target;
                        },
                        'onStateChange': onPlayerStateChange
                    }
                });
            });
        }

        // Function to pause other players when one starts playing
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                players.forEach(function(player) {
                    if (player !== event.target && typeof player.pauseVideo === 'function') {
                        player.pauseVideo(); // Pause all other videos
                    }
                });
            }
        }

    </script>
</body>
</html>
