@extends('layouts.gading.index')
@section('content')
<!-- PAGE TITLE SMALL -->
<div class="page-title-cont page-title-small grey-dark-bg">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">What We Can Provide</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="{{ Route('home') }}">Home</a><span class="slash-divider">/</span><span
                        class="bread-current">SERVICES</span>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- DIVIDER -->
<hr class="mt-0 mb-0">
<!-- COTENT CONTAINER -->
<!-- FEATURES 1 -->
<div class="page-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 wow fadeInLeft equal-height ">
                <div class="fes2-main-text-cont">
                    <div class="title-fs-45">
                       MICE<br>
                        <span class="bold">(Meeting, Incentive, Convention & 
                            Exhibition) :</span>
                    </div>
                    <div class="line-3-70"></div>
                    <div class="fes2-text-cont"><ul class="icon-list">
                        <li><i class="fa fa-check"></i>Employee Meeting & Gathering</li>
                        <li><i class="fa fa-check"></i>Workshop & Seminar</li>
                        <li><i class="fa fa-check"></i>Product Showcase & Exhibition</li>
                    </ul></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="fes2-img equal-height"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- FEATURES 2 -->
<div class="page-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 left-50 wow fadeInRight equal-height">
                <div class="fes2-main-text-cont">
                    <div class="title-fs-45">
                        Computer and <br>
                        <span class="bold">Supplies Procurement :</span>
                    </div>
                    <div class="line-3-100"></div>
                    <div class="fes2-text-cont">
                        <ul class="icon-list">
                        <li><i class="fa fa-check"></i>Laptop & PC</li>
                        <li><i class="fa fa-check"></i>Printer & Scanner</li>
                    </ul></div>
                </div>
            </div>

            <div class="col-md-6 right-50">
                <div class="row">
                    <div class="fes3-img equal-height"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- FEATURES 3 -->
<div class="page-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 wow fadeInLeft equal-height ">
                <div class="fes2-main-text-cont">
                    <div class="title-fs-45">
                       The<br>
                        <span class="bold">Advertising :</span>
                    </div>
                    <div class="line-3-70"></div>
                    <div class="fes2-text-cont"><ul class="icon-list">
                        <li><i class="fa fa-check"></i>Making a creative advertisement design</li>
                        <li><i class="fa fa-check"></i>Production and broadcasting product advertisement</li>
                    </ul></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="fes4-img equal-height"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- FEATURES 4 -->
<div class="page-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 left-50 wow fadeInRight equal-height">
                <div class="fes2-main-text-cont">
                    <div class="title-fs-45">
                        The<br>
                        <span class="bold">Rental Services :</span>
                    </div>
                    <div class="line-3-100"></div>
                    <div class="fes2-text-cont"><ul class="icon-list">
                        <li><i class="fa fa-check"></i>Transportation Rental Services</li>
                        <li><i class="fa fa-check"></i>Office Equipment Rental Services</li>
                    </ul></div>
                </div>
            </div>

            <div class="col-md-6 right-50">
                <div class="row">
                    <div class="fes5-img equal-height"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- DIVIDER -->
<hr class="mt-0 mb-0">


<!-- CALL TO ACTION  -->
<div class="port-view-more-cont-dark">
    <a class="port-view-more-dark " href="contact.html">LET'S WORK TOGETHER</a>
</div>
@endsection
