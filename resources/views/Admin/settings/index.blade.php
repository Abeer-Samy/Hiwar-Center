@extends("layouts.admin")
@section("title","الاعدادات")


<div>

@section("title-side")
</div>

<div>
    <br><br>
<a href="{{route('setting.create')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    الدول
                </span>
            </span>
        </a>
        <br><br>

        <a href="{{route('personalityType')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    انواع الشخصيات
                </span>
            </span>
        </a>
        <br><br>

        <a href="{{route('Center.create')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    اضافة بيانات المركز
                </span>
            </span>
        </a>
        <br><br>

        <a href="{{route('Specialty')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    اضافة تخصصات
                </span>
            </span>
        </a>
        <br><br>


        <a href="{{route('VertionType')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    انواع الاصدارات
                </span>
            </span>
        </a>
        <br><br>

        <a href="{{route('TypeStudies')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    نوع الدراسة
                </span>
            </span>
        </a>
        <br><br>

        <a href="{{route('TypeActivity')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    نوع الفعالية
                </span>
            </span>
        </a>
        <br><br>

        <a href="{{route('TypeCourse')}}"
            class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
            <span>
                <i class="la la-plus"></i>
                <span style="width: 150px;">
                    نوع الدورة
                </span>
            </span>
        </a>
</div>

@endsection


@section("content")

@endsection