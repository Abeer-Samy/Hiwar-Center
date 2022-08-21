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
              <p class=" h3" style="text-align: center; color:#f97233">
              مركز حوار للدراسات والأبحاث| ديبلومات تدريبية  </p>

              <!-- <br /> -->
        
<div class="carousel-inner">
                    <div class="carousel-item active">
                        <section id="services" class="services">
                            <div class="container" data-aos="fade-up">
                            <div class="img">
                                <img src='assets\img\p.jpeg'
                                style="width:1000px; height:300px; " class="img-fluid" alt="">
                                            </div>
                                <div class="row gy-5">
                              
                                @if($diplomas->count()>0)
                                @foreach($diplomas as $diploma)

                                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700" >

                                    <div class="service-item">
                                       
                                            <div class="details position-relative">
                                               
                                                <a href="Trainingcourses" class="stretched-link" 
                                                style="text-align: center; color:#f97233">
                                                    <h2 > دبلوم {{ $diploma->address}}</h2>
                                                </a>
                                                <h3 class="authorh5"> 
                               @foreach($specialties as $specialty)
                                    @if($specialty->id == $diploma->specialization_id)
                                    {{$specialty->name}}
                                    @endif
                                @endforeach        
            
                </h3>
                                                <!-- <p>{{ $diploma->admission_requi }}</p>
                                                <p>{{ $diploma->brief_desc  }}</p> -->
                                                <a href="Trainingcourses" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div><!-- End Service Item -->
                                
                                    @endforeach
                        {{ $diplomas->links() }}
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