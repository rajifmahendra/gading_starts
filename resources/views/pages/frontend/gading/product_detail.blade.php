@extends('layouts.gading.index')
@section('content')
    <div class="page-title-cont page-title-small grey-dark-bg">
        <div class="relative container align-left">
            <div class="row">

                <div class="page-section pt-110-b-30-cont">
                    {{-- <div class="container">
                        @if(isset($contents))
                        <div class="mb-50">
                            <h2 class="section-title pr-0"><span class="bold main-text-color">PRODUCT DETAIL</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 mb-50">
                                <div class="post-prev-img popup-gallery">
                                    <a href="{{ $contents->media_link }}"><img src="{{ $contents->media_link }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">
                                <div class="row">
                                    <div class="col-xs-6  mt-0 mb-30">
                                        <strong class="item-price">{{ strtoupper($contents->name) }}</strong>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-30">
                                <div class="mb-30">
                                    {{ $contents->description }}
                                </div>
                                <hr class="mt-0 mb-30">
                                <div class="font-12 lh-20 mb-30">
                                    <div>CATEGORY: <h6 class="a-dark">{{ strtoupper($contents->product_category->category) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <h1 class="text-center">PRODUCTS UNAVAILABLE</h1>
                    @endif --}}
                    <div class="container">
                        @if(isset($contents))
                            <div class="mb-50">
                                <h2 class="section-title pr-0"><span class="bold main-text-color">PRODUCT DETAIL</span></h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 mb-50">
                                    <div class="post-prev-img popup-gallery">
                                        <a href="{{$contents->media_link}}"><img src="{{ $contents->media_link }}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">
                                    <div class="row">
                                        <div class="col-xs-6  mt-0 mb-30">
                                            <strong class="item-price" style="color: #eee;">{{ strtoupper($contents->name) }}</strong>
                                        </div>
                                    </div>
                                    <hr class="mt-0 mb-30">
                                    <div class="mb-30">
                                        {{ $contents->description }}
                                    </div>
                                    <hr class="mt-0 mb-30">
                                    <div class="font-12 lh-20 mb-30">
                                        <div>CATEGORY: <h6 class="a-dark" style="color: #eee;">{{ strtoupper($contents->product_category->category) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- <h1 class="text-center">PRODUCTS UNAVAILABLE</h1> --}}

                </div>

            </div>
        </div>
    </div>


@endsection
