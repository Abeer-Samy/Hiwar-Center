<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\PersonalityType;
use App\Models\Specialty;
use App\Models\TypeOfVertion;
use App\Models\TypeStudies;
use App\Models\CourseType;
use App\Models\TypeActivity;
use Session;
use DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Country::whereRaw('true');
        $countris = $query->latest()->paginate(5);
        
        return view("admin.settings.index",compact('countris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = Country::whereRaw('true');
        $countris = $query->latest()->paginate(5);
        
        return view("admin.settings.country",compact('countris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Country::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("setting.create"));
    }


    public function creatPersonal()
    {
        $query = PersonalityType::whereRaw('true');
        $personals = $query->latest()->paginate(5);
        
        return view("admin.settings.personal",compact('personals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storPersonal(Request $request)
    {
        $input = $request->all();
        PersonalityType::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("personalcreate"));
    }


    public function SpecialtyCreate()
    {
        $query = Specialty::whereRaw('true');
        $specialties = $query->latest()->paginate(5);
        
        return view("admin.settings.specialties",compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storSpecialty(Request $request)
    {
        $input = $request->all();
        Specialty::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("SpecialtyCreate"));
    }


    public function VertionTypeCreate()
    {
        $query = TypeOfVertion::whereRaw('true');
        $vertions = $query->latest()->paginate(5);
        
        return view("admin.settings.VertionType",compact('vertions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storVertionType(Request $request)
    {
        $input = $request->all();
        TypeOfVertion::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("VertionTypeCreate"));
    }

    public function StudyTypeCreate()
    {
        $query = TypeStudies::whereRaw('true');
        $studies = $query->latest()->paginate(5);
        
        return view("admin.settings.StudyType",compact('studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storStudyType(Request $request)
    {
        $input = $request->all();
        TypeStudies::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("StudyTypeCreate"));
    }


    public function ActivTypeCreate()
    {
        $query = TypeActivity::whereRaw('true');
        $activities = $query->latest()->paginate(5);
        
        return view("admin.settings.ActivityType",compact('activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storActiveType(Request $request)
    {
        $input = $request->all();
        TypeActivity::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("ActiveTypeCreate"));
    }


    public function CourseTypeCreate()
    {
        $query = CourseType::whereRaw('true');
        $courses = $query->latest()->paginate(5);
        
        return view("admin.settings.CourseType",compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storCourseType(Request $request)
    {
        $input = $request->all();
        CourseType::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("CourseTypeCreate"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("countries")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("setting.create"));
    }

    public function personaldestroy($id)
    {
        DB::table("personality_types")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("personalityType"));
    }

    public function specialtydestroy($id)
    {
        DB::table("specialties")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("Specialty"));
    }

    public function VertionTypedestroy($id)
    {
        DB::table("type_of_versions")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("VertionType"));
    }

    public function StudyTypedestroy($id)
    {
        DB::table("type_studies")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("TypeStudies"));
    }

    public function ActiveTypedestroy($id)
    {
        DB::table("type_activities")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("TypeActivity"));
    }
    
    public function CourseTypedestroy($id)
    {
        DB::table("course_types")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("TypeCourse"));
    }
}