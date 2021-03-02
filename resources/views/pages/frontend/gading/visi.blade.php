@extends('layouts.gading.index')
@section('content')
<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250"
    style="background-image: url(images/work-proc-bg.jpg)">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">VISI & MISI</h1>
                <div class="page-sub-title">

                </div>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="{{ route('home')}}">Home</a><span class="slash-divider">/</span><span class="bread-current">VISI & MISI</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- COTENT CONTAINER -->
<div class="container bs-docs-container p-140-cont">
    <div class="row">


        <!-- COTENT  -->
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <!-- HEADINGS  -->
                    <div id="heading" class="bs-docs-section mb-100">
                        <h3>Visi :</h3>
                        <p>Become a committed company, and always
                            providing the best and reliable services in
                            the fields that we provide.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- HEADINGS  -->
                    <div id="heading" class="bs-docs-section mb-100">
                        <h3>Misi :</h3>
                        <p>Providing high-quality service products
                            and services with competitive prices,
                            committed to transparent and reliable
                            behavior to all clients and stakeholders.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
