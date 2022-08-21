<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IssueOfMagazine;
use App\Models\magazine;
use App\Models\IssueContent;
use Session;
use DB;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $issues = IssueOfMagazine::all();
        $query = IssueContent::whereRaw('true');
        $contents = $query->latest()->paginate(5);
        
        return view("admin.issueconent.index",compact('contents','issues'));
    }

    public function trashed()
    {
        $issues = IssueOfMagazine::all();
        $query = IssueContent::onlyTrashed()->whereRaw('true');
        $content = $query->latest()->paginate(5);
        
        return view("admin.issueconent.trash",compact('content','issues'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $issues = IssueOfMagazine::all();

        return view('admin.issueconent.create',compact('issues'));
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
            $destinationPath = 'public\image\content';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
          if ($pdf = $request->file('pfd')) {
            $destinationPath = 'public\pdf\content';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pfd'] = "$profileImage";
        }
            IssueContent::create($input);
            Session::flash("msg","s: تمت الإضافة بنجاح");
            return redirect(route("issuecontent.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.issueconent.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $issues = IssueOfMagazine::all();
        $content = IssueContent::find($id);
        if(!$content){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("issueconent.index"));
        }
        
        return view("admin.issueconent.edit",compact('content','issues'));
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
        
        $contentDB = IssueContent::find($id);        
        $requestData = $request->all();
    
    
        if ($image = $request->file('image')) {
            $destinationPath = 'public\image\content';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        if ($pdf = $request->file('pfd')) {
            $destinationPath = 'public\pdf\content';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pfd'] = "$profileImage";
        }
    
        $contentDB->update($requestData);
       //dd(" $contentDB");
    
        session()->flash("msg","s:تم التعديل بنجاح ");
        return redirect(route("issuecontent.index")); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("issue_contents")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("contenttrash"));
    }

    public function softDelete($id)
    {
        $issueDB = IssueContent::find($id)->delete(); 
        //DB::table("issue_of_magazines")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المنتج بنجاح");
        return redirect(route("issuecontent.index"));
    }

    public function backFromSoftDelete($id)
    {
        
        $issueDB = IssueContent::onlyTrashed()->where('id',$id)->first()->restore(); 
        //DB::table("issue_of_magazines")->where("id",$id)->delete();
        return redirect(route("contenttrash"));
    }

    
    
}
