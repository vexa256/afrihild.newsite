 <!-- start of breadcumb-section -->
 <div class="wpo-breadcumb-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="wpo-breadcumb-wrap">
                     <h2>{{ $Title }}</h2>
                     <ul>
                         <li><a href="index.html">Home</a></li>
                         <li><span>Gallery</span></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end of wpo-breadcumb-section-->
 <!-- start wpo-project-section -->
 <section class="wpo-project-section pb-5 section-padding">
     <div class="container-fluid">
         <div class="sortable-gallery">

             <div class="animated-thumbnails gallery-container clearfix">
                 <div class="px-3 mx-3  mt-5">
                     <div id="lightgallery" class="row">
                         @isset($GlobalData)

                             @foreach ($GlobalData as $data)
                                 <div class="col-md-4">
                                     <a href="{{ asset($data->URL) }}">
                                         <img class="img-fluid"
                                             src="{{ asset($data->URL) }}" />
                                     </a>
                                 </div>
                             @endforeach

                         @endisset
                     </div>
                 </div>
             </div>
         </div>
     </div>

     </div> <!-- end container -->
 </section>
 <!-- end wpo-project-section -->
