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

                    <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="180">
                        <div class="pricing-item">
<br><br><br><br><br>
                     <div class="pricing-header">
                        <h5 class="text-start" style="color: whitesmoke;font-weight: 700">
                                    الحوار للدراسات والابحاث </h5>
                                    <a href="magazine"><h5 class="list-group-item list-group-item-primary">مجلة حوار </h5></a>

                                    <!-- <a href="PublicationStandards"> <h5 class="list-group-item list-group-item-primary">معايير النشر</h5></a> -->
                        <a href="PublishMajala">  <h5 class="list-group-item list-group-item-primary">تقديم ورقة في المجلة</h5></a>

                     </div>
                       
                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-lg-9" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">
                        <h6 class="fontheader" style="text-align: right;">مركز حوار للدراسات والأبحاث| البحث في مجلة الحوار للدراسات والأبحاث: </h6></th>

                        <form method="get" action='{{route("result")}}'>
                            <div class="form-group">
                                <select name='issue' id='issue' class='select2 form-control ' placeholder='بعنوان العدد'>
                                    <option value=''>رقم العدد</option>
                                            @foreach($issues as $issue)
                                    <option {{request()->issue==$issue->id?"selected":""}} value="{{$issue->id}}">
                                            {{$issue->issue_title}}</option>
                                            @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                    <input type="text" name="q" value="{{request()->q}}" class="form-control m-input" placeholder=" ابحث بعنوان المحتوى ">
                            </div>
                            <br>
                            
                            <button type="button" class="btn btn-outline-light align" style="background: #f97233; float: left;">ابحث</button>

                        </form>


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