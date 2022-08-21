@extends("layouts.admin")
@section("title","اضافة محتوى")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("issuecontent.store")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> تابع للعدد</label>
                        <div class="col-lg-6">
                        <select class="form-control chosen-rtl select" name='issue_id' id='issue_id'>
                                <option selected>-اختر العدد- </option>
                                @foreach($issues as $issue)
                                
                                <option value="{{$issue->id}}">{{$issue->issue_title}} 
                                      {{old('issue_id')==$issue->id?'selected':''}}</option>


                                @endforeach
                        </select>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">عنوان المحتوى</label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value="{{old('title')}}" class="form-control m-input" placeholder="أدخل عنوان المحتوى ">
                            <span class="m-form__help">أدخل عنوان المحتوى</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الكاتب</label>
                        <div class="col-lg-6">
                            <input type="text" name="author" value="{{old('author')}}" class="form-control m-input" placeholder=" ادخل الكاتب ">
                            <span class="m-form__help"> ادخل الكاتب</span>
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">  الموضوع</label>
                        <div class="col-lg-6">
                            <input type="text" name="subject" value="{{old('subject')}}" class="form-control m-input" placeholder=" ادخل  الموضوع ">
                            <span class="m-form__help"> أدخل  الموضوع</span>
                        </div>
                    </div>
                </div>


                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="majala">صورة</label>
                            <input class="col-lg-6" type='file' name="image" id="image" />
                </div>

                <div class="m-form__group form-group row">
                            <label class="col-lg-3 col-form-label" for="study">PDF</label>
                            <input class="col-lg-6" type='file' name="pfd" id="pfd" />
                </div>

                
                 
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/Issue')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection