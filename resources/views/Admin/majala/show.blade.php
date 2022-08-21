@extends("layouts.admin")

@section("title-side")

<a href="{{route('issue.create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة عدد
        </span>
    </span>
</a>
<a href="{{route('issuetrash')}}"
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

       
    </div>

<div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
             <div class="col-sm-12">
                @if($issue->count()>0)
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
                                <th>عنوان العدد</th>
                                <th >الرقم التسلسلي</th>
                                <th>المشاركون</th>
                                <th>تاريخ الاصدار</th>
                                <th>تحرير</th>
                                <th>الصورة</th>
                                <th>pdf</th>
                                <th width='13%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($issue as $issues)

                            <tr role="row" class="odd">
                                <td width="5%" class=" dt-right" tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{ $issues->issue_title}}</td>
                                <td>{{ $issues->issue_serial_no}}</td>
                                <td>{{ $issues->particants }}</td>                                
                                <td>{{ $issues->issue_date }}</td>                                
                                <td>{{ $issues->edited }}</td>                                
                                <td><img height=100 width= 70 src='{{asset("public/image/issue/$issues->issue_img")}}' alt=""></td>

                                <!-- <td><img height=100 width= 70 src='{{asset("public/image/issue/$issues->issue_img")}}' alt=""></td> -->
                                <td><a href='{{asset("public/pdf/issue/$issues->pdf")}}' target='_blank' >{{ $issues->pdf }}</></td>

                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                         href="{{route('issuecontent.index',$issues->id)}}" title="عرض"><i
                                            class="la la-eye"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('issue.edit',$issues->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('issue.softDelete',$issues->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$issues->name}} ؟')" title="حذف"><i
                                            class="la la-remove"></i> </a> 
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $issue->links() }}
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