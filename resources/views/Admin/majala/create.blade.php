@extends("layouts.admin")
@section("title","اضافة مجلة")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("majala.store")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">عنوان المجلة</label>
                        <div class="col-lg-6">
                            <input type="text" name="magazine_title" value="{{old('magazine_title')}}" class="form-control m-input" placeholder="أدخل عنوان المجلة ">
                            <span class="m-form__help">أدخل عنوان المجلة</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> وصف مختصر</label>
                        <div class="col-lg-6">
                            <input type="text" name="brief_discption" value="{{old('brief_discption')}}" class="form-control m-input" placeholder=" ادخل وصف مختصر ">
                            <span class="m-form__help"> أدخل وصف مختصر</span>
                        </div>
                    </div>
                </div>

                
                    <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الرقم المعياري</label>
                        <div class="col-lg-6">
                            <input type="text" name="standard_id" value="{{old('standard_id')}}" class="form-control m-input" placeholder="ادخل الرقم المعياري ">
                            <span class="m-form__help"> أدخل الرقم المعياري </span>
                        </div>
                    </div>
                </div>


                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> تحرير</label>
                        <div class="col-lg-6">
                            <input type="text" name="release" value="{{old('release')}}" class="form-control m-input" placeholder=" تحرير ">
                            <span class="m-form__help"> تحرير </span>
                        </div>
                    </div>
                </div>

                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">صورة</label>
                            <input class="col-lg-6" type='file' name="img" id="img" />
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