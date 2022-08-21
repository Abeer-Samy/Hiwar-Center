<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Study;

class studiesTypeController extends Controller
{
       function books(Request $request){
         $query = Study::where('study_type_id','=',1);
         $studies = $query->paginate(8);
       return view("frontsite.studies-books.books",compact('studies'));
        }

        function reviews(Request $request){
            $query = Study::where('study_type_id','=',2);
            $studies = $query->paginate(8);
           return view("frontsite.studies-books.reviews",compact('studies'));
         }

         function translations(Request $request){
            $query = Study::where('study_type_id','=',3);
            $studies = $query->paginate(8);
           return view("frontsite.studies-books.translations",compact('studies'));
         }

        function studies(Request $request){
            $query = Study::where('study_type_id','=',4);
            $studies = $query->paginate(8);
           return view("frontsite.studies-books.studies",compact('studies'));
            }

}
