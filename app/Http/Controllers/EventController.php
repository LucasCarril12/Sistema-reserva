<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImage;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function __construct()
    {
        // Solo estas rutas requieren auth
        $this->middleware('auth')->except(['publicIndex', 'show']);
    }

    /**
     * HOME / WELCOME (PUBLICO)
     */
    public function publicIndex()
    {
        $events = Event::with('images')->latest()->get();
        return view('welcome', compact('events'));
    }

    /**
     * LISTADO ADMIN
     */
    public function index()
    {
        $events = Event::with('images')->latest()->get();
        return view('events.index', compact('events'));
    }

    /**
     * FORM CREAR EVENTO
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * GUARDAR EVENTO
     */
    public function store(EventRequest $request)
    {
        $event = Event::create($request->validated());

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('events', 'public');

                EventImage::create([
                    'event_id' => $event->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()
            ->route('events.index')
            ->with('success', 'Evento creado correctamente');
    }

    /**
     * MOSTRAR EVENTO (opcional publico)
     */
    public function show(string $id)
    {
        $event = Event::with('images')->findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * EDITAR EVENTO
     */
    public function edit(string $id)
    {
        $event = Event::with('images')->findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * ACTUALIZAR EVENTO
     */
    public function update(EventRequest $request, string $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->validated());

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('events', 'public');

                EventImage::create([
                    'event_id' => $event->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()
            ->route('events.index')
            ->with('success', 'Evento actualizado correctamente');
    }

    /**
     * ELIMINAR EVENTO ENTERO
     */
    public function destroy(string $id)
    {
        $event = Event::with('images')->findOrFail($id);

        foreach ($event->images as $image) {
            if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
            $image->delete();
        }

        $event->delete();

        return redirect()
            ->route('events.index')
            ->with('success', 'Evento eliminado correctamente');
    }

    //ELIMINAR IMG DEL EVENTO
    public function destroyImage(EventImage $image)
    {
        if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }

        $image->delete();

        return back()->with('success', 'Imagen eliminada correctamente');
    }
}
