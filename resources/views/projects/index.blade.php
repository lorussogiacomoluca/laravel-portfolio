@extends('layouts.projects')
@section('title', 'All Projects')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">All Projects</h1>

        @if ($projects->isEmpty())
            <div class="alert alert-info">
                No projects found.
            </div>
        @else
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Client</th>
                        <th>Category</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->client }}</td>
                            <td>{{ $project->category ?? '-' }}</td>
                            <td>{{ $project->start_date }}</td>
                            <td>{{ $project->end_date }}</td>
                            <td>
                                <a href="{{ route('project.show', $project->id) }}"
                                    class="btn btn-outline-sm btn-outline-primary">View</a>
                                <a href="{{ route('project.edit', $project->id) }}"
                                    class="btn btn-outline-sm btn-outline-warning">Edit</a>

                                <!-- Bottone per aprire il modal di eliminazione -->
                                <button type="button" class="btn btn-outline-sm btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteProjectModal{{ $project->id }}">
                                    Delete
                                </button>

                                <!-- Modal di conferma eliminazione -->
                                <div class="modal fade" id="deleteProjectModal{{ $project->id }}" tabindex="-1"
                                    aria-labelledby="deleteProjectModalLabel{{ $project->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteProjectModalLabel{{ $project->id }}">
                                                    Conferma Eliminazione</h5>
                                                <button type="button" class="btn-outline-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Sei sicuro di voler eliminare il progetto
                                                <strong>{{ $project->title }}</strong>? Questa azione è irreversibile.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Annulla</button>
                                                <form action="{{ route('project.destroy', $project->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Elimina</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fine Modal -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
