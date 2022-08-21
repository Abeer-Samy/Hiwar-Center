@extends("layouts.admin")
@section("title","تعديل الدورة")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{asset("admin/lecture/".$lecturess->id)}}'>
    @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">نوع الدورة</label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='course_id' id='course_id'>
                                @foreach($courses as $course)

                                <option autofocus='true' value="{{$course->id}}"
                                        {{$lecturess->course_id== $course->id ? 'selected' : ''}}
                                >
                                    {{$course->address}}
                                      </option>


                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> وصف مختصر</label>
                        <div class="col-lg-6">
                            <input type="text" name="txt" value='{{old("txt",$lecturess->txt)}}' class="form-control m-input" placeholder=" ادخل وصف مختصر ">
                        </div>
                    </div> 
                </div>



                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="lecture">صورة</label>
                            <input class="col-lg-6" type='file' name="img" id="img" />
                </div>

                <div class="m-form__group form-group row">
                    <label class="col-lg-3 col-form-label" for="lecture">فيديو</label>
                    <div class="col-lg-6">
                        <input type="text" name="vedio" value='{{old("vedio",$lecturess->vedio)}}' class="form-control m-input" placeholder="ادخل الرابط ">
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                     <label class="col-lg-3 col-form-label" for="date">التاريخ</label>
                        <div class="col-lg-6">
                        <input type="date"  id="date" name="date" value="{{(date('Y-m-d',strtotime($lecturess->date)) )}}" class="form-control m-input">
                        </div>
                    </div>
                </div>

                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">pdf</label>
                            <input class="col-lg-6" type='file' name="pdf" id="pdf" />
                </div>



            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                   <button type="submit" class="btn btn-primary">تعديل</button>
                            <a href="{{asset('admin/lecture')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
