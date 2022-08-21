<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vertion;
use App\Models\TypeOfVertion;
use App\Models\Character;
use App\Models\CenterSection;
use App\Models\Specialty;
class HomController extends Controller
{
    function index(){
        $versions=Vertion::all()->last();
        $sections = CenterSection::all();
        $specialties = Specialty::all();
        $versionsType = TypeOfVertion::all();
        $charas = Character::all();
        return view("frontsite.home",compact('versions','sections','specialties','versionsType','charas'));

    }
 }
