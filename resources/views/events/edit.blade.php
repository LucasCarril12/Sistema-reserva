@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Evento</h1>

    <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $event->title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Subir fotos (opcional)</label>
            <input type="file" name="images[]" multiple accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Subtítulo</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $event->subtitle) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="description" class="form-control">{{ old('description', $event->description) }}</textarea>
        </div>

        <button class="btn btn-primary">Actualizar</button>
    </form>

    @if($event->images->count())
            <div class="mb-4">
                <label class="form-label">Imágenes actuales</label>

                <div class="row">
                    @foreach($event->images as $image)
                        <div class="col-md-3 mb-3 text-center">
                            <img src="{{ asset('storage/'.$image->image_path) }}"
                                class="img-fluid rounded mb-2"
                                style="height:150px; object-fit:cover;">

                            <form action="{{ route('events.images.destroy', $image->id) }}"
                                method="POST"
                                onsubmit="return confirm('¿Eliminar esta imagen?')">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>
                            </form>

                        </div>
                    @endforeach
                </div>
            </div>
        @endif
</div>
@endsection
