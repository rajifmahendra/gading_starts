@extends('layouts.gading.index')
@section('content')
<div class="page-title-cont page-title-big grey-dark-bg">
    <div class="relative container align-left">
        <div class="row">

            <div class="col-md-8">
                <h1 class="page-title">CONTACT</h1>
                <div class="page-sub-title">
                </div>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="{{route('home')}}">Home</a><span class="slash-divider">/</span><a href="#">PAGES</a><span
                        class="slash-divider">/</span><span class="bread-current">CONTACT</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- GOOGLE MAP & CONTACT FORM -->
<div class="page-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="row">
                    <!-- <div data-address="580 California Street, San Francisco, CA" id="google-map"></div> -->

                    <!-- *This is an example of using latitude and longitude if you need to use them instead of an address. Read more in the documentation.* -->
                    <div data-latitude="-6.221767" data-longitude="106.709665" id="google-map"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form-cont">
                    <!-- TITLE -->
                    <div class="mb-40">
                        <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                    </div>

                    <!-- CONTACT FORM -->
                    <div>
                        <form id="contact-form" action="{{ route('store.contact-us') }}" method="POST">
                            <input type="hidden" name="web_url" value="{{ url('/') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <!-- <label>Your name *</label> -->
                                    <input type="text" value="" data-msg-required="Please enter your name"
                                        maxlength="100" class="controled" name="name" id="name" placeholder="NAME"
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <!-- <label>Your email address *</label> -->
                                    <input type="email" value="" data-msg-required="Please enter your email address"
                                        data-msg-email="Please enter a valid email address" maxlength="100"
                                        class="controled" name="email" id="email" placeholder="EMAIL" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <!-- <label>Your email address *</label> -->
                                    <input type="number" value="" data-msg-required="Please enter your email address"
                                        data-msg-email="Please enter your phone number" maxlength="100"
                                        class="controled" name="phone" id="phone" placeholder="PHONE: 628123456789" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <!-- <label>Your email address *</label> -->
                                    <select  name="category" id="category" class="controled text-warning" style="color: white!important;background: #4b4e53" required>
                                        <option class="text-white" value="kritik">Kritik dan Saran</option>
                                        <option class="text-white" value="daftar">Daftar Mitra Kerja PT. GADING PERSADA MANDIRI</option>
                                    </select>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-40">
                                    <!-- <label>Message *</label> -->
                                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3"
                                        class="controled" name="message" id="message" placeholder="MESSAGE"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center-xxs">
                                    <input type="submit" value="SEND MESSAGE" class="button medium gray"
                                        data-loading-text="Loading...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkbox small">
                                        <label><input type="checkbox" value="privacy"
                                                data-msg-required="Please accept the terms" id="agree" name="agree"
                                                class="checkbox" required>I agree to the terms of service</label>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="alert alert-success hidden animated fadeIn" id="contactSuccess">
                            Thanks, your message has been sent to us.
                        </div>

                        <div class="alert alert-danger hidden animated shake" id="contactError">
                            <strong>Error!</strong> There was an error sending your message.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- CONTACT INFO SECTION 1 -->
<div id="contact-link" class="page-section p-110-cont grey-dark-bg">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-map"></div>
                    </div>
                    <div class="cis-text">
                        <h3><span class="bold">ADDRESS</span></h3>
                        <p>Jl. Hos Cokrotaminoto Ruko CBD Blok A3/19 <br>
                            Karang Tengah – Tangerang <br>
                            Banten - Indonesia 15157</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-mail"></div>
                    </div>
                    <div class="cis-text">
                        <h3><span class="bold">EMAIL</span></h3>
                        <p><a href="mailto:gp.mandiri@yahoo.com">gp.mandiri@yahoo.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                    <div class="cis-icon">
                        <div class="icon icon-basic-smartphone"></div>
                    </div>
                    <div class="cis-text">
                        <h3><span class="bold">CALL US</span></h3>
                        <p>021-7319597</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
