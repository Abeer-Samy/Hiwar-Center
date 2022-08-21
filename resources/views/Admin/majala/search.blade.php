@extends("layouts.admin")
@section("title","البحث في المجلة")



@section("title-side")

@endsection


@section("content")
<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__body">
    <form class='mb-3'>
            <div class="row">
            
                <div class='col-sm-1 text-right'>
                    <button type="submit" class='btn btn-primary'><i class='fa fa-search'></i></button>
                    <!-- <input type="submit" class='btn btn-secondary' value='مسح البحث'
                        onclick="document.getElementById('q').value = ''; document.getElementById('category').value = ''; document.getElementById('active').value = ''; return true;" /> -->
                </div>
                <div class='col-2'>
                    <select name='issue' id='issue' class='select2 form-control '>
                        <option value=''>رقم العدد</option>
                        @foreach($issues as $issue)
                        <option {{request()->issue==$issue->id?"selected":""}} value="{{$issue->id}}">
                            {{$issue->issue_title}}</option>
                        @endforeach
                    </select>

                </div>
                <div class='col-sm-6'>
                    <input type="text" name="q" value="{{request()->q}}" class="form-control m-input" 
                    placeholder=" ابحث بعنوان المحتوى او اسم الباحث ">
                </div>
                
                  
                
           
            </div>
        </form>

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
         <div class="col-sm-12">
                @if($contents->count()>0)
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
                                <th>عنوان المحتوى</th>
                                <th >الكاتب</th>
                                <th>الموضوع</th>
                                <th>العدد</th>
                                <th>الصورة</th>
                                <th>pdf</th>
                                <th width='13%'>خيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contents as $content)

                            <tr role="row" class="odd">
                                <td width="5%" class=" dt-right" tabindex="0">
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{ $content->title}}</td>
                                <td>{{ $content->author}}</td>
                                <td>{{ $content->subject }}</td>                                
                                <td>@foreach($issues as $issue)
                                    @if($issue->id == $content->issue_id)
                                    {{$issue->issue_title}}
                                    @endif
                                @endforeach</td>
                                                                
                                <td><img height=100 width= 70 src='{{asset("public/image/content/$content->image")}}' alt=""></td>

                                <!-- <td><img height=100 width= 70 src='{{asset("public/image/content/$content->image")}}' alt=""></td> -->
                                <td><a href='{{asset("public/pdf/content/$content->pfd")}}' target='_blank' >{{ $content->pfd }}</></td>

                                <td width="15%">
                                    <!-- <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('issuecontent.show',$content->id)}}" title="عرض"><i
                                            class="la la-eye"></i> </a> -->
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('issuecontent.edit',$content->id)}}" title="تعديل"><i
                                            class="la la-edit"></i> </a>
                                    <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only"
                                        href="{{route('issuecontent.delete',$content->id)}}"
                                        onclick="return confirm('هل انت متأكد من حذف {{$content->name}} ؟')" title="حذف"><i
                                            class="la la-remove"></i> </a> 
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contents->links() }}
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