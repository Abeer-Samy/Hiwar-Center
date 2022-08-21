<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseMaterial;
use App\Models\CourseType;
use App\Models\lectuers;
use Session;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = CourseMaterial::whereRaw('true');
        $courses = $query->paginate(5);
        $types = CourseType::all();
        return view("admin.Courses.index",compact('courses','types'));
    }

    public function trashed()
        {
            $query = CourseMaterial::onlyTrashed()->whereRaw('true');
            $courses = $query->latest()->paginate(5);
             $types = CourseType::all();
            return view("admin.Courses.trash",compact('courses','types'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = CourseType::all();
        return view("admin.Courses.create",compact('courses'));

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
        if ($image = $request->file('img')) {
            $destinationPath = 'public\image\course';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\course';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }

        CourseMaterial::create($input);

        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("course.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     //this method need to fix the error
    public function show($id)
        {
            $courses = CourseMaterial::whereRaw('true');
            $query = lectuers::whereRaw('true');
            $lectures = $query->paginate(5);
            $types = CourseType::all();
            return view("admin.lectuer.index",compact('lectures','courses'));

        }

         //this method need to fix the error
        //البحث
         public function search(Request $request)
         {
             $q = $request->q;
            //  $course = $request->course_type_id;

             $query = CourseMaterial::whereRaw('true');

           
             if($q){
                 $query->where("title" ,"like" ,"%$q%")

                 ->get();
             }
             $contents = $query->latest()->paginate(5)
                 ->appends([
                     'q'=>$q,
                     
                 ]);

                //  $issues = IssueOfMagazine::all();

             return view("admin.majala.search",compact('contents'));

         }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = CourseMaterial::find($id);
        $types = CourseType::all();
        if(!$courses){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("course.index"));
        }

        return view("admin.Courses.edit",compact('courses','types'));
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
        $courses = CourseMaterial::find($id);
        $requestData = $request->all();
        $request['images'] = "2";

    

        $requestData = $request->all();
        $fileName = $request->img->store("public/assets/img/course"); 
        $imageName = $request->img->hashName();
        $requestData['img'] = $imageName;
        $requestData['images'] = "1";


        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\course';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }

        $courses->update($requestData);

        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("course.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("courses_materials")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("courseTrash"));
    }

    public function softDelete($id)
        {
            $coursesDB = CourseMaterial::find($id)->delete();
            session()->flash("msg","w:تم حذف المنتج بنجاح");
            return redirect(route("course.index"));
        }

        public function backFromSoftDelete($id)
        {
            $coursesDB = CourseMaterial::onlyTrashed()->where('id',$id)->first()->restore();
            return redirect(route("courseTrash"));
        }
}
