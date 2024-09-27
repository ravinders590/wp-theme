<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<footer class="float-start w-100">
     <div class="container">
      <div class="topls-paly d-inline-block">
        <h5 class="text-white"> Trending Players </h5>
        <ul>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
          <li>
            <a href="#" class="btn"> Noor Ahmad <i class="fas fa-angle-right"></i></a>
          </li>
        </ul>
      </div>

      <hr/>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-lg-0">
            <div class="col">
               <div class="comonft-sec d-inline-block w-100">
                   <h5 class="text-white"> Team </h5>
                   <ul>
                    <li>
                      <a href="#"> Belligerents </a>
                    </li>
                    <li>
                      <a href="#"> England </a>
                    </li>
                    <li>
                      <a href="#"> India </a>
                    </li>
                    <li>
                      <a href="#"> New Zealand </a>
                    </li>
                    <li>
                      <a href="#"> South Africa </a>
                    </li>
                    <li>
                      <a href="#"> Sri Lanka </a>
                    </li>
                    <li>
                      <a href="#"> Afghanistan </a>
                    </li>
                   </ul>
               </div>
            </div>

            <div class="col">
              <div class="comonft-sec d-inline-block w-100">
                  <h5 class="text-white"> About </h5>
                  <ul>
                   <li>
                     <a href="#"> Matches </a>
                   </li>
                   <li>
                     <a href="#"> Videos </a>
                   </li>
                   <li>
                     <a href="#"> Stats </a>
                   </li>
                   <li>
                     <a href="#"> News </a>
                   </li>
                   <li>
                     <a href="#"> Teams </a>
                   </li>
                   <li>
                     <a href="#"> Shop </a>
                   </li>
                   <li>
                     <a href="#">  Standings  </a>
                   </li>
                   <li>
                    <a href="#">  About  </a>
                   </li>
                  </ul>
              </div>
            </div>

            <div class="col">
              <div class="comonft-sec d-inline-block w-100">
                  <h5 class="text-white"> Guidline </h5>
                  <ul>
                   <li>
                     <a href="#"> Brand And Protection Guidelines</a>
                   </li>
                   <li>
                     <a href="#"> Match Playing Conditions </a>
                   </li>
                   <li>
                     <a href="#"> Suspect Action Policy </a>
                   </li>
                   <li>
                     <a href="#"> Governing Policy </a>
                   </li>
                   <li>
                    <a href="#"> Maecenas eu turpis  </a>
                   </li>

                  <li>
                    <a href="#"> Proin pretium nulla sed </a>
                  </li>
                  
                  </ul>
              </div>
            </div>

            <div class="col d-grid justify-content-lg-end">
              <div class="comonft-sec d-inline-block w-100">
                  <h5 class="text-white"> Support </h5>
                  <ul>
                   <li>
                     <a href="#"> Help Center </a>
                   </li>
                   <li>
                     <a href="#"> Privacy & Policy </a>
                   </li>
                   <li class="mt-4">
                    <a href="#" class="fl"> 
                      <img alt="st" src="images/appleo.jpg">
                    </a>
                   </li>
                   <li>
                    <a href="#" class="fl"> 
                      <img alt="st" src="images/go.jpg">
                    </a>
                   </li>
                   
                  
                  </ul>
              </div>
            </div>
        </div>
     </div>

     <div class="footer-div1 mt-4">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 text-center text-md-start gy-4 gy-lg-0 justify-content-center justify-content-md-between">
            <div class="col">
              <p class="text-white"> Copyright © 2023.All Rights Reserved </p>
            </div>
            <div class="col d-grid justify-content-lg-end">
              <ul>
                <li>
                  <a href="#"> Privacy Policy </a>
                  <a href="#"> Term Of Service </a>
                  <a href="#">Disclaimer </a>
                </li>
              </ul>
            </div>
        </div>
        
        
      </div>
    </div>
</footer>
<?php 
	// astra_body_bottom();    
	wp_footer(); 
?>
<script>
  jQuery(document).ready(function(){
    jQuery('.upcomin-matches').owlCarousel({
      loop: true,
      margin:50,
      autoplay:true,
      nav:false,
      dots:true,
      responsive: {
          0: {
              items:1
          },
          600: {
              items:1
          },
          667: {
            items:2
          },
          820: {
            items:2
          },
          1000: {
              items:2
          },
          1180: {
            items:2
          },
          1200: {
            items:3
          }
      }
   })
   jQuery('.slider-sertu').owlCarousel({
      loop: true,
      margin:30,
      dots:false,
      nav:true,
      mouseDrag:false,
      autoplay:true,
      responsive: {
          0: {
              items:1
          },
          
          600: {
              items:1
          },
          1000: {
              items:3
          }
      }
  })

  jQuery('.shop-slider').owlCarousel({
    loop: true,
    margin:30,
    autoplay:true,
    nav:false,
    dots:true,
    responsive: {
        0: {
            items:1
        },
        600: {
            items:1
        },
        667: {
          items:2
        },
        1000: {
            items:4
        }
    }
 })

 jQuery('.team-membern').owlCarousel({
  loop: true,
  margin:30,
  autoplay:true,
  nav:false,
  dots:true,
  responsive: {
      0: {
          items:1
      },
      600: {
          items:1
      },
      667: {
        items:2
      },
      1000: {
          items:4
      }
  }
})

jQuery('.result-sliden').owlCarousel({
      loop: true,
      margin:20,
      dots:true,
      nav:false,
      mouseDrag:false,
      autoplay:true,
      responsive: {
          0: {
              items:1
          },
          600: {
              items:1
          },
          768: {
              items:2
          },
          820: {
              items:2
          },
          1000: {
              items:3
          }
      }
  })


jQuery('.sponj-slide').owlCarousel({
  loop: true,
  margin:30,
  autoplay:true,
  nav:false,
  dots:true,
  responsive: {
      0: {
          items:1
      },
      375: {
        items:2
      },
      600: {
          items:2
      },
      667: {
        items:2
      },
      1000: {
          items:6
      }
  }
})
jQuery('.coverages-slider').owlCarousel({
    loop: true,
    margin:20,
    autoplay:true,
    nav:false,
    dots:true,
    responsive: {
        0: {
            items:1
        },
        600: {
            items:1
        },
        667: {
          items:2
        },
        1000: {
            items:2
        },
        1024: {
          items:4
        }
    }
   })

});

</script>

<script>
  jQuery(document).ready(function() {
var myCarousel = document.querySelector('#carouselExampleFade')
var carousel = new bootstrap.Carousel(carouselExampleFade, {
  interval: 3000,
})
});
</script>



<script>
  jQuery(document).ready(function() {
  //YOUTUBE VIDEO
  jQuery('.play-button').click(function(e){
      var iframeEl = jQuery('<iframe>', { src: jQuery(this).data('url') });
      jQuery('#youtubevideo').attr('src', jQuery(this).data('url'));
  })
  
  jQuery('#close-video').click(function(e){
      jQuery('#youtubevideo').attr('src', '');
  }); 
  
  
  });
  
  </script>


<script>
   init();

function init(){
    var videoplaylist = document.getElementById('videoplaylist');
    var playlist = document.getElementById('playlist');
    var tracks = playlist.getElementsByTagName('a');
    videoplaylist.volume = 0.10;
    videoplaylist.play();
    
    for(var track in tracks) {
      var link = tracks[track];
      if(typeof link === "function" || typeof link === "number") continue;
      
			link.addEventListener('click', function(e) {
      	e.preventDefault();
        var song = this.getAttribute('href');
       	run(song, videoplaylist, this);
      });
    }
    
    videoplaylist.addEventListener('ended',function(e) {
        for(var track in tracks) {
					var link = tracks[track];
          var nextTrack = parseInt(track) + 1;
        	if(typeof link === "function" || typeof link === "number") continue;
          if(!this.src) this.src = tracks[0];
          if(track == (tracks.length - 1)) nextTrack = 0;
                                	console.log(nextTrack);
        	if(link.getAttribute('href') === this.src) {
          	var nextLink = tracks[nextTrack];
          	run(nextLink.getAttribute('href'), videoplaylist, nextLink);
            break;
          }
        }
    });
}

function run(song, videoplaylist, link){
				var parent = link.parentElement;

				//quitar el active de todos los elementos de la lista
				var items = parent.parentElement.getElementsByTagName('li');
        for(var item in items) {
					if(items[item].classList)
        		items[item].classList.remove("active");
        }
        
        //agregar active a este elemento
        parent.classList.add("active");
        
        //tocar la cancion
        videoplaylist.src = song;
        videoplaylist.load();
        videoplaylist.play();
}
</script>


	</body>
</html>
