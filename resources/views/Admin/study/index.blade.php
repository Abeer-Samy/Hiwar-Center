@extends("layouts.admin")
@section("title","إدارة الكتب والدراسات")



@section("title-side")

<a href="{{asset('admin/study/create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            ااضافة كتب و دراسات جديدة
        </span>
    </span>
</a>
@endsection


@section("content")
<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">
        <form class='mb-3'>
            <div class="row">
                <div class='row mb-3'>
                    <div class='col-sm-4'>
                        <input type='text' value="{{request()->q}}" name="q" class='form-control' placeholder='أدخل كلمة البحث هنا' />
                    </div>



                    <div class='col-2'>
                        <select name='section' id='section' class='select2 form-control '>
                            <option value=''>القسم</option>
                            @foreach($sections as $section)
                            <option {{request()->section==$section->id?"selected":""}} value="{{$section->id}}">
                                {{$section->section_name}}
                            </option>
                            @endforeach
                        </select>

                    </div>

                    <div class='col-2'>
                        <select name='specialty' id='specialty' class='select2 form-control '>
                            <option value=''>التخصص</option>
                            @foreach($specialties as $specialty)
                            <option {{request()->specialty==$specialty->id?"selected":""}} value="{{$specialty->id}}">
                                {{$specialty->name}}
                            </option>
                            @endforeach
                        </select>

                    </div>

                    <div class='col-2'>
                        <select name='studyType' id='studyType' class='select2 form-control '>
                            <option value=''>نوع الدراسة</option>
                            @foreach($typeStudies as $typeStudy)
                            <option {{request()->typeStudy==$typeStudy->id?"selected":""}} value="{{$typeStudy->id}}">
                                {{$typeStudy->study_type}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class='col-sm-1 text-right'>
                        <button type="submit" class='btn btn-primary'><i class='fa fa-search'></i></button>
                        <!-- <input type="submit" class='btn btn-secondary' value='مسح البحث'
                        onclick="document.getElementById('q').value = ''; document.getElementById('category').value = ''; document.getElementById('active').value = ''; return true;" /> -->
                    </div>

                </div>
            </div>
        </form>

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    @if($studies->count()>0)
                    <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1150px;">
                        <thead>
                            <tr role="row">
                                <th>
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-group-checkable">
                                        <span></span>
                                    </label>
                                </th>
                                <th>العنوان الأصلي</th>
                                <th>العنوان المترجم</th>
                                <th>المحتوى مختصر</th>
                                <th>صورة</th>
                                <th>دار النشر</th>
                                <th>سنة النشر</th>
                                <th>القسم</th>
                                <th>التخصص</th>
                                <th>نوع الدراسة</th>
                                <th>pdf</th>
                                <th width='13%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($studies as $study)

                            <tr role="row" class="odd">
                                <td width="5%" class=" dt-right" tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{ $study->origititle}}</td>
                                <td>{{ $study->title}}</td>
                                <td>{{ $study->content_brief }}</td>
                                <td><img height=50 width=50 src='{{asset("storage/assets/img/studies/{$study->imge}")}}' alt=""></td>

                                <td>{{ $study->publish_house}}</td>
                                <td>{{ $study->year_publication}}</td>

                                <td> @foreach($sections as $sec)
                                    @if($sec->id == $study->section_id)
                                    {{$sec->section_name}}
                                    @endif
                                    @endforeach
                                </td>

                                <td> @foreach($specialties as $spe)
                                    @if($spe->id == $study->specialization_id)
                                    {{$spe->name}}
                                    @endif
                                    @endforeach
                                </td>

                                <td> @foreach($typeStudies as $type)
                                    @if($type->id == $study->study_type_id)
                                    {{$type->study_type}}
                                    @endif
                                    @endforeach
                                </td>
                                <td><a href='{{asset("public/pdf/studies/$study->pdf")}}' target='_blank'>{{ $study->pdf }}</>
                                </td>

                                <td width="15%">
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only" href="{{route('study.show',$study->id)}}" title="عرض"><i class="la la-eye"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only" href="{{route('study.edit',$study->id)}}" title="تعديل"><i class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only" href="{{route('study.delete',$study->id)}}" onclick="return confirm('هل انت متأكد من حذف {{$study->name}} ؟')" title="حذف"><i class="la la-remove"></i> </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $studies->links() }}
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