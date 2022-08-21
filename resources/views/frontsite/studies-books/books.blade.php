@extends("frontsite.layouts.master")
@section('page-title')
    Books Page
@endsection
@section("content")

<style>
	table.books_list{
		width:100%;
		border-collapse:collapse;
		border-right:1px solid #eeeeee;
		border-left:1px solid #eeeeee;
		font-family:"Droid Arabic Kufi", tahoma;
		font-size:11px;
		color:#7b7b7b;
		/*box-shadow: 0px 2px 5px 0px #f2efef;*/
	}
	table.books_list tr th{
		color:#995454;
		background:#faf9f9;
	}
	table.books_list tr th, table.books_list tr td{
		text-align:right;
		padding:13px 20px 13px 0;
		border:1px solid #eeeeee;
		border-right:none;
		border-left:none;
	}
	table.books_list tr th:last-child, table.books_list tr td:last-child{
		padding:13px 10px 13px 10px;
		text-align:center;
	}
	table.books_list tr.dark{
		background:#f8fbfc;
	}
	table.books_list tr td a{
		color:#7b7b7b;
	}
	table.books_list tr td a:hover{
		color:#0ab5a2;
	}
	/*table.books_list tr th:last-child, table.books_list tr td:last-child{
		padding-left:30px;
	}*/
	table.books_list tr td img{
		vertical-align:middle;
		height:23px;
		padding:0 0 0 5px;
	}
	</style>

<section class="pricing" style=" padding-top:80px;">
            <!-- <div class="container" data-aos="fade-up"> -->

                <div class="row gy-4">
				<div class="col-lg-12" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">


<table class="books_list">
<tbody><tr>
<th>ت</th> 
<th>إسم الكتاب</th>
<th>غلاف الكتاب</th>
<th>المؤلف</th>
 <th>الناشر</th>
  <th>تحميل</th> </tr>


@foreach($studies as $study)

<tr class="">
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->id}}</a></td>
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->origititle}} </a></td>
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);"><img height=100 width= 70 src='{{asset("storage/assets/img/studies/{$study->imge}")}}'></a></td> 
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->title}} </a></td> 
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->publish_house}}</a></td>
<td><a href='{{asset("public/pdf/studies/$study->pdf")}}' title="7.605 MB" target="_blank" style="color: rgb(123, 123, 123);">{{ $study->pdf }}</a></td> </tr>



@endforeach

</tbody></table>

<div class="paging"><a href="?id=23&amp;p=1"><span>1</span></a> <a href="?id=23&amp;p=2">2</a> <a href="?id=23&amp;p=2">التالي</a> </div>
<div class="clear">&nbsp;</div>

</div>
                    </div><!-- End Pricing Item -->
                    <!-- End Pricing Item -->

                <!-- </div> -->

            </div>

        </section><!-- End Pricing Section -->






<style>
.paging{
	background:#edeef2;
	margin:5px 0 0 0;
	padding:2px 0;
	border:1px solid #d8d8d8;
	border-right:5px solid #0080bb;
	border-left:5px solid #0080bb;
	border-bottom-right-radius:10px;
	border-bottom-left-radius:10px;
	text-align:center;
	height:35px;
}
.paging a{
	background:#FFFFFF;
	border:1px solid #CCCCCC;
	display:inline-block;
	padding:5px 8px 5px 8px;
	margin:3px 0 0 0;
	color:#346f8c;
	border-radius:5px;
	line-height:17px;
/*	text-shadow:0 0 10px #51A2A2;*/
	text-align:center;
	
	font-family:"hacen_xxl", "Tahoma";
	font-size:13px;
}
.paging a:hover{
	border-color:#51A2A2
}
.paging a span{
	color:#BB005E;
}
</style>









@endsection