@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Imágenes de eventos</h1>

    <a href="{{ route('event_images.create') }}" class="btn btn-primary">Subir imágenes</a>

    <div class="row mt-3">
        @foreach($images as $img)
            <div class="col-3 mb-3">
                <img src="{{ asset('storage/' . $img->image_path) }}" class="img-fluid">
                <div>{{ $img->event ? $img->event->title : '' }}</div>
            </div>
        @endforeach
    </div>
</div>
@endsection
