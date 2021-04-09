@extends('layouts.gading.index')
@section('content')
    <div class="page-title-cont page-title-small grey-dark-bg">
        <div class="relative container align-left">
            <div class="row">

                <div class="col-md-8">
                    <h1 class="page-title">OUR PRODUCT</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <a href="{{route('home')}}">Home</a><span class="slash-divider">/</span><span
                            class="bread-current">OUR PRODUCT</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="grey-dark-bg clearfix">
        <!-- COTENT CONTAINER -->
        <div class="container plr-30 pt-50 pb-30">

            {{-- <div class="row">
                @if(count($contents) > 0)
                    @foreach($contents as $content)
                        <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-70" data-wow-delay="600ms">
                            <div class="post-prev-img">
                                <a href="{{ url('product').'/'.$content->id }}"><img src="{{ $content->media_link }}" alt="img"></a>
                            </div>
                            <div class="post-prev-title mb-5">
                                <h3><a class="font-norm a-inv" href="{{ url('product').'/'.$content->id }}">{{ $content->name }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div> --}}
            <div class="row">
                @if(count($contents) > 0)
                    @foreach($contents as $content)
                        <div class="col-sm-6 col-md-3 col-lg-3 wow fadeIn pb-70" data-wow-delay="600ms">
                            <div class="post-prev-img">
                                <a href="{{ url('product-detail/' . $content->id)}}"><img src="{{ $content->media_link }}" alt="img"></a>
                            </div>
                            <div class="post-prev-title mb-5">
                                <h3><a class="font-norm a-inv" href="{{ url('product-detail/' . $content->id)}}"><span style="color:#e7d61d;">{{ $content->name }}</span></a></h3>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>



@endsection
