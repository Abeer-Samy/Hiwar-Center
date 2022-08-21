@extends("frontsite.layouts.master")
@section('page-title')
    Home Page
@endsection
@section("content")
   
<br />
      
        <!-- ======= Featured Services Section ======= -->
        <section class="pricing" style="background-color:rgb(255, 255, 255); padding-top:80px;">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                   
                    <!-- End Pricing Item -->

                    <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">
              <h5 class="fontheader" style="text-align: right;">
              مركز حوار للدراسات والأبحاث| دورات  </h5>
<br><br>


                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <section id="services" class="services">
                            <div class="container" data-aos="fade-up">

                                <div class="row gy-5">

                                @if($courses->count()>0)
                                @foreach($courses as $course)

                                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                                        <div class="service-item">
                                        <div class="img">
                                                <img src='{{asset("public/image/course/{$course->img}")}}'
                                                style="width:400px; height:240px; " class="img-fluid" alt="">
                                            </div>
                                            <div class="details position-relative">
                                               
                                                <a href="lectureCoure" class="stretched-link">
                                                    <h3>{{ $course->address}}</h3>
                                                </a>
                                                <!-- <p>وصف مختصر للدورة</p> -->
                                                <p>{{ $course->description }}</p>
                                                <a href="lectureCoure" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div><!-- End Service Item -->
                                
                                    @endforeach
                                    {{ $courses->links() }}
                    @else
                    <div class='alert alert-info'><b>نأسف</b> !لا توجد نتائج
                    @endif
                </div>
                            <div >

                                  
                            </div>
                                </div>
                            </div>


                        </div>
                    </div><!-- End Pricing Item -->
                    <!-- End Pricing Item -->

                </div>

            </div>
        </section>
        <!-- End Pricing Section -->
  
         <!-- End Testimonials Section -->
        <br />
        <br />
      

        </div><!-- /.container -->
@endsection