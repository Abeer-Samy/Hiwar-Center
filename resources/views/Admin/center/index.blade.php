@extends("layouts.admin")
@section("title","")


@section("content")
<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">
        

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
             <div class="col-sm-12">
                @if($centers->count()>0)
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                           
                                <th width='50%'>اسم المركز</th>
                                <th width='50%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($centers as $center)

                           
                                <td>{{ $center->center_name }}</td> 
                  
                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('Center.show',$center->id)}}" title="عرض"><i
                                            class="la la-eye"> من نحن</i>
                                    </a>
                                        </br>
                                 

                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="" title="عرض"><i
                                            class="la la-eye">مجلس الادارة</i>
                                    </a>
                                    </br>

                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="" title="عرض"><i
                                            class="la la-eye">المجلس الاستشاري</i>
                                    </a>
                                    </br>

                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="" title="عرض"><i
                                            class="la la-eye">أقسام ووحدات المركز</i>
                                    </a>
                                    </br>

                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('communication',$center->id)}}" title="عرض"><i
                                            class="la la-eye">معلومات الاتصال</i>
                                    </a>
                                    </br>
                                    
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $centers->links() }}
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