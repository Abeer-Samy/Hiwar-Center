<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IssueOfMagazine;
use App\Models\IssueContent;
use App\Models\magazine;
use Session;
use DB;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = IssueOfMagazine::whereRaw('true');
        $issue = $query->latest()->paginate(5);
        
        return view("admin.Issue.index",compact('issue'));
    }

    public function trashed()
    {
        $query = IssueOfMagazine::onlyTrashed()->whereRaw('true');
        $issue = $query->latest()->paginate(5);
        
        return view("admin.Issue.trash",compact('issue'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Issue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $input = $request->all();
        if ($image = $request->file('issue_img')) {
            $destinationPath = 'public\image\issue';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['issue_img'] = "$profileImage";
        }
    
          if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\issue';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }
            IssueOfMagazine::create($input);
            Session::flash("msg","s: تمت الإضافة بنجاح");
            return redirect(route("issue.index"));
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $issue = IssueOfMagazine::find($id);
        $query = IssueContent::whereRaw('true');
        $issuecontent = $query->paginate(5);
        
        return view("admin.Issue.show",compact('issue','issuecontent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $issue = IssueOfMagazine::find($id);
        if(!$issue){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("issue.index"));
        }
        
        return view("admin.issue.edit",compact('issue'));
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
        $issueDB = IssueOfMagazine::find($id);        
        $requestData = $request->all();
    
    
        if ($image = $request->file('issue_img')) {
            $destinationPath = 'public\image\issue';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['issue_img'] = "$profileImage";
        }
    
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'public\pdf\issue';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
        }
    
        $issueDB->update($requestData);
       //dd(" $studyDB");
    
        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("issue.index")); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("issue_of_magazines")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("issuetrash"));
    }

    public function softDelete($id)
    {
        $issueDB = IssueOfMagazine::find($id)->delete(); 
        //DB::table("issue_of_magazines")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("issue.index"));
    }

    public function backFromSoftDelete($id)
    {
        
        $issueDB = IssueOfMagazine::onlyTrashed()->where('id',$id)->first()->restore(); 
        //DB::table("issue_of_magazines")->where("id",$id)->delete();
        return redirect(route("issuetrash"));
    }

     //البحث
     public function search(Request $request)
     {
         $q = $request->q;
         $query = IssueContent::whereRaw('true');
         if($q){
             $query->where("title" ,"like" ,"%$q%")
             
             ->get();
         }
         $contents = $query->latest()->paginate(5)
             ->appends([
                 'q'=>$q,
             ]);   
             
             $issues = IssueOfMagazine::all();
         return view("admin.issueconent.index",compact('contents','issues'));
         
     }
}
