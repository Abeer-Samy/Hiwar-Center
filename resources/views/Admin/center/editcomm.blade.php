@extends("layouts.admin")
@section("title","معلومات المركز")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{asset("admin/Center/".$centers->id)}}'>
        @csrf
        @method("put")
        <div class='m-form'>
            <div class="m-portlet__body">
                

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> الهاتف</label>
                        <div class="col-lg-6">
                            <input type="text" name="phone" value='{{old("phone",$centers->phone)}}' class="form-control m-input" placeholder=" الهاتف ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> بريد الكتروني</label>
                        <div class="col-lg-6">
                            <input type="text" name="email" value='{{old("email",$centers->email)}}' class="form-control m-input" placeholder=" بريد الكتروني ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> فاكس</label>
                        <div class="col-lg-6">
                            <input type="text" name="fax" value='{{old("fax",$centers->fax)}}' class="form-control m-input" placeholder=" فاكس ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> facebook</label>
                        <div class="col-lg-6">
                            <input type="text" name="facebook" value='{{old("facebook",$centers->facebook)}}' class="form-control m-input" placeholder=" facebook ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> تويتر</label>
                        <div class="col-lg-6">
                            <input type="text" name="twitter" value='{{old("twitter",$centers->twitter)}}' class="form-control m-input" placeholder=" twitter ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> انستقرام</label>
                        <div class="col-lg-6">
                            <input type="text" name="instgrame" value='{{old("instgrame",$centers->instgrame)}}' class="form-control m-input" placeholder=" instgrame ">
                        </div>
                    </div>
                </div>

                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label"> يوتيوب</label>
                        <div class="col-lg-6">
                            <input type="text" name="youtube" value='{{old("youtube",$centers->youtube)}}' class="form-control m-input" placeholder=" youtube ">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection