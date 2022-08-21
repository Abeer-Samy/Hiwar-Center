@extends("layouts.admin")
@section("title","إدارة الإصدارات")

@section("title-side")

<a href="{{asset('admin/version/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span>
            اضافة إصدارات جديدة
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
                <div class='col-sm-2'>
                    <input type='text' value="{{request()->q}}" name="q" class='form-control'
                        placeholder='أدخل كلمة البحث ' />
                </div>
                
                
               
                <div class='col-2'>
                    <select name='section' id='section' class='select2 form-control '>
                        <option value=''>القسم</option>
                        @foreach($sections as $section)
                        <option {{request()->section==$section->id?"selected":""}} value="{{$section->id}}">
                            {{$section->section_name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class='col-2'>
                    <select name='specialty' id='specialty' class='select2 form-control '>
                        <option value=''>التخصص</option>
                        @foreach($specialties as $specialty)
                        <option {{request()->specialty==$specialty->id?"selected":""}} value="{{$specialty->id}}">
                            {{$specialty->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class='col-2'>
                    <select name='studyType' id='studyType' class='select2 form-control '>
                        <option value=''>نوع الإصدار</option>
                        @foreach($versionsType as $typeversion)
                        <option {{request()->typeversion==$typeversion->id?"selected":""}} value="{{$typeversion->id}}">
                            {{$typeversion->version_type}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class='col-2'>
                    <select name='studyType' id='studyType' class='select2 form-control '>
                        <option value=''>الشخصية</option>
                        @foreach($charas as $character)
                        <option {{request()->character==$character->id?"selected":""}} value="{{$character->id}}">
                            {{$character->fullName}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class='col-sm-1 text-right'>
                    <button type="submit" class='btn btn-primary'><i class='fa fa-search'></i></button>
                    <input type="submit" class='btn btn-secondary' value='مسح البحث'
                        onclick="document.getElementById('q').value = ''; document.getElementById('category').value = ''; document.getElementById('active').value = ''; return true;" />
                </div>
                
            </div>
            </div>
        </form>

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                @if($versions->count()>0)
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
                                <th>العنوان</th>
                                <th>نوع الإصدار</th>
                                <th >الموضوع</th>
                                <th>صورة</th>
                                <th>الشخصية</th>
                                <th>التاريخ</th>
                                <th>المراجع </th>
                                <th>التخصص</th>
                                <th>القسم</th>
                                <th>pdf</th>
                                <th width='13%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($versions as $version)

                            <tr role="row" class="odd">
                                <td width="5%" class=" dt-right" tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                
                                <td>{{ $version->title}}</td>
                                <td> @foreach($versionsType as $type)
                                    @if($type->id == $version->version_type_id)
                                    {{$type->version_type}}
                                    @endif
                                @endforeach </td>
                                <td>{{ $version->subject}}</td>
                                <!-- <td><img height=100 width= 70 src='{{asset("public/image/versions/$version->imge")}}' alt=""></td> -->
                                <td><img height=100 width= 70 src='{{asset("storage/assets/img/versions/{$version->imge}")}}' alt=""></td>

                                <td> @foreach($charas as $char)
                                    @if($char->id == $version->character_id)
                                    {{$char->fullName}}
                                    @endif
                                @endforeach </td>

                                <td>{{ $version->date}}</td>
                                <td>{{ $version->referances}}</td>

                                <td> @foreach($sections as $sec)
                                    @if($sec->id == $version->section_id)
                                    {{$sec->section_name}}
                                    @endif
                                @endforeach </td>

                                <td> @foreach($specialties as $spe)
                                    @if($spe->id == $version->specialization_id)
                                    {{$spe->name}}
                                    @endif
                                @endforeach </td>

                            
                                <td><a href='{{asset("public/pdf/versions/$version->pdf")}}' target='_blank' >{{ $version->pdf }}</></td>

                                <td width="15%">

                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('version.edit',$version->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('version.delete',$version->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$version->name}} ؟')" title="حذف"><i
                                            class="la la-remove"></i> </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $versions->links() }}
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