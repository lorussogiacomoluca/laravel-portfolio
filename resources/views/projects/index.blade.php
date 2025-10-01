@extends('layouts.projects')
@section('title', 'All Projects')

@section('content')
    Visualizza tutti i progetti:

    <ul>
        @foreach ($projects as $project)
            <li><a href="{{ route('project.show', $project->id) }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>
@endsection
