<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\study\CreateRequest;
use App\Http\Requests\study\EditRequest;
use App\Models\Study;
use App\Models\CenterSection;
use App\Models\Specialty;
use App\Models\TypeStudies;
use Validator;
use DB;
use Session;
use Carbon\Carbon;
class BooksAndStadies extends Controller
{


    function index(Request $request){

        $q = $request->q;
        $section_id = $request->section_id;
        $specialty = $request->Specialty;
        $typeStudy = $request->TypeStudies;


        $query = Study::whereRaw('true');
      
        if($section_id){
            $query->where('section_id',$section_id);
        }

        if($specialty){
            $query->where('specialization_id',$specialty);
        }
        if($typeStudy){
            $query->where('study_type_id',$typeStudy);
        }
          
        if($q){
            $query->whereRaw('(origititle like ? or section_id like ?)',["%$q%","%$q%"]);

        }

        $studies = $query->orderBy('id','desc')->paginate(5)
            ->appends([
                'q'=>$q,
                'section_id'=>$section_id,
                'Specialty'=>$specialty,
                'TypeStudies'=>$typeStudy
            ]);

            $sections = CenterSection::all();
            $specialties = Specialty::all();
            $typeStudies = TypeStudies::all();
        return view("admin.study.index",compact('studies','sections','specialties','typeStudies'));
    }


//--------------------------------------------------------------------------------------
    function create(){
        $studies = Study::all();
        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $typeStudies = TypeStudies::all();

        return view("admin.study.create",compact('studies','sections','specialties','typeStudies'));


        

    }
//--------------------------------------------------------------------------------------------
    public function store(CreateRequest $request)  {
    
    $input = $request->all();
    $fileName = $request->imge->store("public/assets/img/studies"); 
    $imageName = $request->imge->hashName();
    $input['imge'] = $imageName;
    $input['images'] = "1";
 
    if ($pdf = $request->file('pdf')) {
        $destinationPath = 'public\pdf\studies';
        $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
        $pdf->move($destinationPath, $profileImage);
        $input['pdf'] = "$profileImage";
    }


    
        Study::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("study.index"));    
    }

//-----------------------------------------------------------------------------------------------------------------
    public function destroy($id)
    {
        $itemDB=Study::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("study.index"));

    }

    public function restore($id){
        $result = Study::withTrashed()->where('id',$id)->restore();
        return redirect()->back(); 
    }


//--------------------------------------------------------------------------------------------------------------------
 public function edit($id)
    {
        $study = Study::find($id);
        if(!$study){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("study.index"));
        }
        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $typeStudies = TypeStudies::all();
        return view("admin.study.edit",compact('study','sections','specialties','typeStudies'));
        
    }

    
//-----------------------------------------------------------------------------------------------------------------
    public function update(EditRequest $request, $id)
    {
    $studyDB = study::find($id);        
    $requestData = $request->all();
    $request['images'] = "2";

    if($request['imge']){            
        $requestData = $request->all();
        $fileName = $request->imge->store("public/assets/img/studies");
        $imageName = $request->imge->hashName();
        $requestData['imge'] = $imageName;            
        $studyDB->update($requestData);
    }


    if ($pdf = $request->file('pdf')) {
        $destinationPath = 'public\pdf\studies';
        $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
        $pdf->move($destinationPath, $profileImage);
        $input['pdf'] = "$profileImage";
    }

 $studyDB->update($requestData);

    session()->flash("msg","s:تم التعديل بنجاح ");
    return redirect(route("study.index"));
    }

//----------------------------------------------------------------------------------------
    public function show($id)
    {
        $study = Study::find($id);
        if(!$study){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("study.index"));
        }

        return view("admin.study.show",compact('study'));
    }



    }

