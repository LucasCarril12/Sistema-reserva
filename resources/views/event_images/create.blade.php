@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Subir imágenes</h1>

    <form action="{{ route('event_images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Seleccionar evento</label>
            <select name="event_id" class="form-control">
                @foreach($events as $e)
                    <option value="{{ $e->id }}">{{ $e->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <input type="file" name="images[]" multiple required>
        </div>

        <button class="btn btn-primary">Subir</button>
    </form>
</div>
@endsection
