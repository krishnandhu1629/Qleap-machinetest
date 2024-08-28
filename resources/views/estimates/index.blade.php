@extends('layouts.app')

@section('content')
    <h1>Estimates</h1>
    <a href="{{ route('estimates.create') }}" class="btn btn-primary">Create New Estimate</a>
    <ul class="list-group mt-3">
        @foreach($estimates as $estimate)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('estimates.show', $estimate->id) }}">Estimate for Proposal #{{ $estimate->proposal_id }}</a>
                <div>
                    <a href="{{ route('estimates.edit', $estimate->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('estimates.destroy', $estimate->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
