<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseMaterial;
use App\Models\Diploma;
use App\Models\Specialty;
use App\Models\CourseType;
use App\Models\lectuers;
use Session;
use DB;

class DeplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Diploma::whereRaw('true');
        $diplomas = $query->paginate(3);
        $specialties = Specialty::all();

        return view("frontsite.Courses.TrainingDiplomas",compact('diplomas','specialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = CourseMaterial::whereRaw('true');
        $courses = $query->paginate(3);
        $lectures = $query->paginate(5);

        $types = CourseType::all();
        return view("frontsite.Courses.Trainingcourses",compact('courses','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $query = lectuers::whereRaw('true');
        $lectures = $query->paginate(5);
        $courses = CourseMaterial::all();
        return view("frontsite.Courses.lecture",compact('lectures','courses'));
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
        //
    }
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
        return view("frontsite.Courses.lecture",compact('lectures','courses'));
        
    }
}
