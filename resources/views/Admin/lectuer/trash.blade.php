@extends("layouts.admin")
@section("title","سلة المحذوفات")

@section("title-side")
<a href="{{route('lecture.index')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <span>
            الرجوع الى الدرس
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
                @if($lecturess->count()>0)
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
                                <th>نوع الدورة</th>
                                <th>وصف مختصر</th>
                                <th>التاريخ</th>
                                <th>صورة</th>
                                 <th>فيديو</th>
                                <th>pdf</th>
                                <th width='13%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lecturess as $lecture)

                            <tr role="row" class="odd">
                                <td width="5%" class=" dt-right" tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td>@foreach($courses as $course)
                                    @if($course->id == $lecture->course_id)
                                         {{$course->address}}
                                    @endif
                                @endforeach</td>

                                </td>
                                <td>{{ $lecture->txt }}</td> <!-- description -->
                                <td>{{ $lecture->date }}</td>
                                 <td>{{ $lecture->vedio}}</td>
                                 <td><img height=100 width= 70 src='{{asset("public/image/lecture/{lecture->img}")}}' alt=""></td>

                                <td><a href='{{asset("public/pdf/lecture/lecture->pdf")}}' target='_blank' >{{ $lecture->pdf }}</></td>

                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('lectureBack',$lecture->id)}}" title="عرض">
                                        <i> استرجاع</i> </a>
                                        </br>
                                        <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('lecture.Delete',$lecture->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$lecture->name}} ؟')" title="حذف"><i class="la la-remove">حذف</i>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $lecturess->links() }}
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
