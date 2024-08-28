@extends('layouts.app')

@section('content')
    <h1>Proposals</h1>
    <a href="{{ route('proposals.create') }}" class="btn btn-primary">Create New Proposal</a>
    <ul class="list-group mt-3">
        @foreach($proposals as $proposal)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('proposals.show', $proposal->id) }}">Proposal for {{ $proposal->lead->name }}</a>
                <div>
                    <a href="{{ route('proposals.edit', $proposal->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('proposals.destroy', $proposal->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
