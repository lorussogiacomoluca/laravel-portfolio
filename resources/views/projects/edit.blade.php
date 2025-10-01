@extends('layouts.projects')
@section('title', 'Edit Project')

@section('content')
    <div class="container px-5 my-5">
        <form action="{{ route('project.update', $project) }}" method="post" id="projectForm">
            @csrf
            @method('PUT')
            <div class="form-floating mb-3">
                <input class="form-control" id="title" name="title" type="text" placeholder="title"
                    value="{{ old('title', $project->title) }}" required />
                <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="description" name="description" placeholder="description" style="height: 10rem;"
                    required>{{ old('description', $project->description) }}</textarea>
                <label for="description">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="client" name="client" type="text" placeholder="client"
                    value="{{ old('client', $project->client) }}" required />
                <label for="client">Client</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="startDate" name="startDate" type="date" placeholder="start_date"
                    value="{{ old('startDate', $project->start_date) }}" required />
                <label for="startDate">Start Date</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="endDate" name="endDate" type="date" placeholder="end_date"
                    value="{{ old('endDate', $project->end_date) }}" required />
                <label for="endDate">End Date</label>
            </div>

            <!-- Nuovo campo Category -->
            <div class="form-floating mb-3">
                <select class="form-select" id="category" name="category" required>
                    <option value="" disabled>Choose category</option>
                    <option value="Web" {{ old('category', $project->category) == 'Web' ? 'selected' : '' }}>Web</option>
                    <option value="Mobile" {{ old('category', $project->category) == 'Mobile' ? 'selected' : '' }}>Mobile
                    </option>
                    <option value="Design" {{ old('category', $project->category) == 'Design' ? 'selected' : '' }}>Design
                    </option>
                    <option value="Marketing" {{ old('category', $project->category) == 'Marketing' ? 'selected' : '' }}>
                        Marketing</option>
                    <option value="Research" {{ old('category', $project->category) == 'Research' ? 'selected' : '' }}>
                        Research</option>
                </select>
                <label for="category">Category</label>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
