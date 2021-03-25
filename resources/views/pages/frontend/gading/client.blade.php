@extends('layouts.gading.index')
@section('content')
    <!-- PAGE TITLE LARGE IMG -->
    <div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250"
         style="background-image: url(images/work-proc-bg.jpg)">
        <div class="relative container align-left">
            <div class="row">

                <div class="col-md-8">
                    <h1 class="page-title">CLIENT</h1>
                    <div class="page-sub-title">

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <a href="{{ route('home')}}">Home</a><span class="slash-divider">/</span><span class="bread-current">CLIENT</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- COTENT CONTAINER -->
    <div class="container bs-docs-container p-140-cont">
        <div class="row">
            @forelse ($clients as $client)
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-2">
                    <img src="{{ $client->media_link }}">
                </div>
            @empty
            @endforelse
        </div>
    </div>

@endsection
