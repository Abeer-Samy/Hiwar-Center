@extends("frontsite.layouts.master")
@section('page-title')
ملفات بحثية
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
                    <p class=" h3" style="text-align: center"> مركز حوار للدراسات والأبحاث| ملفات بحثية </p>


                    <hr>
                    @foreach($versions as $ver)
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <!-- <br><br> -->

                                <img class="rounded mx-auto d-block" src='{{asset("storage/assets/img/versions/{$ver->imge}")}}' alt="" width="350" height="250">
                            </div>
                            <div class="col-1">
                            </div>

                            <div class="col-7">
                                <div class="alert" role="alert">
                                    <div class="text-cloumn">

                                        <h2>
                                            <a href="#">
                                                {{ $ver->title}} </a>
                                        </h2>

                                        <span class="date ">
                                            <i class="fa fa-calendar " aria-hidden="true"></i>
                                            {{ $ver->date}}</span>
                                        <h5 class="authorh5">عبد القوي حسان </h5>
                                        <p>
                                            <strong>
                                                {{ $ver->subject}}

                                            </strong>
                                        </p>


                                    </div>


                                </div>
                            </div>
                        </div>

                        <hr>

                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Pricing Section -->

<!-- End Testimonials Section -->
<br />
<br />


@endsection