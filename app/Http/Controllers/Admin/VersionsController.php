<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\version\CreateRequest;
use App\Http\Requests\version\EditRequest;
use App\Models\TypeOfVertion;
use App\Models\Character;
use App\Models\CenterSection;
use App\Models\Specialty;
use App\Models\Vertion;
use DB;
use Session;
use Carbon\Carbon;

class VersionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $q = $request->q;
        $versionType = $request->TypeOfVertion;
        $chara = $request->Character;
        $section = $request->CenterSection;
        $specialty = $request->Specialty;

        $query = Vertion::whereRaw('true');
      
        if($section){
            $query->where('section_id',$section);
        }

        if($specialty){
            $query->where('specialization_id',$specialty);
        }
        if($versionType){
            $query->where('version_type_id',$versionType);
        }
        if( $chara){
            $query->where('character_id', $chara);
        }
          
        if($q){
            $query->whereRaw('(origititle like ? or study_type_id like ?  )',["%$q%","%$q%"]);
        }

        $versions = $query->paginate(5)
            ->appends([
                'q'=>$q,
                'CenterSection'=>$section,
                'Specialty'=>$specialty,
                'TypeOfVertion'=>$versionType,
                'Character'=>$chara
            ]);

//dd($studies);
            $sections = CenterSection::all();
            $specialties = Specialty::all();
            $versionsType = TypeOfVertion::all();
            $charas = Character::all();

        return view("admin.version.index",compact('versions','sections','specialties','versionsType','charas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $versions = Vertion::all();
        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $versionsType = TypeOfVertion::all();
        $charas = Character::all();

        return view("admin.version.create",compact('versions','sections','specialties','versionsType','charas'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $input = $request->all();
        
        $fileName = $request->imge->store("public/assets/img/versions"); 
        $imageName = $request->imge->hashName();    
        $input['imge'] = $imageName;
        $input['images'] = "1";
        
    
          if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\verstions';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }
            Vertion::create($input);
            Session::flash("msg","s: تمت الإضافة بنجاح");
            return redirect(route("version.index"));       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $version = Vertion::find($id);
        if(!$version){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("version.index"));
        }
       // dd($study);
        return view("admin.version.show",compact('version'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $version = Vertion::find($id);
        if(!$version){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("version.index"));
        }
        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $versionsType = TypeOfVertion::all();
        $charas = Character::all();
        return view("admin.version.edit",compact('version','sections','specialties','versionsType','charas'));

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */}
    public function update(EditRequest $request, $id)
    {
        $versionDB = Vertion::find($id);        
        $requestData = $request->all();
        $request['images'] = "2";

    
        // if ($image = $request->file('imge')) {
        //     $destinationPath = 'public/assets/img/versions';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['imge'] = "$profileImage";
        // }
        if($request['imge']){            
            $requestData = $request->all();
            $fileName = $request->imge->store("public/assets/img/versions");
            $imageName = $request->imge->hashName();
            $requestData['imge'] = $imageName;            
            $versionDB->update($requestData);
        }
    
    
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\verstions';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }
    
     $versionDB->update($requestData);
       //dd(" $studyDB");
    
        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("version.index"));    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("versions")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("version.index"));    }
}
