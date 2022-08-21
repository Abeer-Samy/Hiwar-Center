@extends("layouts.admin")
@section("title","اضافة مجلة")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("event.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> أدخل عنوان الفعالية</label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value="{{old('title')}}" class="form-control m-input" placeholder="أدخل عنوان الفعالية ">
                            <span class="m-form__help">أدخل عنوان الفعالية</span>
                        </div>
                    </div>
                </div>


                <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                         <label class="col-lg-3 col-form-label" for="date_from">تاريخ البداية</label>
                            <div class="col-lg-6">
                         
                            <input type="date"  id="date_from" name="date_from" value="{{old('date_from')}}" class="form-control m-input">
                            </div>
                        </div>
                    </div> 

                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                         <label class="col-lg-3 col-form-label" for="date_to">تاريخ النهاية</label>
                            <div class="col-lg-6">
                            <input type="date"  id="date_to" name="date_to" value="{{old('date_to')}}" class="form-control m-input">
                            </div>
                        </div>
                    </div> 


 <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="event">صورة</label>
                            <input class="col-lg-6" type='file' name="image" id="image" />
                    </div>


                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رابط الفيديو</label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                            class="la la-chain"></i></span></div>
                                <input type="text" class="form-control m-input" placeholder="vedio" name="vedio"
                                    value="{{ old('vedio') }}" id="vedio">
                            </div>
                        </div>
                    </div>


                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> موضوع الفعالية</label>
                        <div class="col-lg-6">
                            <input type="text" name="topic" value="{{old('topic')}}" class="form-control m-input" placeholder=" أدخل موضوع الفعالية ">
                            <span class="m-form__help"> أدخل موضوع الفعالية </span>
                        </div>
                    </div>
                </div>


                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> عناوين مقترحة</label>
                        <div class="col-lg-6">
                            <input type="text" name="suggested_title" value="{{old('suggested_title')}}" class="form-control m-input" placeholder=" أدخل عناوين مقترحة ">
                            <span class="m-form__help"> أدخل عناوين مقترحة</span>
                        </div>
                    </div>
                </div>



               


                

                <
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
                        <label class="col-lg-3 col-form-label">نوع الفعالية </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='event_type_id' id='event_type_id'>
                                <option selected>-اختر نوع الفعالية- </option>
                                @foreach($typeActivity as $typeAct)
                                <option  value='{{$typeAct->id}}'>{{$typeAct->event_type}}
                                     {{old('event_type_id')==$typeAct->id?'selected':''}}</option>
                             
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> نتائج وتوصيات</label>
                        <div class="col-lg-6">
                            <input type="text" name="result_and_recom" value="{{old('result_and_recom')}}" class="form-control m-input" placeholder=" أدخل نتائج وتوصيات">
                            <span class="m-form__help"> أدخل نتائج وتوصيات</span>
                        </div>
                    </div>
                </div>
             
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">حالة الفعالية </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='event_statuses_id' id='event_statuses_id'>
                                <option selected>-اختر حالة الفعالية- </option>
                                @foreach($eventStatus as $eventStat)
                                <option  value='{{$eventStat->id}}'>{{$eventStat->eventStatusType}}
                                     {{old('event_statuses_id')==$eventStat->id?'selected':''}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="event">PDF</label>
                            <input class="col-lg-6" type='file' name="pdf" id="pdf" />
                    </div>
                 
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/event')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection