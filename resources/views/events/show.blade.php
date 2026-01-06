@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $event->title }}</h1>
    <p>{{ $event->subtitle }}</p>
    <div>
        {!! nl2br(e($event->description)) !!}
    </div>

    <hr>

    <h3>Imágenes</h3>
    <div class="row">
        @foreach($event->images as $img)
            <div class="col-3 mb-3">
                <img src="{{ asset('storage/' . $img->image_path) }}" class="img-fluid" alt="">
                <form action="{{ route('event_images.destroy', $img->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger mt-2" onclick="return confirm('Eliminar imagen?')">Eliminar</button>
                </form>
            </div>
        @endforeach
    </div>

    <hr>

    <h4>Subir imágenes</h4>
    <form action="{{ route('event_images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <div class="mb-3">
            <input type="file" name="images[]" multiple required>
        </div>
        <button class="btn btn-primary">Subir</button>
    </form>
</div>
@endsection
