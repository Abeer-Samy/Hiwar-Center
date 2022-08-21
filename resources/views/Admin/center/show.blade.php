@extends("layouts.admin")
@section("title","عن المركز")

@section("content")
<h2 class="text m-2 pt-3">   مركز  {{$centers->center_name }}</h2>

<div class="container d-flex justify-content-center align-items-center flex-column">
    <!-- <div class="card mb-3" > -->
        <!-- <div class="row no-gutters"> -->
            <div class="col-md-2">
                <img src='{{asset("storage/assets/img/center/{$centers->image}")}}' class="img-fluid" alt="">
            </div>
            <div class="col-md-10">
                <div class="card-body">
                    <h5 class="card-title">
                    <p class="card-text">
                        <ul>
                                <li> اسم المركز: {{ $centers->center_name }} </li><br>
                                <li> وصف مختصر: {{ $centers->brief_discrption }} </li><br>   
                                <li> رؤية المركز: {{ $centers->vision }}</li><br>
                                <li>الرسالة : {{ $centers->mission }} </li><br>
                                <li> الاهداف: {{ $centers->objectives }} </li><br> 
                                <li> مكان المركز: {{ $centers->center_location }} </li> <br>
                                <li>الدولة: {{ $centers->country->countryName??'' }} </li><br>
                                <li> تاريخ انشاء المركز: {{ $centers->date_establish }} </li> <br>
                                
                        </ul>
                    </p>

                    </h5>
                    
                    
            <!-- </div> -->
        <!-- </div> -->
    
    </div>
    <div class="">
        <p class="card-text">
                <a href='{{ route("Center.edit",$centers->id) }}' class='btn btn-sm btn-info'>تعديل</a>
                <a class='btn btn-light' href='{{route("Center.index")}}'>إالغاء</a>
                
                
        </p>
    </div>
    
</div>
                        
    </div>
</div>
@endsection