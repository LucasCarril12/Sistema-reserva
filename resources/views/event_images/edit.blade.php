@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar imagen</h1>

    <form action="{{ route('event_images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Seleccionar evento</label>
            <select name="event_id" class="form-control">
                @foreach($events as $e)
                    <option value="{{ $e->id }}" {{ $e->id == $image->event_id ? 'selected' : '' }}>{{ $e->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Nueva imagen (opcional)</label>
            <input type="file" name="images[]">
        </div>

        <button class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
