@extends("layouts.admin")
@section("title","اضافة كتب ودراسات")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{asset("admin/version/".$version->id)}}'>
    @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
               
              

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> العنوان المترجم</label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value='{{ old("title",$version->title) }}' class="form-control m-input" placeholder=" ادخل العنوان  ">
                            <span class="m-form__help"> أدخل العنوان </span>
                        </div>
                    </div>
                </div>

                
                <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">نوع الإصدار </label>
                       <div class="col-lg-6">
                                <select class="form-control custom-select" name="version_type_id">
                                    @foreach($versionsType as $type)
                                        <option autofocus='true'  value="{{$type->id}}"
                                                {{$version->version_type_id== $type->id ? 'selected' : ''}}
                                        >{{$type->version_type}}</option>
                                    @endforeach
                                </select>
                       </div>
                    </div>
                    

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الموضوع</label>
                        <div class="col-lg-6">
                            <input type="text" name="subject" value='{{old("subject",$version->subject)}}' class="form-control m-input" placeholder=" ادخل الموضوع  ">
                            <span class="m-form__help"> أدخل الموضوع </span>
                        </div>
                    </div>
                </div>


<!-- 
                <div class="m-form__group form-group row">
                        <label class="col-lg-3" for="details">صورة </label>
                        <input class="col-lg-6" type='file' name="imge" id="imge" />
                    </div> -->

                    <div class="m-form__group form-group row">
                        <label class="col-lg-3" for="details">صورة </label>
                        <div class="col-lg-6">
                        <input class="col-lg-6" type='file' name="imge" id="imge" />
                        @if($version->imge)
                            <hr>
                            <img style='max-width:250px' src='{{asset("storage/assets/img/versions/{$version->imge}")}}' />
                            @endif
                    </div>
                </div>


                    <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">الشخصية  </label>
                       <div class="col-lg-6">
                                <select class="form-control custom-select" name="character_id">
                                    @foreach($charas as $char)
                                        <option autofocus='true'  value="{{$char->id}}"
                                                {{$version->character_id== $char->id ? 'selected' : ''}}
                                        >{{$char->fullName}}</option>
                                    @endforeach
                                </select>
                       </div>
                    </div>
                    
                  


                <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                         <label class="col-lg-3 col-form-label" for="date_from">التاريخ</label>
                            <div class="col-lg-6">
                            
                            <input type="date"  id="date_from" name="date_from" 
                            value="{{(date('Y-m-d',strtotime($version->date)) )}}" class="form-control m-input">
                            </div>
                        </div>
                    </div> 


                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> المراجع </label>
                        <div class="col-lg-6">
                            <input type="text" name="referances" value='{{old("referances",$version->referances)}}' class="form-control m-input" placeholder=" ادخل المراجع ">
                            <span class="m-form__help"> أدخل المراجع </span>
                        </div>
                    </div>
                </div>

                

                <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">القسم </label>
                       <div class="col-lg-6">
                                <select class="form-control custom-select" name="section_id">
                                    @foreach($sections as $sec)
                                        <option autofocus='true'  value="{{$sec->id}}"
                                                {{$version->section_id== $sec->id ? 'selected' : ''}}
                                        >{{$sec->section_name}}</option>
                                    @endforeach
                                </select>
                       </div>
                    </div>
                    
                  <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التخصص </label>
                             <div class="col-lg-6">
                                <select class="form-control custom-select" name="specialization_id">
                                @foreach($specialties as $spe)
                                        <option autofocus='true'  value="{{$spe->id}}"
                                                {{$version->specialization_id== $spe->id ? 'selected' : ''}}
                                        >{{$spe->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                     </div>
                 

        
                    
                    <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="version">PDF</label>
                            <input class="col-lg-6" type='file' name="pdf" id="pdf" />
                    </div>
                 
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                   <button type="submit" class="btn btn-primary">تعديل</button>
                            <a href="{{asset('admin/version')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection