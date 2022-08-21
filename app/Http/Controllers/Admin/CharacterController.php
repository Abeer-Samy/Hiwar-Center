<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\PersonalityType;
use App\Models\Center;
use App\Models\Country;
use Session;
use DB;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personals = PersonalityType::all();
        $centers = Center::all();
        $countries = Country::all();
        $query = Character::whereRaw('true');
        $characters = $query->latest()->paginate(5);
        
        return view("admin.characters.index",compact('personals','centers','countries','characters'));
    }

    public function trashed()
    {
        $personals = PersonalityType::all();
        $centers = Center::all();
        $countries = Country::all();
        $query = Character::onlyTrashed()->whereRaw('true');
        $characters = $query->latest()->paginate(5);
        
        return view("admin.characters.trash",compact('personals','centers','countries','characters'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personals = PersonalityType::all();
        $centers = Center::all();
        $countries = Country::all();
        $query = Character::whereRaw('true');
        $characters = $query->latest()->paginate(5);
        
        return view("admin.characters.create",compact('personals','centers','countries','characters'));
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
        if ($image = $request->file('profile_pic')) {
            $destinationPath = 'public\image\characters';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['profile_pic'] = "$profileImage";
        }
   
        Character::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("character.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $characters = Character::find($id);
        if(!$characters){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("character.index"));
        }
       
        return view("admin.characters.show",compact('characters'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $characters = Character::find($id);
        $personals = PersonalityType::all();
        $centers = Center::all();
        $countries = Country::all();
        if(!$characters){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("character.index"));
        }
        
        return view("admin.characters.edit",compact('personals','centers','countries','characters'));
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
        $characters = Character::find($id);        
        $requestData = $request->all();
    
    
        if ($image = $request->file('profile_pic')) {
            $destinationPath = 'public\image\characters';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['profile_pic'] = "$profileImage";
        }
    
    
        $characters->update($requestData);
    
        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("character.index")); 
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("characters")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("charactertrash"));
    }

    public function softDelete($id)
    {
        $characters = Character::find($id)->delete(); 
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("character.index"));
    }

    public function backFromSoftDelete($id)
    {
        
        $characters = Character::onlyTrashed()->where('id',$id)->first()->restore(); 
        return redirect(route("charactertrash"));
    }
}
