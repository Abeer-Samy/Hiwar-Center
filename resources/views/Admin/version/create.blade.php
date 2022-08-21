@extends("layouts.admin")
@section("title","اضافة إصدارات جديدة ")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("version.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">العنوان </label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value="{{old('title')}}" class="form-control m-input" placeholder="أدخل العنوان  ">
                            <span class="m-form__help">أدخل العنوان </span>
                        </div>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">نوع الإصدار </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='version_type_id' id='version_type_id'>
                                <option selected>-اختر نوع الإصدار- </option>
                                @foreach($versionsType as $type)
                                <option value="{{$type->id}}">{{$type->version_type}} 
                                      {{old('type_id')==$type->id?'selected':''}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">  الموضوع</label>
                        <div class="col-lg-6">
                            <input type="text" name="subject" value="{{old('subject')}}" class="form-control m-input" placeholder=" ادخل الموضوع  ">
                            <span class="m-form__help"> أدخل الموضوع </span>
                        </div>
                    </div>
                </div>

                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">صورة</label>
                            <input class="col-lg-6" type='file' name="imge" id="imge" />
                    </div>


                <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الشخصية </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='character_id' id='character_id'>
                                <option selected>-اختر القسم- </option>
                                @foreach($charas as $char)
                                <option value="{{$char->id}}">{{$char->fullName}} 
                                      {{old('character_id')==$char->id?'selected':''}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">  التاريخ</label>
                        <div class="col-lg-6">
                            <input type="text" name="date" value="{{old('date')}}" class="form-control m-input" placeholder=" ادخل  التاريخ ">
                            <span class="m-form__help"> أدخل  التاريخ</span>
                        </div>
                    </div>
                </div>


               




                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> المراجع </label>
                        <div class="col-lg-6">
                            <input type="text" name="referances" value="{{old('referances')}}" class="form-control m-input" placeholder=" ادخل  المراجع ">
                            <span class="m-form__help"> أدخل  المراجع  </span>
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
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/version')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection