<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Yajra\DataTables\DataTables;
use Redirect,Response;


class EventController extends Controller
{
    public function index(){

        $events = Event::paginate(3);
        return view('event.index', compact('events'));
    }

    public function event_edit(Event $event){
        $event = Event::first();
        return view('event.event_edit',compact('event'));
    }

    public function event_update(Event $event, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        $event->name = $request->name;
        $event->slug = $request->slug;

        $event->save();
        notify()->success('event has been updated!');

        return redirect('/api/v1/events')->with('success', 'Event updated successfully!');
    }

    public function event_destroy($id)
    {
        $result = Event::destroy($id);
        notify()->success('event has been deleted successfully');
        return redirect('/api/v1/events');
    }

    public function event_create(){

        return view('event.event_create');
    }
    
    public function event_store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        /* $event = new Event();
        $event->name = $request->name;
        $event->slug = $request->slug;

        $event->save(); */

        Event::create($request->all());
        notify()->success('event has been stored!');

        return redirect('/api/v1/events');
    }

    public function event_search(Request $request)
    {
        if($request->get('keyword') !=null)
        {
            $keyword = $request->get('keyword');
            //$events = Event::where('name', 'LIKE' , '%'.$keyword. '%') ->get();
            $events = Event::where('name', 'LIKE' , '%'.$keyword. '%') ->paginate(3);

            return view('event.index', compact('events'));
        }
        else
        {
            $events = Event::paginate(3);
            

            return view('event.index', compact('events'));

        }

        
    }

}

