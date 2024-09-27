<?php
   /**
    * The main template file.
    *
    * This is the most generic template file in a WordPress theme
    * and one of the two required files for a theme (the other being style.css).
    * It is used to display a page when nothing more specific matches a query.
    * E.g., it puts together the home page when no home.php file exists.
    *
    * @link https://codex.wordpress.org/Template_Hierarchy
    *
    * @package Astra
    * @since 1.0.0
    */
   
   if ( ! defined( 'ABSPATH' ) ) {
   	exit; // Exit if accessed directly.
   }
   
   get_header(); ?>
<section class="float-start w-100 banner-part">
   <div class="slider-banner">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item add-fiu active">
               <img src="<?php echo get_template_directory_uri();?>/assets/images/banh1.jpg" alt="images not found">
               <div class="container position-relative">
                  <div class="cover">
                     <div class="row">
                        <div class="col-lg-7">
                           <div class="header-content">
                              <h1 class="fadeInDown animated">
                                 Post Match Shenanigans ft. Shubman Gill | India vs Bangladesh
                              </h1>
                              <p class="mt-3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                 Lorem Ipsum has been the industry's standard dummy
                              </p>
                              <a href="#" class="btn btn-comon-btn">
                              <i class="fas fa-play-circle"></i> watch streaming
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item add-fiu">
               <img src="<?php echo get_template_directory_uri();?>/assets/images/ban012.jpg" alt="images not found">
               <div class="container position-relative">
                  <div class="cover">
                     <div class="row">
                        <div class="col-lg-7">
                           <div class="header-content">
                              <h1 class="fadeInDown animated">
                                 Post Match Shenanigans ft. Shubman Gill | India vs Bangladesh
                              </h1>
                              <p class="mt-3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                 Lorem Ipsum has been the industry's standard dummy
                              </p>
                              <a href="#" class="btn btn-comon-btn">
                              <i class="fas fa-play-circle"></i> Watch highlight
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <button type="button" class="btn btn-member" data-bs-toggle="modal" data-bs-target="#memberModal"> Become A Member </button>
</section>
<section class="float-start w-100 body-part pt-0">
<div class="top-selidert d-inline-block w-100">
   <div class="container">
      <div class="socui-lisu">
         <a href="#" class="btn btn-hilihht"> Rider's WC fixtures <i class="fas fa-angle-right"></i> </a>
         <a href="#" class="btn btn-hilihht"> World Cup 2023 <i class="fas fa-angle-right"></i> </a>
         <a href="#" class="btn btn-hilihht"> Top wicket-takers <i class="fas fa-angle-right"></i> </a>
         <a href="#" class="btn btn-hilihht"> Top-scorers <i class="fas fa-angle-right"></i> </a>
         <a href="#" class="btn btn-hilihht">  AC Cup 2023 <i class="fas fa-angle-right"></i> </a>
         <a href="#" class="btn btn-hilihht"> Ap teams <i class="fas fa-angle-right"></i> </a>
      </div>
   </div>
</div>
<div class="match-cover01 d-inline-block w-100">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Match Coverage </h2>
         <a href="#" class="btn btn-asee d-none d-md-inline-block"> See All <i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="coverages-slider  owl-carousel owl-theme mt-4">
         <a href="#" class="items-cover0 d-inline-block w-100">
            <div class="imghj">
               <img alt="ty" src="<?php echo get_template_directory_uri();?>/assets/images/31webstersilk.webp"/>
            </div>
            <div class="details-text">
               <h5> Jewell-led beat Bulls despite McDermott heroics </h5>
               <p> 7h ago <span> Devid Warner </span></p>
            </div>
         </a>
         <a href="#" class="items-cover0 d-inline-block w-100">
            <div class="imghj">
               <img alt="ty" src="<?php echo get_template_directory_uri();?>/assets/images/team-bcci.jpg"/>
            </div>
            <div class="details-text">
               <h5> LIVE: Openers tee off for India in West </h5>
               <p> 7h ago <span> Devid Warner </span></p>
            </div>
         </a>
         <a href="#" class="items-cover0 d-inline-block w-100">
            <div class="imghj">
               <img alt="ty" src="<?php echo get_template_directory_uri();?>/assets/images/blo4.webp"/>
            </div>
            <div class="details-text">
               <h5> Jewell-led beat Bulls despite McDermott heroics </h5>
               <p> 7h ago <span> Devid Warner </span></p>
            </div>
         </a>
      </div>
      <a href="#" class="btn btn-asee d-table d-md-none mx-auto mt-4"> See All <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="newsli-div d-inline-block w-100">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Latest News </h2>
         <a href="#" class="btn btn-asee d-none d-md-inline-block"> More News <i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="row mt-0 gy-5 g-lg-4">
         <div class="col-lg-6">
            <a href="#" class="comon-ret big-ret d-inline-block w-100">
               <div class="imh-news position-relative">
                  <img alt="sty" src="<?php echo get_template_directory_uri();?>/assets/images/blo2.jpg"/>
                  <span class="btn btn-matech-r"> Match Report </span>
               </div>
               <div class="nes-text">
                  <h5> Dube smashes - Doing it with style, doing it with substance </h5>
                  <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  </p>
                  <h6> 4h ago  Mark Schout</h6>
               </div>
            </a>
         </div>
         <div class="col-lg-6">
            <div class="row row-cols-1 row-cols-sm-2 gy-5 g-lg-4">
               <div class="col">
                  <a href="#" class="comon-ret d-inline-block w-100">
                     <div class="imh-news">
                        <img alt="sty" src="<?php echo get_template_directory_uri();?>/assets/images/000_32LY6Z7.webp"/>
                     </div>
                     <div class="nes-text">
                        <h5> T20 2023 Herbalife Active Catch of Week 8 </h5>
                        <h6> 4h ago  Mark Schout</h6>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="comon-ret d-inline-block w-100">
                     <div class="imh-news">
                        <img alt="sty" src="<?php echo get_template_directory_uri();?>/assets/images/sg.webp"/>
                     </div>
                     <div class="nes-text">
                        <h5> India thump England for sixth successive win </h5>
                        <h6> 4h ago  Mark Schout</h6>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="comon-ret d-inline-block w-100">
                     <div class="imh-news">
                        <img alt="sty" src="<?php echo get_template_directory_uri();?>/assets/images/fg.jpg"/>
                     </div>
                     <div class="nes-text">
                        <h5> T20 2023 Herbalife Active Catch of Week 8 </h5>
                        <h6> 4h ago  Mark Schout</h6>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="comon-ret d-inline-block w-100">
                     <div class="imh-news position-relative">
                        <img alt="sty" src="<?php echo get_template_directory_uri();?>/assets/images/gfg.jpg"/>
                        <span class="btn btn-matech-r"> Match Report </span>
                     </div>
                     <div class="nes-text">
                        <h5> India thump England for sixth successive win </h5>
                        <h6> 4h ago  Mark Schout</h6>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <a href="#" class="btn btn-asee d-table d-md-none mx-auto mt-4"> More News <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="video-section d-inline-block w-100">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Latest Videos </h2>
         <a href="#" class="btn btn-asee d-none d-md-inline-block"> More Videos <i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="coverages-slider  owl-carousel owl-theme mt-4">
         <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal" data-bs-target="#myModal"  class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
            <div class="vio-imghj">
               <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/shutterstock_1008651946-scaled.jpg"/>
               <span class="btn"> <i class="fas fa-play"></i> 9:45 </span>
            </div>
            <div class="trecty">
               <h5> 	Cricket's World Cup gets its moment in New Zealand and South Africa </h5>
               <p> 3h ago </p>
            </div>
         </a>
         <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal" data-bs-target="#myModal"  class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
            <div class="vio-imghj">
               <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/video3.webp"/>
               <span class="btn"> <i class="fas fa-play"></i> 9:45 </span>
            </div>
            <div class="trecty">
               <h5> We hope kids want to pick up a ball one day and bowl practice </h5>
               <p> 3h ago </p>
            </div>
         </a>
         <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal" data-bs-target="#myModal"  class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
            <div class="vio-imghj">
               <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/video4.webp"/>
               <span class="btn"> <i class="fas fa-play"></i> 9:45 </span>
            </div>
            <div class="trecty">
               <h5> David Willey to retire from international cricket after T20 Cup </h5>
               <p> 3h ago </p>
            </div>
         </a>
         <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal" data-bs-target="#myModal"  class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
            <div class="vio-imghj">
               <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/video2.jpg"/>
               <span class="btn"> <i class="fas fa-play"></i> 9:45 </span>
            </div>
            <div class="trecty">
               <h5> 		David Willey to retire from international cricket after World Cup </h5>
               <p> 3h ago </p>
            </div>
         </a>
         <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal" data-bs-target="#myModal"  class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
            <div class="vio-imghj">
               <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/video5.webp"/>
               <span class="btn"> <i class="fas fa-play"></i> 9:45 </span>
            </div>
            <div class="trecty">
               <h5> 		David Willey to retire from international cricket after World Cup </h5>
               <p> 3h ago </p>
            </div>
         </a>
      </div>
      <a href="#" class="btn btn-asee  d-table d-md-none mx-auto mt-4"> More Videos <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="top-list-turnament">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Upcoming Match </h2>
         <a href="#" class="btn btn-asee d-none d-md-inline-block"> More Match <i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="upcomin-matches owl-carousel owl-theme">
         <div class="comon-matchbn">
            <a href="#" class="topikn-div">
               <div class="top-bg-backgrouh">
                  <figure>
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/st01.jpg" alt="pnhm"/>
                  </figure>
                  <div class="conty">
                     <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                     <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                     <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                  </div>
               </div>
               <div class="row align-items-center mt-4  justify-content-center">
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r3.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           Spartams
                        </h6>
                     </div>
                  </div>
                  <div class="col-2">
                     <h1 class="vs-text"> VS </h1>
                  </div>
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r4.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           RedBull
                        </h6>
                     </div>
                  </div>
               </div>
            </a>
            <div class="more-details-div text-center">
               <a href="#" class="btn btn-book-btn">
                  Book Ticket  
                  <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="comon-matchbn">
            <a href="#" class="topikn-div">
               <div class="top-bg-backgrouh">
                  <figure>
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/st01.jpg" alt="pnhm"/>
                  </figure>
                  <div class="conty">
                     <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                     <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                     <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                  </div>
               </div>
               <div class="row align-items-center mt-4  justify-content-center">
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r4.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           Spartams
                        </h6>
                     </div>
                  </div>
                  <div class="col-2">
                     <h1 class="vs-text"> VS </h1>
                  </div>
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r3.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           RedBull
                        </h6>
                     </div>
                  </div>
               </div>
            </a>
            <div class="more-details-div text-center">
               <a href="#" class="btn btn-book-btn">
                  Book Ticket  
                  <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="comon-matchbn">
            <a href="#" class="topikn-div">
               <div class="top-bg-backgrouh">
                  <figure>
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/st01.jpg" alt="pnhm"/>
                  </figure>
                  <div class="conty">
                     <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                     <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                     <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                  </div>
               </div>
               <div class="row align-items-center mt-4  justify-content-center">
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r1.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           Spartams
                        </h6>
                     </div>
                  </div>
                  <div class="col-2">
                     <h1 class="vs-text"> VS </h1>
                  </div>
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r2.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           RedBull
                        </h6>
                     </div>
                  </div>
               </div>
            </a>
            <div class="more-details-div text-center">
               <a href="#" class="btn btn-book-btn">
                  Book Ticket  
                  <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="comon-matchbn">
            <a href="#" class="topikn-div">
               <div class="top-bg-backgrouh">
                  <figure>
                     <img src="<?php echo get_template_directory_uri();?>/assets/images/st01.jpg" alt="pnhm"/>
                  </figure>
                  <div class="conty">
                     <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                     <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                     <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                  </div>
               </div>
               <div class="row align-items-center  justify-content-center">
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r1.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           Spartams
                        </h6>
                     </div>
                  </div>
                  <div class="col-2">
                     <h1 class="vs-text"> VS </h1>
                  </div>
                  <div class="col-5">
                     <div class="cul-div">
                        <figure class="">
                           <img src="<?php echo get_template_directory_uri();?>/assets/images/r3.png" alt="club">
                        </figure>
                        <h6 class="text-center">
                           RedBull
                        </h6>
                     </div>
                  </div>
               </div>
            </a>
            <div class="more-details-div text-center">
               <a href="#" class="btn btn-book-btn">
                  Book Ticket  
                  <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
      </div>
      <a href="#" class="btn btn-asee text-dark d-table d-md-none mx-auto mt-4"> More Match <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="leadr-board d-inline-block w-100">
   <div class="container">
      <div class="d-md-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Leaderboards </h2>
         <ul class="nav nav-pills mb-3 mt-4 mt-md-0" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#odi" type="button" role="tab">ODI</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#t20" type="button" role="tab" >T20</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#test" type="button" role="tab">Test</button>
            </li>
         </ul>
      </div>
      <div class="tab-content" id="pills-tabContent">
         <div class="tab-pane fade show active" id="odi" role="tabpanel">
            <div class="coverages-slider owl-carousel owl-theme mt-4">
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">1</span>
                     Australia 
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/323367.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 20 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 20 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 20 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">2</span>
                     India
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/3909444.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">3</span>
                     England
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/197398.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">4</span>
                     England
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/323270.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">5</span>
                     Pakistan
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/197606.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 50 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 30 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="t20" role="tabpanel">
            <div class="coverages-slider owl-carousel owl-theme mt-4">
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">1</span>
                     India
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/3909444.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 20 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 20 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 20 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">2</span>
                     Afghanistan
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/197515.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">3</span>
                     England
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/197398.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">4</span>
                     England
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/323270.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">5</span>
                     Pakistan
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/197606.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 50 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 30 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="test" role="tabpanel">
            <div class="coverages-slider owl-carousel owl-theme mt-4">
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">1</span>
                     England
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/323270.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">2</span>
                     India
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/3909444.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 20 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 20 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 20 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">3</span>
                     Afghanistan
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/197515.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">4</span>
                     Netherlands
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/323275.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">5</span>
                     England
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/323270.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 30 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 50 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                        <li> W </li>
                     </ul>
                  </div>
               </div>
               <div class="comon-teams-poins d-inline-block w-100">
                  <h5> <span class="noi">6</span>
                     Pakistan
                  </h5>
                  <figure>
                     <img alt="fiu" src="<?php echo get_template_directory_uri();?>/assets/images/197606.png"/>
                  </figure>
                  <hr/>
                  <ul class="d-flex align-items-center justify-content-between">
                     <li>
                        <span> 50 </span>
                        <span> Played </span>
                     </li>
                     <li>
                        <span> 30 </span>
                        <span> Points </span>
                     </li>
                     <li>
                        <span> 10 </span>
                        <span> Won </span>
                     </li>
                     <li>
                        <span> 0.589 </span>
                        <span> NRR </span>
                     </li>
                  </ul>
                  <h6 class="mt-3"> Recent form </h6>
                  <div class="linrt">
                     <ul class="d-flex align-items-center">
                        <li> W </li>
                        <li> W </li>
                        <li> W </li>
                        <li class="lo"> L </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" class="btn btn-asee"> Full Leaderboards <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="helights d-inline-block w-100">
   <div class="container">
      <h2 class="main-hed01"> Match highlight </h2>
      <div class="row mt-4">
         <div class="col-lg-8">
            <div class="big-viuy d-inline-block w-100">
               <video id="videoplaylist" preload="auto" tabindex="0" controls="" >
                  <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4">
               </video>
            </div>
         </div>
         <div class="col-lg-4">
            <ul id="playlist">
               <li class="active">
                  <a href="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" class="voi-paly">
                     <div class="imgh-voi">
                        <img alt="syiu" src="<?php echo get_template_directory_uri();?>/assets/images/gfg.jpg"/>
                     </div>
                     <div class="img-detau">
                        <h5>  World Cup run home: How each team can qualify for the... </h5>
                        <p> Mond 3 Oct </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" class="voi-paly">
                     <div class="imgh-voi">
                        <img alt="syiu" src="<?php echo get_template_directory_uri();?>/assets/images/-1x-1.jpg"/>
                     </div>
                     <div class="img-detau">
                        <h5>  Old-fashioned method fuels de Kock's ... </h5>
                        <p> Mond 3 Oct </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4" class="voi-paly">
                     <div class="imgh-voi">
                        <img alt="syiu" src="<?php echo get_template_directory_uri();?>/assets/images/3364.webp"/>
                     </div>
                     <div class="img-detau">
                        <h5>  India look to seal semi-final spot against ... </h5>
                        <p> Mond 3 Oct </p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4" class="voi-paly">
                     <div class="imgh-voi">
                        <img alt="syiu" src="<?php echo get_template_directory_uri();?>/assets/images/bhjb.jpg"/>
                     </div>
                     <div class="img-detau">
                        <h5>  World Cup run home: How each team can qualify for the... </h5>
                        <p> Mond 3 Oct </p>
                     </div>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<div class="features-serise d-inline-block w-100">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Featured Series </h2>
         <a href="#" class="btn btn-asee d-none d-md-inline-block"> More Match <i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="coverages-slider owl-carousel owl-theme mt-4">
         <a href="#" class="items-ciu d-inline-block w-100">
            <div class="img-oudi">
               <img alt="sut" src="<?php echo get_template_directory_uri();?>/assets/images/turm.webp"/>
               <span class="btn btn-ofu"> T20 Cup </span>
            </div>
            <div class="cup-details">
               <h5> Cricket World Cup 2023 Logo: ICC </h5>
               <p> 13 Oct 2023 - 02 Dec 2023 </p>
            </div>
         </a>
         <a href="#" class="items-ciu d-inline-block w-100">
            <div class="img-oudi">
               <img alt="sut" src="<?php echo get_template_directory_uri();?>/assets/images/tru2.png"/>
               <span class="btn btn-ofu"> ODI </span>
            </div>
            <div class="cup-details">
               <h5> Aisa Cup 2023 Logo: ICC </h5>
               <p> 13 Oct 2023 - 02 Dec 2023 </p>
            </div>
         </a>
         <a href="#" class="items-ciu d-inline-block w-100">
            <div class="img-oudi">
               <img alt="sut" src="<?php echo get_template_directory_uri();?>/assets/images/turm2.webp"/>
               <span class="btn btn-ofu"> ODI </span>
            </div>
            <div class="cup-details">
               <h5> ENGLAND Men Tour 2023: ICC </h5>
               <p> 13 Oct 2023 - 02 Dec 2023 </p>
            </div>
         </a>
         <a href="#" class="items-ciu d-inline-block w-100">
            <div class="img-oudi">
               <img alt="sut" src="<?php echo get_template_directory_uri();?>/assets/images/tru3.png"/>
               <span class="btn btn-ofu"> ODI </span>
            </div>
            <div class="cup-details">
               <h5> European Cricket League T10  </h5>
               <p> 13 Oct 2023 - 02 Dec 2023 </p>
            </div>
         </a>
         <a href="#" class="items-ciu d-inline-block w-100">
            <div class="img-oudi">
               <img alt="sut" src="<?php echo get_template_directory_uri();?>/assets/images/tru4.jpg"/>
               <span class="btn btn-ofu"> Domestic ODI </span>
            </div>
            <div class="cup-details">
               <h5> Road Safety World Series 2022 Live </h5>
               <p> 13 Oct 2023 - 02 Dec 2023 </p>
            </div>
         </a>
      </div>
      <a href="#" class="btn btn-asee d-table d-md-none mx-auto mt-4"> More Match <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="match-result-div">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01 text-white"> Latest Match Result </h2>
         <a href="#" class="text-white btn btn-asee d-none d-md-inline-block"> More Result <i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="result-sliden owl-carousel owl-theme mt-4">
         <div class="comon-results-div">
            <div class="leag-name text-center">
               <h2>United FC Cup </h2>
               <p class="wintc"> Netherlands won by 8 wickets </p>
            </div>
            <div class="bodyu-divbn">
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/206615.png"/>
                  </span>
                  <h5 class="na-text">  Netherlands  
                     <span class="d-block"> 171/5 
                     <small> (15.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="vhs text-center">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/versus.png"/>
               </div>
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/555648.png"/>
                  </span>
                  <h5 class="na-text"> Pakistan   
                     <span class="d-block"> 171/5 
                     <small> (15.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="d-lg-none d-block">
                  <div class="vds-resut text-center my-4">
                     <div class="golas-divb mb-2">
                        <h3>02 : 01</h3>
                     </div>
                     <div class="watch-div">
                        <a href="#" class="btn btn-wtch1">
                        <i class="fas fa-play"></i> Match Highligt
                        </a>
                        <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                     </div>
                  </div>
               </div>
               <h6 class="text-center mt-4"> MA Chidambaram Stadium, Chennai</h6>
               <p class="text-center mt-2"> MAY, Sun 28 , 7:30 pm IST </p>
            </div>
         </div>
         <div class="comon-results-div">
            <div class="leag-name text-center">
               <h2>Asia Cup 2023 </h2>
               <p class="wintc"> India won by 120 Runs </p>
            </div>
            <div class="bodyu-divbn">
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/206606.png"/>
                  </span>
                  <h5 class="na-text"> India 
                     <span class="d-block"> 250/3 
                     <small> (20.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="vhs text-center">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/versus.png"/>
               </div>
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/555648.png"/>
                  </span>
                  <h5 class="na-text"> Pakistan   
                     <span class="d-block"> 200/10 
                     <small> (20.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="d-lg-none d-block">
                  <div class="vds-resut text-center my-4">
                     <div class="golas-divb mb-2">
                        <h3>02 : 01</h3>
                     </div>
                     <div class="watch-div">
                        <a href="#" class="btn btn-wtch1">
                        <i class="fas fa-play"></i> Match Highligt
                        </a>
                        <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                     </div>
                  </div>
               </div>
               <h6 class="text-center mt-4"> MA Chidambaram Stadium, Chennai</h6>
               <p class="text-center mt-2"> MAY, Sat 30 , 7:30 pm IST </p>
            </div>
         </div>
         <div class="comon-results-div">
            <div class="leag-name text-center">
               <h2>Asia Cup 2023 </h2>
               <p class="wintc"> England won by 40 Runs </p>
            </div>
            <div class="bodyu-divbn">
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/206741.png"/>
                  </span>
                  <h5 class="na-text"> Afghanistan
                     <span class="d-block"> 191/10
                     <small> (15.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="vhs text-center">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/versus.png"/>
               </div>
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/555527.png"/>
                  </span>
                  <h5 class="na-text"> England  
                     <span class="d-block"> 270/5 
                     <small> (15.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="d-lg-none d-block">
                  <div class="vds-resut text-center my-4">
                     <div class="golas-divb mb-2">
                        <h3>02 : 01</h3>
                     </div>
                     <div class="watch-div">
                        <a href="#" class="btn btn-wtch1">
                        <i class="fas fa-play"></i> Match Highligt
                        </a>
                        <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                     </div>
                  </div>
               </div>
               <h6 class="text-center mt-4"> MA Chidambaram Stadium, Chennai</h6>
               <p class="text-center mt-2"> MAY, MON 29 , 7:30 pm IST </p>
            </div>
         </div>
         <div class="comon-results-div">
            <div class="leag-name text-center">
               <h2>Asia Cup 2023 </h2>
               <p class="wintc"> India won by 60 Runs </p>
            </div>
            <div class="bodyu-divbn">
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/206741.png"/>
                  </span>
                  <h5 class="na-text"> Afghanistan
                     <span class="d-block"> 121/5 
                     <small> (15.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="vhs text-center">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/versus.png"/>
               </div>
               <div class="comr-teams d-flex align-items-center justify-content-center">
                  <span class="fli-iom">
                  <img alt="su" src="<?php echo get_template_directory_uri();?>/assets/images/555527.png"/>
                  </span>
                  <h5 class="na-text"> India 
                     <span class="d-block"> 190/5 
                     <small> (15.0 OV)</small>
                     </span>
                  </h5>
               </div>
               <div class="d-lg-none d-block">
                  <div class="vds-resut text-center my-4">
                     <div class="golas-divb mb-2">
                        <h3>02 : 01</h3>
                     </div>
                     <div class="watch-div">
                        <a href="#" class="btn btn-wtch1">
                        <i class="fas fa-play"></i> Match Highligt
                        </a>
                        <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                     </div>
                  </div>
               </div>
               <h6 class="text-center mt-4"> MA Chidambaram Stadium, Chennai</h6>
               <p class="text-center mt-2"> MAY, MON 29 , 7:30 pm IST </p>
            </div>
         </div>
      </div>
      <a href="#" class="btn btn-asee d-table d-md-none mx-auto mt-4"> More Result <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="statisci-players d-inline-block w-100">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Players Ratings </h2>
         <a href="#" class="btn btn-asee d-none d-md-inline-block"> More Ratings<i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="slider-sertu owl-carousel owl-theme mt-4">
         <div class="items-plays">
            <figure class="mx-auto">
               <img src="<?php echo get_template_directory_uri();?>/assets/images/teamp.png" alt="pmy"/>
            </figure>
            <div class="details-divn">
               <h5> Robert Dan </h5>
               <hr class="bg-light"/>
               <ul>
                  <li>
                     <span class="rtus">Role</span>
                     <span>Batsman</span>
                  </li>
                  <li>
                     <span class="rtus">Bats</span>
                     <span>Right-Handed</span>
                  </li>
                  <li>
                     <span class="rtus">Bowls</span>
                     <span>Right-Handed off-break</span>
                  </li>
               </ul>
               <h5 class="mt-4"> 2022 Season </h5>
               <div class="row row-cols-3 mt-3">
                  <div class="col">
                     <div class="rtyu">
                        <h4> Matches </h4>
                        <h2>14</h2>
                     </div>
                  </div>
                  <div class="col">
                     <div class="rtyu">
                        <h4> Runs </h4>
                        <h2>1400</h2>
                     </div>
                  </div>
                  <div class="col">
                     <div class="rtyu">
                        <h4> Wickets </h4>
                        <h2>5</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="items-plays">
            <figure class="mx-auto">
               <img src="<?php echo get_template_directory_uri();?>/assets/images/teamp2.png" alt="pmy"/>
            </figure>
            <div class="details-divn">
               <h5> Robert Dan </h5>
               <hr class="bg-light"/>
               <ul>
                  <li>
                     <span class="rtus">Role</span>
                     <span>Batsman</span>
                  </li>
                  <li>
                     <span class="rtus">Bats</span>
                     <span>Right-Handed</span>
                  </li>
                  <li>
                     <span class="rtus">Bowls</span>
                     <span>Right-Handed off-break</span>
                  </li>
               </ul>
               <h5 class="mt-4"> 2022 Season </h5>
               <div class="row row-cols-3 mt-3">
                  <div class="col">
                     <div class="rtyu">
                        <h4> Matches </h4>
                        <h2>14</h2>
                     </div>
                  </div>
                  <div class="col">
                     <div class="rtyu">
                        <h4> Runs </h4>
                        <h2>1400</h2>
                     </div>
                  </div>
                  <div class="col">
                     <div class="rtyu">
                        <h4> Wickets </h4>
                        <h2>5</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" class="btn btn-asee d-table d-md-none mx-auto mt-4"> More Ratings <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<div class="mediasection d-inline-block w-100">
   <div class="container">
      <h2 class="main-hed01"> Magic Moments </h2>
      <div class="row row-cols-1 row-cols-lg-2 gy-4 mt-1">
         <div class="col">
            <a data-fancybox="wk" href="<?php echo get_template_directory_uri();?>/assets/images/blo5.jpg" class="comon-links-divb05 bigo1-imgh">
               <figure>
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/blo5.jpg" alt="pbnm"/>
                  <figcaption>
                     FGC CUP 2022
                  </figcaption>
               </figure>
            </a>
         </div>
         <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 gy-4">
               <div class="col">
                  <a data-fancybox="wk" href="<?php echo get_template_directory_uri();?>/assets/images/gla2.webp" class="comon-links-divb05">
                     <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gla2.webp" alt="pbnm"/>
                        <figcaption>
                           FGC CUP 2022
                        </figcaption>
                     </figure>
                  </a>
               </div>
               <div class="col">
                  <a data-fancybox="wk" href="<?php echo get_template_directory_uri();?>/assets/images/gla3.webp" class="comon-links-divb05">
                     <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gla3.webp" alt="pbnm"/>
                        <figcaption>
                           FGC CUP 2022
                        </figcaption>
                     </figure>
                  </a>
               </div>
               <div class="col">
                  <a data-fancybox="wk" href="<?php echo get_template_directory_uri();?>/assets/images/gla4.webp" class="comon-links-divb05">
                     <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gla4.webp" alt="pbnm"/>
                        <figcaption>
                           FGC CUP 2022
                        </figcaption>
                     </figure>
                  </a>
               </div>
               <div class="col">
                  <a data-fancybox="wk" href="<?php echo get_template_directory_uri();?>/assets/images/gla5.jpg" class="comon-links-divb05">
                     <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/gla5.jpg" alt="pbnm"/>
                        <figcaption>
                           FGC CUP 2022
                        </figcaption>
                     </figure>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="our-spocerder d-inline-block w-100">
   <div class="container">
      <div class="col-lg-7">
         <h6>  Membership  </h6>
         <h1>Join Our <span> Club </span> </h1>
         <h5 class="my-3"> Become a member of our online community and get tickets to 
            <span class="d-lg-block"> upcoming matches or sports events faster! </span>  
         </h5>
         <div class="comon-section01 mt-5">
            <ul>
               <li>
                  <span> <i class="fas fa-check-circle"></i> </span>
                  <span> Vestibulum a eros in enim </span>
               </li>
               <li>
                  <span> <i class="fas fa-check-circle"></i> </span>
                  <span> Nam ullamcorper lacus </span>
               </li>
               <li>
                  <span> <i class="fas fa-check-circle"></i> </span>
                  <span> Nam ullamcorper lacus </span>
               </li>
            </ul>
         </div>
         <div class="d-flex align-items-center mt-5">
            <a href="#" class="btn subc"> Subcribe Now !</a>
            <a href="#" class="btn joinst ms-4"> Join Member </a>
         </div>
      </div>
      <figure class="m-0 right-imgplya">
         <img src="<?php echo get_template_directory_uri();?>/assets/images/38-384690_cricket-vector-png.png" alt="gnm"/>
      </figure>
   </div>
</div>
<div class="shop-apge-div">
   <div class="container">
      <div class="d-flex align-items-center justify-content-between">
         <h2 class="main-hed01"> Exclusive Collection</h2>
         <a href="#" class="btn btn-asee d-none d-md-inline-block"> More Products<i class="fas fa-angle-right"></i> </a>
      </div>
      <div class="shop-slider owl-carousel owl-theme mt-4">
         <div class="comon-section1-shop">
            <div class="top-imgb-box">
               <figure>
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/bats.png" alt="shop1"/>
               </figure>
               <ul class="hover-list2">
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-shopping-cart"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-heart"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="text-details-div text-center mt-3">
               <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
               <span class="d-block rat-text"> 
               <i class="fas fa-star"></i> 
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               </span>
               <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
               <a href="#" class="btn cart-bthn mt-3">
                  <span> Add to cart </span> 
                  <span class="ms-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="comon-section1-shop">
            <div class="top-imgb-box">
               <figure>
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/toppng.com-ss-elite-cricket-helmet-cricket-helmet-701x523.png" alt="shop1"/>
               </figure>
               <ul class="hover-list2">
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-shopping-cart"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-heart"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="text-details-div text-center mt-3">
               <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
               <span class="d-block rat-text"> 
               <i class="fas fa-star"></i> 
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               </span>
               <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
               <a href="#" class="btn cart-bthn mt-3">
                  <span> Add to cart </span> 
                  <span class="ms-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="comon-section1-shop">
            <div class="top-imgb-box">
               <figure>
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/pads.png" alt="shop1"/>
               </figure>
               <ul class="hover-list2">
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-shopping-cart"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-heart"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="text-details-div text-center mt-3">
               <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
               <span class="d-block rat-text"> 
               <i class="fas fa-star"></i> 
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               </span>
               <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
               <a href="#" class="btn cart-bthn mt-3">
                  <span> Add to cart </span> 
                  <span class="ms-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="comon-section1-shop">
            <div class="top-imgb-box">
               <figure>
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/wickets.png" alt="shop1"/>
               </figure>
               <ul class="hover-list2">
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-shopping-cart"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-heart"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="text-details-div text-center mt-3">
               <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
               <span class="d-block rat-text"> 
               <i class="fas fa-star"></i> 
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               </span>
               <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
               <a href="#" class="btn cart-bthn mt-3">
                  <span> Add to cart </span> 
                  <span class="ms-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
         <div class="comon-section1-shop">
            <div class="top-imgb-box">
               <figure>
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/botsman1.png" alt="shop1"/>
               </figure>
               <ul class="hover-list2">
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-shopping-cart"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="btn btn-comnb">
                     <i class="fas fa-heart"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="text-details-div text-center mt-3">
               <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
               <span class="d-block rat-text"> 
               <i class="fas fa-star"></i> 
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               </span>
               <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
               <a href="#" class="btn cart-bthn mt-3">
                  <span> Add to cart </span> 
                  <span class="ms-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                     </svg>
                  </span>
               </a>
            </div>
         </div>
      </div>
      <a href="#" class="btn btn-asee d-table d-md-none mx-auto mt-4"> More Products <i class="fas fa-angle-right"></i> </a>
   </div>
</div>
<?php
   get_footer();
   ?>