@extends('layouts.projects')
@section('title')
    Progetto: {{ $project->title }}
@endsection

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title">{{ $project->title }}</h1>
                <h5 class="card-subtitle mb-2 text-muted">Cliente: {{ $project->client }}</h5>

                @if ($project->category)
                    <span class="badge bg-info text-dark mb-3">{{ $project->category }}</span>
                @endif

                <p class="card-text mt-3">{{ $project->description }}</p>

                <ul class="list-inline text-muted">
                    <li class="list-inline-item"><strong>Start Date:</strong> {{ $project->start_date }}</li>
                    <li class="list-inline-item"><strong>End Date:</strong> {{ $project->end_date }}</li>
                </ul>

                <div class="mt-4">
                    <a href="{{ route('project.index') }}" class="btn btn-outline-primary">Torna alla Home</a>
                    <a href="{{ route('project.edit', $project->id) }}" class="btn btn-outline-warning">Modifica
                        Progetto</a>
                    <!-- Bottone per aprire il modal -->
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteProjectModal">
                        Elimina Progetto
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteProjectModalLabel">Conferma Eliminazione</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro di voler eliminare il progetto <strong>{{ $project->title }}</strong>?
                                    <br> Questa
                                    azione è irreversibile.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annulla</button>

                                    <!-- Form per eliminazione -->
                                    <form action="{{ route('project.destroy', $project->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
