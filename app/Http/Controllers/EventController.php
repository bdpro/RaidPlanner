<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Validator;
use Calendar;

class EventController extends Controller
{
    public function index(){
        $events = Event::get();
        $events_list = [];
        foreach ($events as $key => $event){
            $event_list[] = Calendar::event(
                $event->nom_raid,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day'),
                null,
                [
                    'color' => '#E52A3C',
                    'url' => 'raid?id='.$event->id,
                ]
            );
        }
        $calendar_details = Calendar::addEvents($event_list);
        
        return view('raidplanner.index', compact('calendar_details'));
    }
    
    public function addEvent(Request $request){
        $validator = Validator::make($request->all(), [
            'nom_raid' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        
        if ($validator->fails()){
            \Session::flash('warning', 'Pleaser enter the valid details');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
        
        $event = new Event;
        $event->nom_raid = $request['nom_raid'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->save();
        
        
        return redirect()->back();
    }
}
