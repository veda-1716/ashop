@extends('layouts.app')
@section('content')
    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    @livewire('contact-us')
                    <!-- ./End Contact Form -->
                    <!-- Contact Details -->
                    <div class="contact-details col-md-6 ">
                        <div class="google-map">
                            <div id="map"></div>
                        </div>
                        <ul class="contact-short-info">
                            <li>
                                <i class="tf-ion-ios-home"></i>
                                <span> London, United Kingdom </span>
                            </li>
                            <li>
                                <i class="tf-ion-android-phone-portrait"></i>
                                <span>Phone: 9573679970 </span>
                            </li>
                            <li>
                                <i class="tf-ion-android-globe"></i>
                                <span>Fax: +0165897842</span>
                            </li>
                            <li>
                                <i class="tf-ion-android-mail"></i>
                                <span>Email: ashop@gmail.com </span>
                            </li>
                        </ul>
                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul>
                                <li><a class="fb-icon" href="{{ env('MY_FACEBOOK') }}"><i
                                            class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="{{ env('MY_TWITTER') }}"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                                <li><a href="{{ env('MY_GOOGLEPLUS') }}"><i
                                            class="tf-ion-social-googleplus-outline"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->
                    </div>
                    <!-- / End Contact Details -->



                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>
@endsection
