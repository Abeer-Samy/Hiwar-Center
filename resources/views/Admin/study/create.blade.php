@extends("layouts.admin")
@section("title","اضافة مجلة")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("study.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">العنوان الأصلي</label>
                        <div class="col-lg-6">
                            <input type="text" name="origititle" value="{{old('origititle')}}" class="form-control m-input" placeholder="أدخل العنوان الأصلي ">
                            <span class="m-form__help">أدخل العنوان الأصلي</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> العنوان المترجم</label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value="{{old('title')}}" class="form-control m-input" placeholder=" ادخل العنوان المترجم ">
                            <span class="m-form__help"> أدخل العنوان المترجم</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> المحتوى مختصر</label>
                        <div class="col-lg-6">
                            <input type="text" name="content_brief" value="{{old('content_brief')}}" class="form-control m-input" placeholder=" ادخل المحتوى مختصر ">
                            <span class="m-form__help"> أدخل المحتوى مختصر</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">صورة</label>
                            <input class="col-lg-6" type='file' name="imge" id="imge" />
                    </div>


                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> دار النشر</label>
                        <div class="col-lg-6">
                            <input type="text" name="publish_house" value="{{old('publish_house')}}" class="form-control m-input" placeholder=" ادخل دار النشر ">
                            <span class="m-form__help"> أدخل دار النشر </span>
                        </div>
                    </div>
                </div>


                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> سنة النشر</label>
                        <div class="col-lg-6">
                            <input type="text" name="year_publication" value="{{old('year_publication')}}" class="form-control m-input" placeholder=" ادخل سنة النشر ">
                            <span class="m-form__help"> أدخل سنة النشر </span>
                        </div>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">القسم </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='section_id' id='section_id'>
                                <option selected>-اختر القسم- </option>
                                @foreach($sections as $section)
                                
                                <option value="{{$section->id}}">{{$section->section_name}} 
                                      {{old('section_id')==$section->id?'selected':''}}</option>


                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التخصص </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='specialization_id' id='specialization_id'>
                                <option selected>-اختر التخصص- </option>
                                @foreach($specialties as $specialty)
                                <option  value='{{$specialty->id}}'>{{$specialty->name}}
                                     {{old('specialization_id')==$specialty->id?'selected':''}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">نوع الدراسة </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='study_type_id' id='study_type_id'>
                                <option selected>-اختر نوع الدرسة- </option>
                                @foreach($typeStudies as $typeStudy)
                                <option  value='{{$typeStudy->id}}'>{{$typeStudy->study_type}}
                                     {{old('study_type_id')==$typeStudy->id?'selected':''}}</option>
                             
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
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/study')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection