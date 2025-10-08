@extends('layouts.projects')
@section('title', 'New Project')

@section('content')
    <div class="container px-5 my-5">
        <form action="{{ route('project.store') }}" method="post" id="projectForm">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="title" name="title" type="text" placeholder="title" required />
                <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="description" name="description" placeholder="description" style="height: 10rem;"
                    required></textarea>
                <label for="description">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="client" name="client" type="text" placeholder="client" required />
                <label for="client">Client</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="startDate" name="startDate" type="date" placeholder="start_date"
                    required />
                <label for="startDate">Start Date</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="endDate" name="endDate" type="date" placeholder="end_date" required />
                <label for="endDate">End Date</label>
            </div>

            <!-- Nuovo campo Category -->
            <div class="form-floating mb-3">
                <select class="form-select" id="category" name="category_id" required>
                    <option value="" selected disabled>Choose category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <label for="category">Category</label>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
