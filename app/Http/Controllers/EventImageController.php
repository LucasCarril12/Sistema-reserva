<?php

namespace App\Http\Controllers;

use App\Models\EventImage;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventImageRequest;
use Illuminate\Support\Facades\Storage;

class EventImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        // List all images if needed
        $images = EventImage::with('event')->get();
        return view('event_images.index', compact('images'));
    }

    public function create()
    {
        $events = Event::all();
        return view('event_images.create', compact('events'));
    }

    public function store(EventImageRequest $request)
    {
        $images = $request->file('images');
        foreach ($images as $file) {
            $path = $file->store('events', 'public');
            EventImage::create([
                'event_id' => $request->event_id,
                'image_path' => $path,
            ]);
        }

        return back()->with('success', 'Imagen(es) subidas correctamente');
    }

    public function show(string $id)
    {
        $image = EventImage::with('event')->findOrFail($id);
        return view('event_images.show', compact('image'));
    }

    public function edit(string $id)
    {
        $image = EventImage::findOrFail($id);
        $events = Event::all();
        return view('event_images.edit', compact('image','events'));
    }

    public function update(EventImageRequest $request, string $id)
    {
        $image = EventImage::findOrFail($id);

        if ($request->hasFile('images')) {
            // remove old file
            if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
            $file = $request->file('images')[0];
            $path = $file->store('events', 'public');
            $image->image_path = $path;
        }

        $image->event_id = $request->event_id;
        $image->save();

        return redirect()->route('events.show', $image->event_id)->with('success', 'Imagen actualizada correctamente');
    }

    public function destroy(string $id)
    {
        $image = EventImage::findOrFail($id);

        if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }

        $eventId = $image->event_id;
        $image->delete();

        return redirect()->route('events.show', $eventId)->with('success', 'Imagen eliminada correctamente');
    }
}
