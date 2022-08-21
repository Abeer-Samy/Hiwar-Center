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
                        <!-- <a href="PublicationStandards"> <h5 class="list-group-item list-group-item-primary">معايير النشر</h5></a> -->
                        <a href="PublishMajala">  <h5 class="list-group-item list-group-item-primary">تقديم ورقة في المجلة</h5></a>

                     </div>
                       
                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-lg-9" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">
                        <h6 class="fontheader" style="text-align: right;">مركز حوار للدراسات والأبحاث| البحث في مجلة الحوار للدراسات والأبحاث: </h6></th>

                        <form>
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

                        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
         <div class="col-sm-12">
                @if($contents->count()>0)
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                                
                                <th>عنوان المحتوى</th>
                                <th >الكاتب</th>
                                <th>pdf</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contents as $content)

                            <tr role="row" class="odd">
                                
                                <td>{{ $content->title}}</td>
                                <td>{{ $content->author}}</td>
                                
                                <!-- <td><img height=100 width= 70 src='{{asset("public/image/content/$content->image")}}' alt=""></td> -->
                                <td><a href='{{asset("public/pdf/content/$content->pfd")}}' target='_blank' >{{ $content->pfd }}</></td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contents->links() }}
                    @else
                    <div class='alert alert-info'><b>نأسف</b> !لا توجد نتائج
                        <button type="button" class="close pt-0" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif
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