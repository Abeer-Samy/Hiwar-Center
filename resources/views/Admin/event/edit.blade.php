@extends("layouts.admin")
@section("title","تعديل فعاليات")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{asset("admin/event/".$event->id)}}'>
    @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
            <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">عنوان الفعالية</label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value='{{old("title",$event->title)}}' class="form-control m-input" placeholder="أدخل عنوان الفعالية">
                      </div>
                    </div>
                </div>

                <!-- <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">تاريخ البداية</label>
                        <div class="col-lg-6">
                            <input type="text" name="date_from" value="{{old('date_from')}}" class="form-control m-input" placeholder="أدخل تاريخ بدء الفعالية">
                            <span class="m-form__help"> أدخل تاريح بدء الفعالية</span>
                        </div>
                    </div>
                </div> -->

                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                         <label class="col-lg-3 col-form-label" for="date_from">تاريخ البداية</label>
                            <div class="col-lg-6">
                            
                            <input type="date"  id="date_from" name="date_from" 
                            value="{{(date('Y-m-d',strtotime($event->date_from)) )}}" class="form-control m-input">
                            </div>
                        </div>
                    </div> 

                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                         <label class="col-lg-3 col-form-label" for="date_to">تاريخ النهاية</label>
                            <div class="col-lg-6">
                            <input type="date"  id="date_to" name="date_to" value="{{(date('Y-m-d',strtotime($event->date_to)) )}}" class="form-control m-input">
                            </div>
                        </div>
                    </div> 
                    
                <!-- <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> تاريخ النهاية</label>
                        <div class="col-lg-6">
                            <input type="text" name="date_to" value="{{old('date_to')}}" class="form-control m-input" placeholder="أدخل تاريخ انتهاء الفعالية">
                            <span class="m-form__help"> أدخل تاريخ انتهاء الفعالية</span>
                        </div>
                    </div>
                </div> -->


                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="event">صورة</label>
                            <input class="col-lg-6" type='file' name="photo" id="photo" />
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رابط الفيديو</label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                            class="la la-chain"></i></span></div>
                                <input type="text" class="form-control m-input" placeholder="vedio" name="vedio"
                                    value="{{ old('vedio',$event->vedio) }}" id="vedio">
                                
                            </div>
                        </div>
                    </div>

                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> موضوع الفعالية</label>
                        <div class="col-lg-6">
                            <input type="text" name="topic" value="{{old('topic',$event->topic)}}" class="form-control m-input" placeholder=" أدخل موضوع الفعالية ">
                            <span class="m-form__help"> أدخل موضوع الفعالية </span>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> عناوين مقترحة</label>
                        <div class="col-lg-6">
                            <input type="text" name="suggested_title" value="{{old('suggested_title',$event->suggested_title)}}" class="form-control m-input" placeholder=" أدخل عناوين مقترحة ">
                            <span class="m-form__help"> أدخل عناوين مقترحة</span>
                        </div>
                    </div>
                </div>

               
             


                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">القسم </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='section_id' id='section_id'>
                                @foreach($sections as $section)
                                <option autofocus='true' value="{{$section->id}}" 
                                {{$event->section_id== $section->id ? 'selected' : ''}}> 
                                 {{$section->section_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التخصص </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='specialization_id' id='specialization_id'>
                                @foreach($specialties as $specialty)
                                <option autofocus='true' value="{{$specialty->id}}" 
                                {{$event->specialization_id== $specialty->id ? 'selected' : ''}}>
                                {{$specialty->name}}</option>
                            
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">نوع الفعالية </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='event_type_id' id='event_type_id'>
                                @foreach($typeActivity as $typeAct)
                                <option autofocus='true' value="{{$typeAct->id}}" 
                                {{$event->event_type_id== $typeAct->id ? 'selected' : ''}}>
                                {{$typeAct->event_type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
             
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">حالة الفعالية </label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='event_statuses_id' id='event_statuses_id'>
                    
                                @foreach($eventStatus as $eventStat)
                                <option  autofocus='true' value='{{$eventStat->id}}' 
                                {{$event->event_statuses_id== $eventStat->id ? 'selected' : ''}}>
                                {{$eventStat->eventStatusType}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> نتائج وتوصيات</label>
                        <div class="col-lg-6">
                            <input type="text" name="result_and_recom" value="{{old('result_and_recom',$event->result_and_recom)}}" class="form-control m-input" placeholder=" أدخل نتائج وتوصيات">
                            <span class="m-form__help"> أدخل نتائج وتوصيات</span>
                        </div>
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
                   <button type="submit" class="btn btn-primary">تعديل</button>
                            <a href="{{asset('admin/event')}}" class="btn btn-secondary">إلغاء الأمر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection