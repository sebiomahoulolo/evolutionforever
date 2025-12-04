<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photo1 = $request->file('photo1');
        $photo2 = $request->file('photo2');
        $filename1 = uniqid().'_1.'.$photo1->getClientOriginalExtension();
        $filename2 = uniqid().'_2.'.$photo2->getClientOriginalExtension();
        $photo1->move(public_path('events'), $filename1);
        $photo2->move(public_path('events'), $filename2);

        Event::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'photo1' => 'events/' . $filename1,
            'photo2' => 'events/' . $filename2,
        ]);
        return redirect()->route('admin.events.index')->with('success', 'Événement ajouté avec succès.');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }


 public function show()
    {
        $events = Event::latest()->get(); // Récupère toutes les lignes
        return view('admin.events.get_events', compact('events'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'titre' => $request->titre,
            'description' => $request->description,
        ];
        if ($request->hasFile('photo1')) {
            $filename1 = uniqid().'_1.'.$request->file('photo1')->getClientOriginalExtension();
            $request->file('photo1')->move(public_path('events'), $filename1);
            $data['photo1'] = 'events/' . $filename1;
        }
        if ($request->hasFile('photo2')) {
            $filename2 = uniqid().'_2.'.$request->file('photo2')->getClientOriginalExtension();
            $request->file('photo2')->move(public_path('events'), $filename2);
            $data['photo2'] = 'events/' . $filename2;
        }
        $event->update($data);
        return redirect()->route('admin.events.index')->with('success', 'Événement modifié avec succès.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Événement supprimé avec succès.');
    }
}
