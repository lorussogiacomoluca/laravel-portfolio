@extends('layouts.projects')
@section('title')
    Progetto: {{ $project->title }}
@endsection

@section('content')
    Scopri il progetto: {{ $project->title }}

    <h3>{{ $project->client }}</h3>

    <p>{{ $project->description }}</p>

    <div class="py-4">
        <a href="{{ route('project.index') }}" class="btn btn-outline-primary">
            Torna alla Home
        </a>
    </div>
@endsection
