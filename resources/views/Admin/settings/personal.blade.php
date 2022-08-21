@extends("layouts.admin")
@section("title","الاعدادات")



@section("title-side")
<a href="{{route('setting.index')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            الاعدادات
        </span>
    </span>
</a>
@endsection


@section("content")

<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method="post" action='{{route("personalcreate")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">نوع الشخصية</label>
                        <div class="col-lg-6">
                            <input type="text" name="personality_type" value="{{old('personality_type')}}" class="form-control m-input" placeholder="نوع الشخصية">
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
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </form>

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
         <div class="col-sm-12">
                @if($personals->count()>0)
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                                
                                <th>نوع الشخصية</th>
                                <th width='13%'>الاجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($personals as $personal)

                            <tr role="row" class="odd">
                                
                                <td>{{ $personal->personality_type}}</td>
                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('personal.delete',$personal->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$personal->personality_type}} ؟')" title="حذف"><i
                                            class="la la-remove"></i> </a> 
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $personals->links() }}
                    @else
                    <div class='alert alert-info'><b>نأسف</b> !لا توجد نتائج
                        <button type="button" class="close pt-0" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection