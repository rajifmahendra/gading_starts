@extends('layouts.gading.index')
@section('content')
<div class="page-title-cont page-title-small grey-dark-bg">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">LEGALITAS</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="{{ route('home')}}">Home</a><span class="slash-divider">/</span><span
                        class="bread-current">LEGALITAS</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- COTENT CONTAINER -->
<div class="container white-bg plr-30 pt-50 pb-40 ">

    <div class="relative">
        <!-- PORTFOLIO FILTER -->
        <div class="port-filter ">
            <a href="#" class="filter active" data-filter="*">Legalitas</a>
        </div>

        <!-- ITEMS GRID -->
        <ul class="port-grid display-hover-on-mobile port-grid-2 clearfix" id="items-grid">

            <!-- Item 1 -->
            <li role="button" class="port-item mix development">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-5.jpg"
                            alt="img"></div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">MINIMALISM BOOKS</a></h3>
                        <span><a href="#">ui elements</a><span class="slash-divider">/</span><a
                                href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-5.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/blog/post-wide-3.jpg"></a>
                            <a href="images/blog/post-wide-4.jpg"></a>
                            <a href="images/blog/post-wide-5.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Item 2 -->
            <li role="button" class="port-item mix design">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="images/portfolio/projects-3.jpg" alt="img">
                    </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">CALENDAR</a></h3>
                        <span><a href="#">photography</a><span class="slash-divider">/</span><a
                                href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-3.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/blog/post-prev-1.jpg"></a>
                            <a href="images/blog/post-prev-2.jpg"></a>
                            <a href="images/blog/post-prev-3.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Item 3 -->
            <li role="button" class="port-item mix photography">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="images/portfolio/projects-1.jpg" alt="img">
                    </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                        <span><a href="#">branding</a><span class="slash-divider">/</span><a
                                href="#">marketing</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-1.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/portfolio/car-2.jpg"></a>
                            <a href="images/portfolio/car-3.jpg"></a>
                            <a href="images/portfolio/car-4.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Item 4 -->
            <li role="button" class="port-item mix development">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="images/portfolio/projects-6.jpg" alt="img">
                    </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                        <span><a href="#">design</a><span class="slash-divider">/</span><a
                                href="#">photography</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-6.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/portfolio/projects-6.jpg"></a>
                            <a href="images/portfolio/projects-6-box.jpg"></a>
                            <a href="images/portfolio/projects-8.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Item 5 -->
            <li role="button" class="port-item mix design">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="images/portfolio/projects-7.jpg" alt="img">
                    </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                        <span><a href="#">ui elements</a><span class="slash-divider">/</span><a
                                href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-7.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/portfolio/projects-9.jpg"></a>
                            <a href="images/portfolio/projects-10.jpg"></a>
                            <a href="images/portfolio/projects-11.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Item 6 -->
            <li role="button" class="port-item mix photography">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="images/portfolio/projects-4.jpg" alt="img">
                    </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">LOVE</a></h3>
                        <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-4.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/blog/post-prev-4.jpg"></a>
                            <a href="images/blog/post-prev-5.jpg"></a>
                            <a href="images/blog/post-prev-6.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Item 7 -->
            <li role="button" class="port-item mix development">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="images/portfolio/projects-8.jpg" alt="img">
                    </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                        <span><a href="#">design</a><span class="slash-divider">/</span><a
                                href="#">photography</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-8.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/portfolio/projects-12.jpg"></a>
                            <a href="images/portfolio/projects-13.jpg"></a>
                            <a href="images/portfolio/projects-14.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

            <!-- Item 8 -->
            <li role="button" class="port-item mix design">
                <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                        <img class="port-main-img" src="images/portfolio/projects-10.jpg" alt="img">
                    </div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                        <span><a href="#">ui elements</a><span class="slash-divider">/</span><a
                                href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                        <span class="popup-multi-gallery">
                            <a href="images/portfolio/projects-10.jpg" class="lightbox-item mr-20">
                                <div aria-hidden="true" class="icon_search"></div>
                            </a>
                            <a href="images/blog/post-prev-1.jpg"></a>
                            <a href="images/blog/post-prev-2.jpg"></a>
                            <a href="images/blog/post-prev-3.jpg"></a>
                        </span>
                        <a href="portfolio-single1.html">
                            <div aria-hidden="true" class="icon_link"></div>
                        </a>
                    </div>

                </div>
            </li>

        </ul>

    </div>

</div>


@endsection