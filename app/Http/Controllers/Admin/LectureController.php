<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseType;
use App\Models\lectuers;
use App\Models\CourseMaterial;
use Session;
use DB;


//this class cant be test because this class show when method show in class CourseController fix
class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = lectuers::whereRaw('true');
        $lectures = $query->paginate(5);
        $courses = CourseMaterial::all();
        return view("admin.lectuer.index",compact('lectures','courses'));
    }

    public function trashed()
            {
                $query = lectuers::onlyTrashed()->whereRaw('true');
                $lecturess = $query->latest()->paginate(5);
                 $courses = CourseMaterial::all();
                return view("admin.lectuer.trash",compact('lecturess','courses'));
            }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $courses = CourseMaterial::all();
            return view("admin.lectuer.create",compact('courses'));

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
                $destinationPath = 'public\image\lecture';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['img'] = "$profileImage";
            }

            if ($pdf = $request->file('pdf')) {
                $destinationPath = 'public\pdf\lecture';
                $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
                $pdf->move($destinationPath, $profileImage);
                $input['pdf'] = "$profileImage";
            }

            lectuers::create($input);

            Session::flash("msg","s: تمت الإضافة بنجاح");
            return redirect(route("lecture.index"));
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
            


            //البحث
             public function search(Request $request)
             {
                $q = $request->q;
                $query = lectuers::whereRaw('true');
                 if($q){
                     $query->where("txt" ,"like" ,"%$q%")
                    
                     ->get();
                 }
                 $courses = $query->latest()->paginate(3)
                 ->appends([
                    'q'=>$q
                ]); 
                
                $lectures  = $query->latest()->paginate(5)
                    ->appends([
                        'q'=>$q
                    ]);      
                return view("admin.lectuer.index",compact('lectures','courses'));

             }
    

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $lecturess = lectuers::find($id);
            $courses = CourseMaterial::all();
            if(!$lecturess){
                session()->flash("msg","w: العنوان غير صحيح");
                return redirect(route("lecture.index"));
            }

            return view("admin.lectuer.edit",compact('lecturess','courses'));
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
            $lecturess = lectuers::find($id);
            $requestData = $request->all();
            $request['images'] = "2";

            if($request['img']){
                $requestData = $request->all();
                $fileName = $request->imge->store("public/image/course");
                $imageName = $request->imge->hashName();
                $requestData['img'] = $imageName;
                $studyDB->update($requestData);
            }


            if ($pdf = $request->file('pdf')) {
                $destinationPath = 'public\pdf\course';
                $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
                $pdf->move($destinationPath, $profileImage);
                $input['pdf'] = "$profileImage";
            }

            $lecturess->update($requestData);

            session()->flash("msg","s:تم التعديل بنجاح ");
            return redirect(route("lecture.index"));
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            DB::table("lectuers")->where("id",$id)->delete();
            session()->flash("msg","w:تم حذف المنتج بنجاح");
            return redirect(route("courseTrash"));
        }

        public function softDelete($id)
            {
                $lectureDB = lectuers::find($id)->delete();
                session()->flash("msg","w:تم حذف المنتج بنجاح");
                return redirect(route("lecture.index"));
            }

            public function backFromSoftDelete($id)
            {
                $lectureDB = lectuers::onlyTrashed()->where('id',$id)->first()->restore();
                return redirect(route("lectureTrash"));
            }

        
}

