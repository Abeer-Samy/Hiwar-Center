@extends("layouts.admin")
@section("title","معلومات المركز")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("Center.store")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم المركز</label>
                        <div class="col-lg-6">
                            <input type="text" name="center_name" value="{{old('center_name')}}" class="form-control m-input" placeholder="أدخل اسم المركز ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> وصف مختصر</label>
                        <div class="col-lg-6">
                            <input type="text" name="brief_discrption" value="{{old('brief_discrption')}}" class="form-control m-input" placeholder=" ادخل وصف مختصر ">
                        </div>
                    </div>
                </div>

                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">صورة</label>
                            <input class="col-lg-6" type='file' name="image" id="image" />
                </div>
                
                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الرؤية</label>
                        <div class="col-lg-6">
                            <input type="text" name="vision" value="{{old('vision')}}" class="form-control m-input" placeholder="ادخل الرؤية ">
                        </div>
                    </div>
                </div>


                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الرسالة</label>
                        <div class="col-lg-6">
                            <input type="text" name="mission" value="{{old('mission')}}" class="form-control m-input" placeholder=" الرسالة ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الاهداف</label>
                        <div class="col-lg-6">
                            <input type="text" name="objectives" value="{{old('objectives')}}" class="form-control m-input" placeholder=" الاهداف ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> مكان المركز</label>
                        <div class="col-lg-6">
                            <input type="text" name="center_location" value="{{old('center_location')}}" class="form-control m-input" placeholder=" مكان المركز ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الهاتف</label>
                        <div class="col-lg-6">
                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control m-input" placeholder=" الهاتف ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> بريد الكتروني</label>
                        <div class="col-lg-6">
                            <input type="text" name="email" value="{{old('email')}}" class="form-control m-input" placeholder=" بريد الكتروني ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> فاكس</label>
                        <div class="col-lg-6">
                            <input type="text" name="fax" value="{{old('fax')}}" class="form-control m-input" placeholder=" فاكس ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> facebook</label>
                        <div class="col-lg-6">
                            <input type="text" name="facebook" value="{{old('facebook')}}" class="form-control m-input" placeholder=" facebook ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> تويتر</label>
                        <div class="col-lg-6">
                            <input type="text" name="twitter" value="{{old('twitter')}}" class="form-control m-input" placeholder=" twitter ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> انستقرام</label>
                        <div class="col-lg-6">
                            <input type="text" name="instgrame" value="{{old('instgrame')}}" class="form-control m-input" placeholder=" instgrame ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> يوتيوب</label>
                        <div class="col-lg-6">
                            <input type="text" name="youtube" value="{{old('youtube')}}" class="form-control m-input" placeholder=" youtube ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الدولة</label>
                        <div class="col-lg-6">
                        <select class="form-control chosen-rtl select" name='country_id' id='country_id'>
                                <option selected>-اختر الدولة- </option>
                                @foreach($countries as $country)
                                
                                <option value="{{$country->id}}">{{$country->countryName}} 
                                      {{old('country_id')==$country->id?'selected':''}}</option>


                                @endforeach
                        </select>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> تاريخ انشاء المركز</label>
                        <div class="col-lg-6">
                            <input type="text" name="date_establish" value="{{old('date_establish')}}" class="form-control m-input" placeholder=" تاريخ انشاء المركز ">
                        </div>
                    </div>
                </div>
                
                 
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/majala')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection