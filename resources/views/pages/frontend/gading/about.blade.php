@extends('layouts.gading.index')
@section('content')
<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250"
    style="background-image: url(images/work-proc-bg.jpg)">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">PROFIL PERUSAHAAN</h1>
                <div class="page-sub-title">

                </div>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="{{ route('home')}}">Home</a><span class="slash-divider">/</span><span class="bread-current">PROFILE PERUSAHAAN</span>
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
                <div class="col-md-4">
                    <!-- HEADINGS  -->
                    <div id="heading" class="bs-docs-section mb-100">
                        <h3>PT. Gading Persada Mandiri
                            is a company that provides :</h3>
                        <ul class="icon-list">
                            <li><i class="fa fa-check"></i><span class="highlight-text">MICE (Meeting, Incentive,
                                    Convention, and Exhibition)services</span></li>
                            <li><i class="fa fa-check"></i><span class="highlight-text">Event Organizer services</span>
                            </li>
                            <li><i class="fa fa-check"></i><span class="highlight-text">Computer and Supplies
                                    Procurement</span></li>
                            <li><i class="fa fa-check"></i><span class="highlight-text">Rental Services</span></li>
                            <li><i class="fa fa-check"></i><span class="highlight-text">HR Management Consulting
                                    service</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="mb-100"></h4>
                    <p class="">Until now PT. Gading Persada Mandiri is already trusted
                        to handling various types of projects from government,
                        companies, communities and all business forms.</p>
                </div>
                <div class="col-md-4">
                  <h4 class="mb-100"></h4>
                  <p class="">Our team are experts who have experienced in their field
                    and become an valuable asset for PT. Gading Persada
                    Mandiri in serving all that our client needed.</p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
