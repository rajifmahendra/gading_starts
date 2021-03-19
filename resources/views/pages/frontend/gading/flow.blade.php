@extends('layouts.gading.index')
@section('content')
<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250"
    style="background-image: url(images/work-proc-bg.jpg)">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">FLOW</h1>
                <div class="page-sub-title">

                </div>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="{{ route('home')}}">Home</a><span class="slash-divider">/</span><span
                        class="bread-current">FLOW</span>
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
                <div class="col-md-12">
                    <!-- TIMELINE -->
                    {{-- <div class="heading-underline h3-line">
                        <h3>FLOW</h3>
                    </div> --}}
                    <section id="cd-timeline" class="cd-container mb-100">
                        <div class="cd-timeline-start">
                            <div class="cd-timeline-start-caption">START</div>
                            <div class="cd-timeline-start-date"></div>
                        </div>
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <span aria-hidden="true" class="icon_clock_alt"></span>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                {{-- <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                                <div>Iste voluptatibus minus veritatis, consectetur adipisicing elit. Iusto, optio,
                                    dolorum provident rerum aut</div> --}}
                                <span class="cd-date"><span class="cd-date-year">Project / Event
                                    Report</span><span
                                        class="cd-date-month"></span></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <span aria-hidden="true" class="icon_clock_alt"></span>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                    {{-- <h2>HIC QUASI PLACEAT IURE TEMPORA</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                        provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis
                                        unde?</p> --}}
                                <span class="cd-date"><span class="cd-date-year">Output
                                    (Post Event)</span><span
                                        class="cd-date-month"></span></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <span aria-hidden="true" class="icon_clock_alt"></span>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                {{-- <h2>DOLOREM IPSAM QUAE RERUM QUIS</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati,
                                    quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda
                                    delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum
                                    quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam
                                    provident pariatur temporibus quia eos repellat consequuntur perferendis enim
                                    amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum
                                    eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p> --}}
                                <span class="cd-date"><span class="cd-date-year">Execute
                                    (Event)</span><span
                                        class="cd-date-month"></span></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <span aria-hidden="true" class="icon_clock_alt"></span>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                {{-- <h2>ISTE VOLUPTATIBUS MINUS VERITATIS</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis
                                    unde? Iste voluptatibus minus veritatis qui ut.</p> --}}
                                <span class="cd-date"><span class="cd-date-year">Project / Event
                                    Planing & Design2014</span><span
                                        class="cd-date-month"></span></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <span aria-hidden="true" class="icon_clock_alt"></span>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                {{-- <h2>CONSECTETUR ADIPISICING ELIT</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum.</p> --}}
                                <span class="cd-date"><span class="cd-date-year">Project / Event
                                    Contract</span><span
                                        class="cd-date-month"></span></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <span aria-hidden="true" class="icon_clock_alt"></span>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                {{-- <h2>CONSECTETUR ADIPISICING ELIT</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum.</p> --}}
                                <span class="cd-date"><span class="cd-date-year">Client Brief</span><span
                                        class="cd-date-month"></span></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <span aria-hidden="true" class="icon_clock_alt"></span>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                {{-- <h2>CONSECTETUR ADIPISICING ELIT</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum.</p> --}}
                                <span class="cd-date"><span class="cd-date-year">Preperation
                                    (Pra event)</span><span
                                        class="cd-date-month"></span></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-start cd-final">
                            <div class="cd-timeline-start-caption">MAIN EVENT</div>
                        </div>
                    </section> <!-- cd-timeline -->
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
