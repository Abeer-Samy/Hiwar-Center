<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IssueOfMagazine;
use App\Models\magazine;
use App\Models\IssueContent;
use Session;
use DB;


class majalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = magazine::whereRaw('true');
        $magazines = $query->latest()->paginate(5);
        
        return view("admin.majala.index",compact('magazines'));


    } 

    public function trashed()
    {
        $query = magazine::onlyTrashed()->whereRaw('true');
        $magazines = $query->latest()->paginate(5);
        
        return view("admin.majala.trash",compact('magazines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.majala.create');

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
            $destinationPath = 'public\image\majala';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }
   
        magazine::create($input);
      
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("majala.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $magazines = magazine::find($id);
        $query = IssueOfMagazine::whereRaw('true');
        $issue = $query->latest()->paginate(5);
        
        return view("admin.majala.show",compact('magazines','issue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $magazines = magazine::find($id);
        if(!$magazines){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("majala.index"));
        }
        
        return view("admin.majala.edit",compact('magazines'));
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
            $magazines = magazine::find($id);        
            $requestData = $request->all();

            $magazines->update($requestData);
            //dd(" $studyDB");

        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("majala.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("magazines")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("majalatrash"));

    }

    public function softDelete($id)
    {
        $magazineDB = magazine::find($id)->delete(); 
        //DB::table("issue_of_magazines")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("majala.index"));
    }

    public function backFromSoftDelete($id)
    {
        
        $magazineDB = magazine::onlyTrashed()->where('id',$id)->first()->restore(); 
        //DB::table("issue_of_magazines")->where("id",$id)->delete();
        return redirect(route("majalatrash"));
    }

    //البحث
    public function search(Request $request)
    {
        // $q = $request->q;
        // $query = IssueContent::whereRaw('true');
        // if($q){
        //     $query->where("title" ,"like" ,"%$q%")
            
        //     ->get();
        // }
        // $contents = $query->latest()->paginate(5)
        //     ->appends([
        //         'q'=>$q,
        //     ]);    
        // return view("admin.issuecontent.index",compact('contents'));
        
    }

}
