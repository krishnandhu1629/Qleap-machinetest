@extends('layouts.app')

@section('content')
    <h1>Proposal for {{ $proposal->lead->name }}</h1>
    <p>{{ $proposal->content }}</p>
    <a href="{{ route('proposals.index') }}" class="btn btn-secondary">Back to Proposals</a>
    <a href="{{ route('proposals.edit', $proposal->id) }}" class="btn btn-primary">Edit Proposal</a>
@endsection
