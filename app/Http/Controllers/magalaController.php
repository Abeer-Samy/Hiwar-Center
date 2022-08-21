<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IssueOfMagazine;
use App\Models\magazine;
use App\Models\IssueContent;
use Session;
use DB;

class magalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = IssueOfMagazine::whereRaw('true');
        $issues = $query->paginate(10);
        return view("frontsite.majala.majala",compact('issues'));

    }

    public function issue()
    {
        $issues = IssueOfMagazine::all();
        $query = IssueContent::whereRaw('true');
        $content = $query->latest()->paginate(5);

        return view('frontsite.majala.issue',compact('content','issues'));
    }
    
    public function search(Request $request)
    {
        
        $q = $request->q;
        $issue = $request->issue_id;
        
        $query = IssueContent::whereRaw('true');
      
        if($issue){
            $query->where('issue_id',$issue);
        }
        if($q){
            $query->where("title" ,"like" ,"%$q%")
            
            ->get();
        }
        $contents = $query->latest()->paginate(5)
            ->appends([
                'q'=>$q,
                'issue_id'=>$issue
            ]);

            $issues = IssueOfMagazine::all();
            
        return view("frontsite.majala.searchMajala",compact('contents','issues'));
        
    }
    

    public function result()
    {

        $query = IssueContent::whereRaw('true');
        $contents = $query->latest()->paginate(5);
        $issues = IssueOfMagazine::all();
            
        return view("frontsite.majala.searchresult",compact('contents','issues'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

    
}
