<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vertion;
use App\Models\Character;


class VersionController extends Controller
{
    function positionEstimate(Request $request){
        $query = Vertion::where('version_type_id','=',1);
        $char = Character::all();
        $versions = $query->paginate(8);
      return view("frontsite.versions.position-estimate",compact('versions','char'));
       }

       function politicalAnalysis(Request $request){
        $query = Vertion::where('version_type_id','=',2);
        $versions = $query->paginate(8);
      return view("frontsite.versions.political-analysis",compact('versions'));
       }

       function articles(Request $request){
        $query = Vertion::where('version_type_id','=',3);
        $versions = $query->paginate(8);
      return view("frontsite.versions.articles",compact('versions'));
       }

       function caseEvaluation(Request $request){
        $query = Vertion::where('version_type_id','=',4);
        $versions = $query->paginate(8);
      return view("frontsite.versions.case-evaluation",compact('versions'));
       }

       function searchFiles(Request $request){
        $query = Vertion::where('version_type_id','=',5);
        $versions = $query->paginate(8);
      return view("frontsite.versions.search-files",compact('versions'));
       }

       function reports(Request $request){
        $query = Vertion::where('version_type_id','=',6);
        $versions = $query->paginate(8);
      return view("frontsite.versions.reports",compact('versions'));
       }
}
