@extends("layouts.admin")
@section("title","تعديل المحتوى")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{asset("admin/issuecontent/".$content->id)}}'>
    @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">تابع للعدد</label>
                        <div class="col-lg-6">
                                <select class="form-control custom-select" name="issue_id">
                                    @foreach($issues as $issue)
                                        <option autofocus='true'  value="{{$issue->id}}"
                                                {{$content->issue_id== $issue->id ? 'selected' : ''}}
                                        >{{$issue->issue_title}}</option>
                                    @endforeach
                                </select>
                       </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">عنوان المحتوى</label>
                        <div class="col-lg-6">
                            <input type="text" name="title" value='{{old("title",$content->title)}}' class="form-control m-input" placeholder="أدخل عنوان المحتوى ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الكاتب</label>
                        <div class="col-lg-6">
                            <input type="text" name="author" value='{{old("author",$content->author)}}' class="form-control m-input" placeholder=" ادخل الكاتب ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">  الموضوع</label>
                        <div class="col-lg-6">
                            <input type="text" name="subject" value='{{old("subject",$content->subject)}}' class="form-control m-input" placeholder=" ادخل  الموضوع ">
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
                   <button type="submit" class="btn btn-primary">تعديل</button>
                            <a href="{{asset('admin/issueconent')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection