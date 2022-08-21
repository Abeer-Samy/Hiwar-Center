
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
	

<script>
			$(document).ready(function() {
				$("div.ace_search_form").click(function(e){
					$("div.ace_search_form").css("height", $("div.ace_search_form form").css("height") );
					
					$('html').one('click',function() {
						$("div.ace_search_form").css("height", "27px");
					});
					
					e.stopPropagation();
				});
			});
			</script>

<section class="pricing" style=" padding-top:80px;">
            <!-- <div class="container" data-aos="fade-up"> -->

                <div class="row gy-4">
				<div class="col-lg-1"></div>	
				<div class="col-lg-10" data-aos="zoom-in" data-aos-delay="400">
                        
                        <div class="pricing-item ">


<table class="books_list">
	<tbody><tr class="head">
<th>إسم البحث</th>
<th>صورة</th> 
<th>الباحث</th> 
<th>اسم المجلة</th> 
<th>السنة</th> 
<th>تحميل</th> </tr>

@foreach($studies as $study)
<tr class="">
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->origititle}} </a></td>
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);"><img height=100 width= 70 src='{{asset("storage/assets/img/{$study->imge}")}}'></a></td> 
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->title}} </a></td> 
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->publish_house}}</a></td>
<td><a href="?id=23&amp;sid=596" style="color: rgb(123, 123, 123);">{{ $study->year_publication}}</a></td>


<td><a href='{{asset("public/pdf/studies/$study->pdf")}}' title="7.605 MB" target="_blank" style="color: rgb(123, 123, 123);">{{ $study->pdf }}</a></td> </tr>


@endforeach
</tbody></table>
<div class="col-lg-1"></div>	

<script>
	$(document).ready(function(e) {
		$(".books_list tr td a").mouseover(function(){
			$(this).parent().parent().find("a").css({
				"color" : "#0ab5a2"
			});
		});
		$(".books_list tr td a").mouseout(function(){
			$(this).parent().parent().find("a").css({
				"color" : "#7b7b7b"
			});
		});
	});
	</script>

<div class="paging"><a href="?id=487&amp;p=1"><span>1</span></a> <a href="?id=487&amp;p=2">2</a> <a href="?id=487&amp;p=3">3</a> <a href="?id=487&amp;p=2">التالي</a> </div>
<div class="clear">&nbsp;</div>
</div>
</div>
</div>
</section>
@endsection









