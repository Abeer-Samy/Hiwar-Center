@extends("frontsite.layouts.master")
@section('page-title')
    Details Page
@endsection



@section("content")


<br />
      


        <!-- ======= Featured Services Section ======= -->
        <section class="pricing" style="background-color:rgb(255, 255, 255); padding-top:80px;">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                      <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">
                         

                        <div class="container px-lg-5">
  <div class="row mx-lg-n5">
    <div class="col py-3 px-lg-5">


    <form class="form-horizontal advanced-search" action="https://caus.org.lb/ar/%d8%a8%d8%ad%d8%ab-%d9%85%d8%aa%d9%82%d8%af%d9%85/" method="get">
		<div class="ajax-loader123" style="display: none;"></div>
		<div class="form-group">

			<div class="col-sm-12 mb20">
				<label class="control-label" for="email">كلمة البحث:</label>
				<input type="text" class="form-control" id="email" placeholder="ادخل كلمة البحث" name="key" value="قضية ">
			</div>
        			<div class="col-sm-12 mb20">
				<label class="control-label" for="email">النوع:</label>
				<select id="selectType" class="form-control" name="type">
					<option value="">الكل</option>
					<option value="1">كتاب</option>
					<option value="2">مجلة</option>
					<option value="3">فعالية</option>
					<option value="4">دراسة</option>
					<option value="5">تقدير موقف</option>
					<option value="6">تدريب</option>
				</select>
			</div>
        			

		</div>


		
	</form>
   <br><br>
    <div class="form-group">
			<div class="col-sm-10">
				<button type="submit" class="btn text-light" style = "background: #f97233">ابحث</button>
			</div>
		</div>

    </div>
    <div class="col py-3 px-lg-5 ">



    <form class="form-horizontal advanced-search" action="https://caus.org.lb/ar/%d8%a8%d8%ad%d8%ab-%d9%85%d8%aa%d9%82%d8%af%d9%85/" method="get">
		<div class="ajax-loader123" style="display: none;"></div>
		<div class="form-group">

			
        <div class="col-sm-12 mb20">
				<label class="control-label" for="email">من سنة:</label>
				<select id="datepicker" class="form-control" name="from">
					<option value="">الكل</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022" selected="">2022</option>
            </select>
			</div>
			<div class="col-sm-12 mb20">
				<label class="control-label" for="email">الى سنة:</label>
				<select id="datepicker" class="form-control" name="to">
					<option value="">الكل</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            </select>
			</div>

			

		</div>


		
	</form>


    </div>
  </div>
</div>


      
<p>هنا رح يعرض نتائج البحث</p>
  
                            </div>


                </div>

            </div>
        </section>
        <!-- End Pricing Section -->
  
         <!-- End Testimonials Section -->
        <br />
        <br />
      

        </div><!-- /.container -->
































@endsection