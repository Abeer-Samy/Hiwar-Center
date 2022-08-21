@extends("layouts.admin")
@section("title","عن المركز")

@section("title-side")

<a href='{{ route("editComm",$centers->id) }}'
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-edit"></i>
        <span>
            تعديل
        </span>
    </span>
</a>

@endsection


@section("content")

<!-- ======= Featured Services Section ======= -->
<section class="pricing" style="background-color:rgb(255, 255, 255); padding-top:80px;">
            <div class="container" data-aos="fade-up">
     
                <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="400">
                        
                    <div class="pricing-item ">
                        <p class="fontheader h2" style="text-align: right"> مـن نـحـن</p>
                        <div class="img">
                            <img src='{{asset("storage/assets/img/center/{$centers->image}")}}' class="img-fluid" alt="">
                        </div>
                    
                </div>
            
            <p class="fontheader h2">   مركز  {{$centers->center_name }}</p>
                    
                                <p class="lead">رقم الهاتف: {{ $centers->phone }} </br>  </p> 
                                <p class="lead"> البريد الالكتروني: {{ $centers->email }} </p>   
                                <p class="lead"> الفاكس:<br> {{ $centers->fax }}</p>
                                <p class="lead">facebook : {{ $centers->facebook }} </p>
                                <p class="lead"> twitter: {{ $centers->twitter }} </p> 
                                <p class="lead"> instgrame: {{ $centers->instgrame }} </p> 
                                <p class="lead"> youtube: {{ $centers->youtube }} </p> 
                             
                   

                    
            </div>
            
        </div>
    
    </div>
    
    
    </div>

</div>
</div><!-- End Pricing Item -->
<!-- End Pricing Item -->



</section>
<!-- End Pricing Section -->

<!-- End Testimonials Section -->
<br />
<br />


</div><!-- /.container -->
@endsection