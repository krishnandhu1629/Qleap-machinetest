@extends('layouts.app')

@section('content')
    <h1>Edit Lead</h1>
    <form action="{{ route('leads.update', $lead->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $lead->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $lead->email }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $lead->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Lead</button>
    </form>
@endsection
