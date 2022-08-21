<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseMaterial;
use App\Models\Diploma;
use App\Models\Specialty;
use Session;
use DB;

class DeplomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Diploma::whereRaw('true');
        $diplomas = $query->paginate(5);
        $specialties = Specialty::all();

        return view("admin.deplom.index",compact('diplomas','specialties'));
    }


    public function trashed()
    {
        $query = Diploma::onlyTrashed()->whereRaw('true');
        $diplomas = $query->latest()->paginate(5);
        $specialties = Specialty::all();
        
        return view("admin.deplom.trash",compact('diplomas','specialties'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diplomas = Diploma::all();
        $courses = CourseMaterial::all();
        $specialties = Specialty::all();
        return view("admin.deplom.create",compact('diplomas','courses','specialties'));
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
        Diploma::create($input)->course()->attach($request->course);


      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("deploma.index"));
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
        $diplomas = Diploma::find($id);
        $specialties = Specialty::all();
        $courses = CourseMaterial::all();

        if(!$diplomas){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("deploma.index"));
        }
        
        return view("admin.deplom.edit",compact('diplomas','specialties','courses'));
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
            $diplomas = Diploma::find($id);        
            $requestData = $request->all();

            $diplomas->update($requestData);
            //dd(" $studyDB");

            session()->flash("msg","s:تم التعديل بنجاح ");
            return redirect(route("deploma.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("diplomas")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("deplomtrash"));
    }

    public function softDelete($id)
    {
        $deplomaDB = Diploma::find($id)->delete(); 
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("deploma.index"));
    }

    public function backFromSoftDelete($id)
    {
        
        $deplomaDB = Diploma::onlyTrashed()->where('id',$id)->first()->restore(); 
        return redirect(route("deplomtrash"));
    }

    
}
