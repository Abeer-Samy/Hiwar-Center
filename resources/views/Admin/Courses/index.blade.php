@extends("layouts.admin")
@section("title","إدارة الدورة")



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
<a href="{{route('course.create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة دورة
        </span>
    </span>
</a>
<a href="{{route('courseTrash')}}"
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
                @if($courses->count()>0)
                    <table
                        class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                        id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                               
                                <th>نوع الدورة</th>
                                <th >عنوان الدورة</th>
                                <th>وصف مختصر</th>
                                <th>ملف الاجتياز</th>
                                <th>شروط الالتحاق</th>
                                <th>صورة</th>
                                <th>فيديو</th>
                                <th>pdf</th>
                                <th width='13%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)

                            <tr role="row" class="odd">
                            

                                <td>@foreach($types as $type)
                                    @if($type->id == $course->course_type_id)
                                    {{$type->course_type}}
                                    @endif
                                @endforeach</td>
                                <td>{{ $course->address}}</td>
                                <td>{{ $course->description }}</td>
                                <td>{{ $course->pass_file }}</td>
                                <td>{{ $course->admission_req }}</td>
                                <td><img height=100 width= 70 src='{{asset("public/image/course/{$course->img}")}}' alt=""></td>
                                <td>{{ $course->vedio}}</td>

                                <td><a href='{{asset("public/pdf/course/$course->pdf")}}' target='_blank' >{{ $course->pdf }}</></td>

                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('course.show',$course->id)}}" title="عرض"><i
                                            class="la la-eye"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('course.edit',$course->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                     <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('course.softDelete',$course->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$course->name}} ؟')" title="حذف"><i
                                            class="la la-remove"></i> </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $courses->links() }}
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
