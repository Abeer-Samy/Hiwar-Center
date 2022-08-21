<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\CenterSection;
use App\Models\Specialty;
use App\Models\TypeActivity;
use App\Models\EventStatuse;
use Session;
use DB;

class EventShowController extends Controller
{

    //show conferences
    public function show_conferences(Request $request)
    {


        $query = Event::where('event_type_id','=',1);
        $events = $query->paginate(8);

        return view("frontsite.event.conferences",compact('events'));
    

    }

    // show showSeminarsAndLectures
    public function show_seminars_and_lectures(Request $request)
    {
        $query = Event::where('event_type_id','=',2);
        $events = $query->paginate(8);
        return view("frontsite.event.SeminarsAndLectures",compact('events'));

    }

    //show workshops
    public function show_workshops(Request $request)
    {
        $query = Event::where('event_type_id','=',3);
        $events = $query->paginate(8);

        return view("frontsite.event.Workshops",compact('events'));

    }

 
    public function more(Request $request)
    {
        $query = Event::all();
        $events = $query->paginate(8);

        return view("frontsite.event.more",compact('events'));

    }
   
    }
