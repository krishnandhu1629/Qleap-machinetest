@extends('layouts.app')

@section('content')
    <h1>Leads</h1>
    <a href="{{ route('leads.create') }}">Create New Lead</a>
    <ul>
        @foreach($leads as $lead)
            <li>
                <a href="{{ route('leads.show', $lead->id) }}">{{ $lead->name }}</a>
                <form action="{{ route('leads.destroy', $lead->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
