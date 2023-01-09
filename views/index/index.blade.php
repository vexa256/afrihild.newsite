<!-- start of wpo-hero-section-1 -->
<section class="wpo-hero-section-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col col-xs-6 col-lg-6">
                <div class="wpo-hero-section-text">
                    <div class="wpo-hero-title-top">
                        <span>Child Focused Research</span>
                    </div>
                    <div class="wpo-hero-title">
                        <h2>We are a Centre of Excellence in the study of the
                            African child</h2>
                    </div>
                    <!-- <div class="wpo-hero-subtitle">
                        <p>Lorem Ipsum</p>
                    </div> -->
                    <div class="btns">
                        <a href="{{ route('AboutTheAfriChildCenterMakerere') }}"
                            class="btn theme-btn-s2">Learn
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-vec">
                    <div class="right-items-wrap">
                        <div class="right-item">
                            <div class="r-img">
                                <img src="{{ asset('assets/images/slider/right-img2.png') }}"
                                    alt="">
                            </div>
                            <!-- <div class="wpo-happy-client">
                                <div class="wpo-happy-client-img">
                                    <ul class="wpo-happy-client-slide owl-carousel">
                                        <li><img src="assets/images/slider/client1.png" alt=""></li>
                                        <li><img src="assets/images/slider/client2.png" alt=""></li>
                                        <li><img src="assets/images/slider/client3.png" alt=""></li>
                                        <li><img src="assets/images/slider/client4.png" alt=""></li>
                                        <li><img src="assets/images/slider/client3.png" alt=""></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <div class="right-item">
                            <div class="wpo-total-project">
                                <div class="wpo-total-project-wrap">
                                    <div class="wpo-total-project-icon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="wpo-total-project-text">
                                        <h3>252+</h3>
                                        <p>Total Research</p>
                                    </div>
                                </div>
                                <div class="project-shape">
                                    <img src="{{ asset('assets/images/slider/s.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="r-img">
                                <img src="{{ asset('assets/images/slider/right-img.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of wpo-hero-section-1 slider -->
<!-- start of wpo-about-section -->
<!-- wpo-cta-area end -->
<!-- wpo-event-area start -->
<div class="wpo-blog-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    <span>Events</span>
                    <h2>Upcoming Events</h2>
                    <p>AfriChild Events</p>
                </div>
            </div>
        </div>
        <div class="wpo-blog-items">
            <div class="row">
                @isset($Events)

                    @foreach ($Events as $data)
                        <div class="col col-lg-4 col-md-8 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="{{ asset($data->URL) }}"
                                        alt="" height="250">
                                </div>
                                <div class="wpo-blog-content">
                                    <div class="wpo-blog-content-top">
                                        <h2
                                            style="font-size: 19px; height: 7vh; overflow-y: scroll;">
                                            <a href="#">
                                                {{ $data->Title }}
                                            </a>
                                        </h2>

                                        <h2
                                            style=" font-size: 12px; height: 7vh; overflow-y: scroll;">
                                            <a href="#"
                                                style="color: #de0b81 !important;">
                                                From
                                                {{ date('F j, Y,', strtotime($data->StartDate)) }}
                                                to
                                                {{ date('F j, Y,', strtotime($data->EndDate)) }}
                                            </a>
                                        </h2>
                                        <p
                                            style="height: 30vh; overflow-y: hidden; text-align: justify; padding-left: 10px; padding-right: 10px
                      ">

                                            {{ strip_tags($data->Desc) }}

                                        </p>
                                        <div class="btns center p-2">
                                            <a href="#Events{{ $data->id }}"
                                                data-bs-toggle="modal"
                                                class="btn theme-btn">Read
                                                More</a>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    @endforeach

                @endisset

            </div>
        </div>
    </div>
</div>

@include('index.EventsModal')
@include('index.Blog')
@include('index.Partners')
<!-- wpo-event-area end -->
