@extends('layouts.gading.index')
@section('content')
<div class="page-title-cont page-title-small grey-dark-bg">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">Gallery</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES &
                        FEATURES</a><span class="slash-divider">/</span><span class="bread-current">PORTFOLIO</span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="grey-dark-bg clearfix">
    <!-- COTENT CONTAINER -->
    <div class="container dark-bg plr-30 pt-50 pb-30 ">

        <div class="relative">
            <!-- PORTFOLIO FILTER -->
            <div class="port-filter ">
                <a href="#" class="filter active" data-filter="*">Our Gallery</a>
                {{--          <a href="#" class="filter" data-filter=".development">Development</a>--}}
                {{--          <a href="#" class="filter" data-filter=".design">Design</a>--}}
                {{--          <a href="#" class="filter" data-filter=".photography">Photography</a>--}}
            </div>

            <!-- ITEMS GRID -->
            <ul class="port-grid display-hover-on-mobile port-grid-4 port-grid-gut clearfix" id="items-grid">
                <!-- Item 1 -->
                @if(!$galleries)
                @else
                @foreach($galleries as $gallery)
                <li role="button" class="port-item mix gallery">
                    <a href="{{ $gallery->file_contents }}">
                        <div class="port-img-overlay"><img class="port-main-img" src="{{ $gallery->file_contents }}"
                                alt="img"></div>
                    </a>
                    <div class="port-overlay-cont">
                        <div class="port-title-cont">
                            {{--                                <h3><a href="{{ $gallery->file_contents }}">MINIMALISM
                            BOOKS</a></h3>--}}
                            {{--                                <span><a href="{{ $gallery->file_contents }}">ui
                            elements</a><span class="slash-divider">/</span><a
                                href="{{ $gallery->file_contents }}">media</a></span>--}}
                        </div>
                        <div class="port-btn-cont text-center">
                            <a href="{{ $gallery->file_contents }}" target="_blank" class="lightbox mr-20"><span
                                    class="icon_search"></span> PREVIEW</a>
                            {{--                                <a href="{{ $gallery->file_contents }}"><div
                                aria-hidden="true" class="icon_link"></div></a>--}}
                        </div>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>

        </div>

    </div>

</div>
@endsection