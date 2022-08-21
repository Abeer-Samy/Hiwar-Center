<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\TypeActivity;
use App\Models\CenterSection;
use App\Models\Specialty;
use App\Models\EventStatuse;
use Session;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $section_id = $request->section_id;
        $specialty = $request->Specialty;
        $typeActivit = $request->TypeActivity;
        $statusTyp = $request->EventStatuse;


        $query = Event::whereRaw('true');
      
        if($section_id){
            $query->where('section_id',$section_id);
        }

        if($specialty){
            $query->where('specialization_id',$specialty);
        }
        if($typeActivit){
            $query->where('event_type_id',$typeActivit);
        }
        if($statusTyp){
            $query->where('event_statuses_id',$statusTyp);
        }
        if($q){
            $query->whereRaw('(title like ?  like ?)',["%$q%"]);

        }

        $events = $query->orderBy('id','desc')->paginate(5)
            ->appends([
                'q'=>$q,
                'section_id'=>$section_id,
                'Specialty'=>$specialty,
                'TypeActivity'=>$typeActivit,
                'EventStatuse'=>$statusTyp

            ]);

            $sections = CenterSection::all();
            $specialties = Specialty::all();
            $eventType = TypeActivity::all();
            $eventStatus= EventStatuse::all();

        return view("admin.event.index",compact('events','sections','specialties','eventType','eventStatus'));
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events=Event::all();
        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $typeActivity = TypeActivity::all();
        $eventStatus = EventStatuse::all();
        return view("admin.event.create",compact('events','sections','specialties','typeActivity','eventStatus',));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $fileName = $request->image->store("public/assets/img/events"); 
        $imageName = $request->image->hashName();
        $input['image'] = $imageName;
        $input['images'] = "1";
        
           
    // $input = $request->all();
    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'public/assets/img/events';
           
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         // dd( $profileImage);
    //         $image->move($destinationPath, $profileImage);
    //         $input['image'] = "$profileImage";
    //     }
   
    
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\events';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }
    
    
        
            Event::create($input);
          
            Session::flash("msg","s: تمت الإضافة بنجاح");
            return redirect(route("event.index"));    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        if(!$event){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("event.index"));
        }
        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $typeActivity = TypeActivity::all();
        $eventStatus = EventStatuse::all();
        return view("admin.event.edit",compact('event','sections','specialties','typeActivity','eventStatus',));
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
        $eventDB = event::find($id);        
        $requestData = $request->all();
    
        if($request['imge']){            
            $requestData = $request->all();
            $fileName = $request->imge->store("public/assets/img/events");
            $imageName = $request->imge->hashName();
            $requestData['imge'] = $imageName;            
            $eventDB->update($requestData);
        }
    
    
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\events';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }
    
     $eventDB->update($requestData);
       //dd(" $studyDB");
    
        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("event.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("events")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف العنصر بنجاح");
        return redirect(route("event.index"));
    }
}
