@extends('layouts.app')

@section('content')
    <h1>{{ $lead->name }}</h1>
    <p><strong>Email:</strong> {{ $lead->email }}</p>
    <p><strong>Description:</strong> {{ $lead->description }}</p>
    <a href="{{ route('leads.index') }}" class="btn btn-secondary">Back to Leads</a>
    <a href="{{ route('leads.edit', $lead->id) }}" class="btn btn-primary">Edit Lead</a>
@endsection
