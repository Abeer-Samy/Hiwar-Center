@extends("layouts.admin")
@section("title","اضافة دورة")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("course.store")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">نوع الدورة </label>
                        <div class="col-lg-6">
                        <select class="form-control chosen-rtl select" name='course_type_id' id='course_type_id'>
                                <option selected>-اختر القسم- </option>
                                @foreach($courses as $course)

                                <option value="{{$course->id}}">{{$course->course_type}}
                                      </option>


                                @endforeach
                        </select>
                        </div>
                    </div>
                </div>



                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> عنوان الدورة</label>
                        <div class="col-lg-6">
                            <input type="text" name="address" value="{{old('address')}}" class="form-control m-input" placeholder=" ادخل عنوان الدورة ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> وصف مختصر</label>
                        <div class="col-lg-6">
                            <input type="text" name="description" value="{{old('description')}}" class="form-control m-input" placeholder=" ادخل وصف مختصر ">
                        </div>
                    </div>
                </div>



                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">صورة</label>
                            <input class="col-lg-6" type='file' name="img" id="img" />
                </div>
                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">فيديو</label>
                            <div class="col-lg-6">
                                <input type="text" name="vedio" value="{{old('vedio')}}" class="form-control m-input" placeholder="ادخل الرابط ">
                            </div>
                </div>



                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> ملف الاجتياز</label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='pass_file'  value="{{old('pass_file')}}" id='specialization_id'>
                                <option selected>-اختر- </option>
                                <option selected>انعقدت </option>
                                <option selected>ستنعقد </option>
                                <option selected>قيد الانعقاد</option>
                                
                        </select>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">شروط الالتحاق</label>
                        <div class="col-lg-6">
                            <input type="text" name="admission_req" value="{{old('admission_req')}}" class="form-control m-input" placeholder=" ادخل شروط الالتحاق ">
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
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/course')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
