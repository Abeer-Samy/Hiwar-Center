<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Study;

use App\Models\Event;
use App\Models\Vertion;
use App\Models\TypeOfVertion;
use App\Models\Character;
use App\Models\CenterSection;
use App\Models\Specialty;
use App\Models\TypeStudies;
use App\Models\magazine;
use App\Models\CourseMaterial;

class FrontHomController extends Controller
{
    function index(){

        $homeSliders = Slider::where('active','1')->orderBy('id','desc')->take(4)->get();
        $versions=Vertion::latest()->take(3)->get();
        $studies = Study::latest()->take(5)->get();

        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $versionsType = TypeOfVertion::all();
        $typeStudies = TypeStudies::all();
        $magazine = magazine::latest()->take(3)->get();
        $charas = Character::all();
        $events= Event::all();
        $course=CourseMaterial::all();
        $query = CourseMaterial::whereRaw('true');
        $courses = $query->paginate(3);
        $lectures = $query->paginate(5);

        return view("frontsite.home",compact('homeSliders','versions','studies','sections',
        'specialties','versionsType','charas','typeStudies','magazine','events' ,'course'));

    
    }
 }
