<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Center;
use Session;
use DB;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Center::whereRaw('true');
        $centers = $query->latest()->paginate(5);
        $countries = Country::all();

        return view("admin.center.index",compact('centers','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centers = Center::whereRaw('true');
        $countries = Country::all();

        return view("admin.settings.center",compact('centers','countries'));
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
        if ($image = $request->file('image')) {
            $destinationPath = 'public\image\center';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
   
        Center::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("Center.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $countries = Country::all();
        $centers = Center::find($id);
        if(!$centers){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("Center.index"));
        }
       
        return view("admin.center.show",compact('centers','countries'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comm($id)
    {
        $countries = Country::all();
        $centers = Center::find($id);
        if(!$centers){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("Center.index"));
        }
       
        return view("admin.center.communication",compact('centers','countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centers = Center::find($id);
        $countries = Country::all();
        if(!$centers){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("Center.index"));
        }
        
        return view("admin.center.edit",compact('centers','countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editComm($id)
    {
        $centers = Center::find($id);
        $countries = Country::all();
        if(!$centers){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("Center.index"));
        }
        
        return view("admin.center.editcomm",compact('centers','countries'));
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
            $centers = Center::find($id);        
            $requestData = $request->all();

            $centers->update($requestData);

        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("Center.index"));
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
}
