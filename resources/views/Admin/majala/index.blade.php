@extends("layouts.admin")
@section("title","إدارة المجلة")



@section("title-side")

<a href="{{route('search')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="fa fa-search"></i>
        <span>
            بحث
        </span>
    </span>
</a>

<a href="{{route('majala.create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة مجلة
        </span>
    </span>
</a>

<a href="{{route('majalatrash')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <span>
            سلة المحذوفات
        </span>
    </span>
</a>
@endsection


@section("content")
<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
             <div class="col-sm-12">
                @if($magazines->count()>0)
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                                <th>
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-group-checkable">
                                        <span></span>
                                    </label>
                                </th>
                                <th>عنوان المجلة</th>
                                <th >وصف مختصر</th>
                                <th>الرقم المعياري</th>
                                <th>تحرير</th>
                                <th>الصورة</th>
                                <th width='13%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($magazines as $magazine)

                            <tr role="row" class="odd">
                                <td width="5%" class=" dt-right" tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{ $magazine->magazine_title}}</td>
                                <td>{{ $magazine->brief_discption}}</td>
                                <td>{{ $magazine->standard_id }}</td>                                
                                <td>{{ $magazine->release }}</td>                                
                                <td><img height=100 width= 70 src='{{asset("storage/assets/img/studies/{$magazine->img}")}}' alt=""></td>

                                <!-- <td><img height=100 width= 70 src='{{asset("public/image/studies/$magazine->img")}}' alt=""></td> -->
                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('majala.show',$magazine->id)}}" title="عرض"><i
                                            class="la la-eye"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('majala.edit',$magazine->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('majala.softDelete',$magazine->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$magazine->name}} ؟')" title="حذف"><i
                                            class="la la-remove"></i> </a> 
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $magazines->links() }}
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