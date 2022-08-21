@extends("frontsite.layouts.master")
@section('page-title')
مـؤتـمـرات
@endsection
@section("content")
   
<br />
      
 <!-- ======= Featured Services Section ======= -->
 <section class="pricing" >
            <!-- <div class="container" data-aos="fade-up"> -->

              
                    
                
            <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">
                        <p class=" h2" style="text-align: center"> مـؤتـمـرات  </p>


                        <div class="carousel-inner">
                    <div class="carousel-item active">
                        <section id="services" class="services">
                            <div class="container" data-aos="fade-up">

                            <div class="img">
                                                <img src="assets/img/e.jpg" class="img-fluid" alt=""   style="width:1300px ; height:350px">
                                            </div>
                                <div class="row gy-5">
                                @foreach($events as $event)

                                <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                                        <div class="service-item">
                                    
                                            <div class="details position-relative">
                                               
                                                <a href="#" class="stretched-link">
                                                    <h3>{{$event->title}}</h3>
                                                </a>
                                                <p>{{$event->topic}}</p>
                                                <a href="#" class="stretched-link"></a>
                                                <!-- <a class="back-top rounded-circle text-danger " href="https://www.youtube.com/watch?v=qemugjx4HXM"  > شاهد 
                <img src="assets/img/you.jpeg" alt="يوتيوب" class="rounded-circle "
                    style="width:50px; height:50px; ">
</a> -->
                                            </div>
                                        </div>
                                    </div><!-- End Service Item -->

                                    
                                    
                                
                      @endforeach
                       

                        </div>

                        </div>
                        <hr>

                    </div><!-- End Pricing Item -->
                    <!-- End Pricing Item -->


             
        </section>
        <!-- End Pricing Section -->
  
         <!-- End Testimonials Section -->
         <br>
                    <hr>
                    <br>
      

        </div><!-- /.container -->
@endsection