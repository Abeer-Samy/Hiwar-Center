@extends("layouts.admin")
@section("title","عرض كتب ودراسات")

<a href="{{route('character.index')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            الشخصيات
        </span>
    </span>
</a>



@section("content")

<h2 class="text-center m-5 pt-5">   {{ $characters->personalitytype->personality_type??'' }} : {{$characters->fullName }}</h2>

<div class="container d-flex justify-content-center align-items-center flex-column">
    <div class="card mb-3" style="max-width: 640px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img height=100 width= 70 src='{{asset("storage/assets/img/characters/$characters->profile_pic")}}' alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">
                        <ul> 
                                <li> نبذة تعريفية: {{ $characters->profile }} </li> 
                                <li> الهاتف: {{ $characters->phone }} </li>   
                                <li>  البريد الالكتروني:<br> {{ $characters->email }}</li>
                                <li>فاكس : {{ $characters->fax }} </li>
                                <li> فيس بوك: {{ $characters->facebook }} </li> 
                                <li> تويتر: {{ $characters->twitter }} </li> 
                                <li> انستقرام: {{ $characters->instgrame }} </li> 
                                <li> يوتيوب: {{ $characters->youtube }} </li> 
                                <li> التخصص: {{ $characters->speciality }} </li> 
                                <li>الدولة: {{ $characters->country->countryName??'' }} </li>
                                <li>المركز: {{ $characters->center->center_name??'' }} </li>
                                    
                                  
                        </ul>
                    </p>
                    
                </div>
            </div>
        </div>
    
    </div>
    <div class="">
        <p class="card-text">
                <a href='{{ route("character.edit",$characters->id) }}' class='btn btn-sm btn-info'>تعديل</a>
                <a class='btn btn-light' href='{{route("character.index")}}'>إالغاء</a>
                
                
        </p>
    </div>
    
</div>
@endsection
