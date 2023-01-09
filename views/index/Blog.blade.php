<!-- start of wpo-blog-section -->
<section class="wpo-blog-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    <span>Our Blog</span>
                    <h2>Latest News & Update</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="wpo-blog-items">
            <div class="row">
                @isset($Blogs)

                    @foreach ($Blogs as $data)
                        <div class="col col-lg-4 col-md-8 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="{{ asset($data->URL) }}"
                                        alt="" height="250">
                                </div>
                                <div class="wpo-blog-content">
                                    <div class="wpo-blog-content-top">
                                        <h2 style="font-size: 19px; height: 7vh; overflow-y: scroll;"
                                            class="pb-3">
                                            <a href="#">
                                                {{ $data->Title }}
                                            </a>
                                        </h2>


                                        <p class=" pt-5"
                                            style="height: 30vh; overflow-y: hidden; text-align: justify; padding-left: 10px; padding-right: 10px
                      ">

                                            {{ strip_tags($data->Desc) }}

                                        </p>
                                        <a href="#" class="fs-5">Read
                                            More</a>

                                    </div>




                                </div>
                            </div>
                        </div>
                    @endforeach

                @endisset

            </div>
        </div>

    </div>
</section>
<!-- end of wpo-blog-section -->
