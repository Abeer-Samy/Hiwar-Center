@extends("layouts.admin")
@section("title","اضافة كتب ودراسات")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{asset("admin/study/".$study->id)}}'>
    @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">العنوان الأصلي</label>
                        <div class="col-lg-6">
                            <input type="text" name="origititle" value='{{old("origititle",$study->origititle)}}' class="form-control m-input" placeholder="أدخل العنوان الأصلي ">
                         
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> العنوان المترجم</label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value='{{ old("title",$study->title) }}' class="form-control m-input" placeholder=" ادخل العنوان المترجم ">
                            <span class="m-form__help"> أدخل العنوان المترجم</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> المحتوى مختصر</label>
                        <div class="col-lg-6">
                            <input type="text" name="content_brief" value='{{old("content_brief",$study->content_brief)}}' class="form-control m-input" placeholder=" ادخل المحتوى مختصر ">
                            <span class="m-form__help"> أدخل المحتوى مختصر</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__group form-group row">
                        <label class="col-lg-3" for="details">صورة </label>
                        <div class="col-lg-6">
                        <input class="col-lg-6" type='file' name="imge" id="imge" />
                        @if($study->imge)
                            <hr>
                            <img style='max-width:250px' src='{{asset("storage/assets/img/studies/{$study->imge}")}}' />
                            @endif
                    </div>
                </div>


                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> دار النشر</label>
                        <div class="col-lg-6">
                            <input type="text" name="publish_house" value='{{old("publish_house",$study->publish_house)}}' class="form-control m-input" placeholder=" ادخل دار النشر ">
                            <span class="m-form__help"> أدخل دار النشر </span>
                        </div>
                    </div>
                </div>


                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> سنة النشر</label>
                        <div class="col-lg-6">
                            <input type="text" name="year_publication" value='{{old("year_publication",$study->year_publication)}}' class="form-control m-input" placeholder=" ادخل سنة النشر ">
                            <span class="m-form__help"> أدخل سنة النشر </span>
                        </div>
                    </div>
                </div>

                

                <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">القسم </label>
                       <div class="col-lg-6">
                                <select class="form-control custom-select" name="section_id">
                                    @foreach($sections as $sec)
                                        <option autofocus='true'  value="{{$sec->id}}"
                                                {{$study->section_id== $sec->id ? 'selected' : ''}}
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
                                                {{$study->specialization_id== $spe->id ? 'selected' : ''}}
                                        >{{$spe->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                     </div>
                 

                    
                    <div class="form-group m-form__group row">
                    <label class="col-lg-3 col-form-label">نوع الدراسة </label>
                       <div class="col-lg-6">
                                <select class="form-control custom-select" name="study_type_id">
                                    @foreach($typeStudies as $type)
                                        <option autofocus='true'  value="{{$type->id}}"
                                                {{$study->study_type_id== $type->id ? 'selected' : ''}}
                                        >{{$type->study_type}}</option>
                                    @endforeach
                                </select>
                       </div>
                    </div>

                    
                    
                    <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">PDF</label>
                            <input class="col-lg-6" type='file' name="pdf" id="pdf" />
                    </div>
                 
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                   <button type="submit" class="btn btn-primary">تعديل</button>
                            <a href="{{asset('admin/study')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection