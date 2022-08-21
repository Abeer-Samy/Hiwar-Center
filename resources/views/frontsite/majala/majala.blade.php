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
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-9" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">
                           
                        <table>
                            <tr>
                             <th> <h6 class="fontheader" style="text-align: right;">مركز حوار للدراسات والأبحاث| مجلة حوار </h6></th>
                             <th scope="col" style="color: midnightblue; font-weight: 500; ">
                             <a href="searchMajala">   <button type="button" class="btn btn-outline-light align" 
                                   style="background: #f97233; float: left;">البحث في المجلة</button></a></th>
                            </tr> 
                        </tabel>                           
                           
                            <div class="table-responsive" >
                            @if($issues->count()>0)
                                <table class="table table-striped table-sm border border-2">
                                  <thead>
                                    <tr>
                                      <th scope="col" style="color: midnightblue; font-weight: 800;">تاريخ النشر</th>
                                      <th scope="col" style="color: midnightblue; font-weight: 800;">أعداد المجلة</th>
                                   
            
                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($issues as $issue)
                                    <tr>
                                    <td>{{ $issue->issue_date }}</td>
                                    <td> <a href="issue"> {{ $issue->issue_title}}</a></td>
                                    
            
                                    </tr>
                                   
                                    @endforeach   
                                  </tbody>
                                </table>
                                {{ $issues->links() }}
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
                    </div><!-- End Pricing Item -->
                    <!-- End Pricing Item -->

                </div>

            </div>
        </section><!-- End Pricing Section -->
  
         <!-- End Testimonials Section -->
        <br />
        <br />
      

        </div><!-- /.container -->
        <br><br>
@endsection