@extends("layouts.admin")
@section("title","عرض كتب ودراسات")

<a href="{{asset('admin/study/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة كتب ودراسات جديدة
        </span>
    </span>
</a>



@section("content")

<h2 class="text-center m-5 pt-5"> العنوان الأصلي : {{$study->origititle }}</h2>

<div class="container d-flex justify-content-center align-items-center flex-column">
    <div class="card mb-3" style="max-width: 640px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img class="card-img" src='{{asset("storage/assets/img/studies/{$study->imge}")}}'>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$study->origititle }}</h5>
                    <p class="card-text">
                        <ul> 
                                   <li> عنوان المترجم: {{ $study->title }} </li>   
                                    <li>  المحتوى مختصر:<br> {{ $study->content_brief }}</li>
                                    <li>دار النشر : {{ $study->publish_house }} </li>
                                    <li> سنة النشر: {{ $study->year_publication }} </li> 
                                    <li>القسم: {{ $study->specialties->name??'' }} </li>
                                    <li>التخصص: </li>
                                    <li>نوع الدراسة: </li>
                                    
                                  
                        </ul>
                    </p>
                    
                </div>
            </div>
        </div>
    
    </div>
    <div class="">
        <p class="card-text">
                <a href='{{ route("study.edit",$study->id) }}' class='btn btn-sm btn-info'>تعديل</a>
                <a class='btn btn-light' href='{{route("study.index")}}'>إالغاء</a>
                
                
        </p>
    </div>
    
</div>
@endsection
