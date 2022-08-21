@extends("layouts.admin")
@section("title","الشخصيات")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{asset("admin/character/".$characters->id)}}'>
        @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الاسم كامل </label>
                        <div class="col-lg-6">
                            <input type="text" name="fullName" value='{{old("fullName",$characters->fullName)}}' class="form-control m-input" placeholder="أدخل الاسم رباعي ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الهاتف</label>
                        <div class="col-lg-6">
                            <input type="text" name="phone" value='{{old("phone",$characters->phone)}}' class="form-control m-input" placeholder=" الهاتف ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> بريد الكتروني</label>
                        <div class="col-lg-6">
                            <input type="text" name="email" value='{{old("email",$characters->email)}}' class="form-control m-input" placeholder=" بريد الكتروني ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> فاكس</label>
                        <div class="col-lg-6">
                            <input type="text" name="fax" value='{{old("fax",$characters->fax)}}' class="form-control m-input" placeholder=" فاكس ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> facebook</label>
                        <div class="col-lg-6">
                            <input type="text" name="facebook" value='{{old("facebook",$characters->facebook)}}' class="form-control m-input" placeholder=" facebook ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> تويتر</label>
                        <div class="col-lg-6">
                            <input type="text" name="twitter" value='{{old("twitter",$characters->twitter)}}' class="form-control m-input" placeholder=" twitter ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> انستقرام</label>
                        <div class="col-lg-6">
                            <input type="text" name="instgrame" value='{{old("instgrame",$characters->instgrame)}}' class="form-control m-input" placeholder=" instgrame ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> يوتيوب</label>
                        <div class="col-lg-6">
                            <input type="text" name="youtube" value='{{old("youtube",$characters->youtube)}}' class="form-control m-input" placeholder=" youtube ">
                        </div>
                    </div>
                </div>

                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">الصورة الشخصية</label>
                            <input class="col-lg-6" type='file' name="profile_pic" id="profile_pic" value='{{old("profile_pic",$characters->profile_pic)}}' />
                </div>
                
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> التخصص</label>
                        <div class="col-lg-6">
                            <input type="text" name="speciality" value='{{old("speciality",$characters->speciality)}}' class="form-control m-input" placeholder=" التخصص ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> نبذة تعريفية</label>
                        <div class="col-lg-6">
                            <input type="text" name="profile" value='{{old("profile",$characters->profile)}}' class="form-control m-input" placeholder=" نبذه ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> نوع الشخصية</label>
                        <div class="col-lg-6">
                            <select class="form-control chosen-rtl select" name='personality_type_id' id='personality_type_id'>
                                <option selected>-اختر نوع الشخصية- </option>
                                @foreach($personals as $personal)
                                
                                <option value="{{$personal->id}}">{{$personal->personality_type}} 
                                      {{old('personality_type_id')==$personal->id?'selected':''}}</option>


                                @endforeach
                        </select>
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
                        <label class="col-lg-3 col-form-label"> المركز</label>
                        <div class="col-lg-6">
                        <select class="form-control chosen-rtl select" name='center_id' id='center_id'>
                                <option selected>-اختر المركز- </option>
                                @foreach($centers as $center)
                                
                                <option value="{{$center->id}}">{{$center->center_name}} 
                                      {{old('center_id')==$center->id?'selected':''}}</option>


                                @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                
                 
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">تعديل</button>
                            <a href="{{asset('admin/majala')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection