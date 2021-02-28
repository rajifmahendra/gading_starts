@extends('layouts.gading.index')
@section('content')
<div class="page-title-cont page-title-small grey-light-bg">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-8">
          <h1 class="page-title">Gallery</h1>
        </div>
        
        <div class="col-md-4">
          <div class="breadcrumbs">
            <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES & FEATURES</a><span class="slash-divider">/</span><span class="bread-current">PORTFOLIO</span>
          </div>
        </div>
        
      </div>
    </div>
  </div>
 
  <div class="grey-light-bg clearfix">    
    <!-- COTENT CONTAINER -->
    <div class="container white-bg plr-30 pt-50 pb-30 ">
    
      <div class="relative">
        <!-- PORTFOLIO FILTER -->                    
        <div class="port-filter ">
          <a href="#" class="filter active" data-filter="*">All Projects</a>
          <a href="#" class="filter" data-filter=".development">Development</a>
          <a href="#" class="filter" data-filter=".design">Design</a>
          <a href="#" class="filter" data-filter=".photography">Photography</a>
        </div>                    
                
        <!-- ITEMS GRID -->
        <ul class="port-grid display-hover-on-mobile port-grid-3 port-grid-gut clearfix" id="items-grid">
          
          <!-- Item 1 -->
          <li role="button" class="port-item mix development">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-5-box.jpg" alt="img" ></div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">MINIMALISM BOOKS</a></h3>
                  <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-5-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>

          <!-- Item 2 -->
          <li role="button" class="port-item mix design">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-3-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">CALENDAR</a></h3>
                  <span><a href="#">photography</a><span class="slash-divider">/</span><a href="#">media</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-3-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
          
          <!-- Item 3 -->
          <li role="button" class="port-item mix photography">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-1-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                  <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-1-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
          
          <!-- Item 4 -->
          <li role="button" class="port-item mix development">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-6-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                  <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-6-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
          
          <!-- Item 5 -->
          <li role="button" class="port-item mix design">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-7-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                  <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-7-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
          
          <!-- Item 6 -->
          <li role="button" class="port-item mix photography">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-4-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">LOVE</a></h3>
                  <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">media</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-4-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
                      
          <!-- Item 7 -->
          <li role="button" class="port-item mix development">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-8-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                  <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-8-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
          
          <!-- Item 8 -->
          <li role="button" class="port-item mix design">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-10-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                  <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-10-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
          
          <!-- Item 9 -->
          <li role="button" class="port-item mix photography">
            <a href="portfolio-single1.html">
              <div class="port-img-overlay">
                <img class="port-main-img" src="images/portfolio/projects-9-box.jpg" alt="img" >
              </div>
            </a>
            <div class="port-overlay-cont">

                <div class="port-title-cont">
                  <h3><a href="portfolio-single1.html">LOVE</a></h3>
                  <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">media</a></span>
                </div>
                <div class="port-btn-cont">
                  <a href="images/portfolio/projects-9-box.jpg" class="lightbox mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                  <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                </div>

            </div>
          </li>
        
        </ul>
      
      </div>
    
    </div>
  
  </div>
@endsection