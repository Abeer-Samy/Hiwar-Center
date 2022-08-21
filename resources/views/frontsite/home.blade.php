@extends("frontsite.layouts.master")
@section('page-title')
    Home Page
@endsection
@section("content")


<<br />
    @if(count($homeSliders))
    <?php $index = 0 ?>

     <!-- ======= Featured Services Section ======= -->
     <div class="container" style="padding-top: 33px;">
            <div class="pricing" style="background-color:white; padding-top:0px;">
                <div class="container" data-aos="fade-up">
    
                    <div class="row">
    
           <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="180">
                           
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    @foreach($homeSliders as $item)
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{$index}}" class="{{$index++==0?'active':''}}" ></button>
                     @endforeach
                    </div>
                    <div class="carousel-inner">
                    <?php $index = 0 ?>
                    @foreach($homeSliders as $item)
                        <div class="carousel-item {{$index++==0?'active':''}}">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#55595c" />
                                <image href='{{asset("/storage/images/$item->image")}}' width="100%" height="100%"/>

                            </svg>

                            <div class="container" style="height: 300px; ">
                                <div class="carousel-caption text-start  ">
                                    <h3> {{$item->title}}</h3>
                                      <!-- <p>{{$item->subtitle}}</p> -->
                                    @if($item->url)
                                    <p><a class="btn btn-success" href="{{$item->url}}" {{$item->new_window?'target="_blank"':''}}> {{$item->button_text??'اضغط هنا'}} </a></p>
                                    @endif
                                </div>
                                <div class="col-12 col-md-6 pt-5">
                <div class="slider-img">
                  
                </div>
              </div>                                                                                        
                            </div>
                            
                        </div>
                    @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">السابق</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">التالي</span>
                    </button>
                </div>
                        </div><!-- End Pricing Item -->
    
    


     @endif


     

    
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pricing-item" style="height: 500px;">
    
                                <div class="pricing-header">
                                    <h5 class="text-start" style="color: whitesmoke;font-weight: 700">
                                        أخبار المركز
                                    </h5>
                                </div>
    
                                <br />
                                <div class="row">
                                    <div class="col-sm-4">
    
                                        <h6 class="date_day"><p>24</p></h6>
                                        <h6 class="date_month"><p><p>2022 يناير</p>  </p></h6>
    
                                    </div>
                                    <div class="col-sm-8">
                                        <h7 class="fontt" style="color: #fd7e14;">وحدة الدراسات   <span class="badge rounded-pill bg-success">تقدير موقف</span></h7>
                                        <a href="#" class="fontt"> وحدة الدراسات</a>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-4">
    
                                        <h6 class="date_day"><p>24</p></h6>
                                        <h6 class="date_month"><p><p>2022 يناير</p>  </p></h6>
    
                                    </div>
                                    <div class="col-sm-8">
                                        <h7 class="fontt" style="color: #fd7e14;">وحدة الدراسات   <span class="badge rounded-pill bg-warning text-dark">دراسات</span></h7><br />
                                        <a href="#" class="fontt"> تصاعد حدة القمع الأمنتصاعد حدة القمع الأمن</a>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-4">
    
                                        <h6 class="date_day"><p>24</p></h6>
                                        <h6 class="date_month"><p><p>2022 يناير</p>  </p></h6>
    
                                    </div>
                                    <div class="col-sm-8">
                                        <h7 class="fontt" style="color: #fd7e14;">وحدة الدراسات    <span class="badge rounded-pill bg-danger">تقييم حالة</span></h7><br />
                                        <a href="#" class="fontt"> تصاعد حدة القمع الأمنتصاعد حدة القمع الأمن</a>
                                    </div>
                                </div>
    
    
                            </div>
                        </div><!-- End Pricing Item -->
    
                    </div>
    
                </div>
            </div><!-- End Pricing Section -->
    </div>


        <!-- ======= Pricing Section ======= -->

        <section class="pricing" style="background-color:white; padding-top:0px;">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="500">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h5 class="text-start" style="color: whitesmoke;font-weight: 700">
                                    إصدارات المركز
                                </h5>
                            </div>
                            <br />

                            @foreach($versions as $item)

                            <div class="row">
                                <div class="col-sm-4">

                                    <!-- <h6 class="date_day"><p>{{$item->date}}</p></h6> -->
                                    <h6 class="date_month"><p><p>{{$item->date}}</p>  </p></h6>

                                </div>
                                <div class="col-sm-8">
                                    <h7 class="fontt" style="color: #fd7e14;">وحدة الإصدارات   
                                    <span class="badge rounded-pill bg-success">
                                        @foreach($versionsType as $type)
                                    @if($type->id == $item->version_type_id)
                                    {{$type->version_type}}
                                    @endif
                                @endforeach </span></h7>
                                    <a href="#" class="fontt">{{$item->title}} </a>
                                </div>
                            </div>
                            <hr />
                            @endforeach




                        </div>
                    </div><!-- End Pricing Item -->



                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-item ">

                            <div class="pricing-header">
                                <h5 class="text-start" style="color:whitesmoke; font-weight:700;">
                                    دراسات وكتب
                                </h5>
                            </div>
                            <br />
                            @foreach($studies as $item)

                            <div class="row">
                                <div class="col-sm-4">

                                    <h6 class="date_day"><p>   {{$item->year_publication}}</p></h6>
                                    <!-- <h6 class="date_month"><p><p>{{$item->year_publication}}</p>  </p></h6> -->

                                </div>
                                <div class="col-sm-8">
                                    <h7 class="fontt" style="color: #fd7e14;">  وحدة الدراسات 
                                     <span class="badge rounded-pill bg-success">
                                  
                        
                            @foreach($typeStudies as $type)
                                    @if($type->id == $item->study_type_id)
                                    {{$type->study_type}}
                                    @endif
                                @endforeach 
                        
                        </span></h7>
                                    <a href="#" class="fontt">{{$item->origititle}}</a>
                                </div>
                            </div>
                            <hr />
                           
                            @endforeach


                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h5 class="text-start" style="color: whitesmoke;font-weight: 700">
                                  مجلة الحوار العلمية
                                </h5>
                            </div>

                            <br />

                            @foreach($magazine as $item)

                            <div class="row">
                                <div class="col-sm-4">

                                    <h6 class="date_day"><p>24</p></h6>
                                    <h6 class="date_month"><p><p>2022 يناير</p>  </p></h6>

                                </div>
                                <div class="col-sm-8">
                                    <h7 class="fontt" style="color: #fd7e14;">وحدة المجلة   <span class="badge rounded-pill bg-success">تقدير موقف</span></h7>
                                    <a href="#" class="fontt"> {{$item->magazine_title}}+</a>
                                </div>
                            </div>
                            <hr />
                           
                            @endforeach


                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>
        </section><!-- End Pricing Section -->

      

        <!-- مؤتمرات Section -->
        <a href="#"><h5 class="fontheader"> مؤتمرات وفعاليات</h5></a>
        <p class="fontcenter">تجمع ثقافي تحت عنوان أو موضوع محدد يُدعى إليه المتخصصون في مجال ما ويُقدّمون أبحاثاً وأوراقَ عمل تعالج قضية ما من قضايا المؤتمر</p>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="الشريحة الأولى"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="الشريحة الثانية"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <section id="services" class="services">
                            <div class="container" data-aos="fade-up">

                                <div class="row gy-5">
                                @foreach($events as $event)

                                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                                        <div class="service-item">
                                            <div class="img">
                                                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="details position-relative">
                                                <div class="icon">
                                                    <i class="bi bi-bounding-box-circles"></i>
                                                </div>
                                                <a href="#" class="stretched-link">
                                                    <h3>{{$event->title}}</h3>
                                                </a>
                                                <p>{{$event->topic}}</p>
                                                <a href="#" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div><!-- End Service Item -->
@endforeach
                                </div>

                            </div>
                        </section>
                    </div>
                   

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i style="color: darkblue" class="bi bi-arrow-right-circle-fill"></i></span>
                    <span class="visually-hidden">السابق</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"><i style="color: darkblue" class="bi bi-arrow-left-circle-fill"></i>  </span>
                    <span class="visually-hidden">التالي</span>
                </button>
            </div>
        </div>
        <!--End مؤتمرات Section -->
        <!--دورات Section -->
        <a href="#"><h5 class="fontheader">دورات تدريبية</h5></a>
        <p class="fontcenter">تهدف الدورات التدريبية إلى توسيع قاعدة المعرفة لجميع المشتركين وتعليمهم وتطويرهم</p>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="الشريحة الأولى"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="الشريحة الثانية"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <section id="services" class="services">
                            <div class="container" data-aos="fade-up">

                                <div class="row gy-5">
                                @foreach($course as $co)

                                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                                        <div class="service-item">
                                            <div class="img">
                                                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="details position-relative">
                                                <div class="icon">
                                                    <i class="bi bi-bounding-box-circles"></i>
                                                </div>
                                                <a href="#" class="stretched-link">
                                                    <h3>{{$co->address}}</h3>
                                                </a>
                                                <!-- <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p> -->
                                                <a href="#" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div><!-- End Service Item -->

                                  @endforeach
                                   
                                </div>

                            </div>
                        </section>
                    </div>
                   
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i style="color: darkblue" class="bi bi-arrow-right-circle-fill"></i></span>
                    <span class="visually-hidden">السابق</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"><i style="color: darkblue" class="bi bi-arrow-left-circle-fill"></i>  </span>
                    <span class="visually-hidden">التالي</span>
                </button>
            </div>
        </div>
        <!--End دورات Section -->
        
        <br />
        <br />
      

        </div><!-- /.container -->
@endsection