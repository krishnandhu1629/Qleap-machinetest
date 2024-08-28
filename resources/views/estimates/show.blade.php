@extends('layouts.app')

@section('content')
    <h1>Estimate for Proposal #{{ $estimate->proposal_id }}</h1>
    <p><strong>Amount:</strong> {{ $estimate->amount }}</p>
    <a href="{{ route('estimates.index') }}" class="btn btn-secondary">Back to Estimates</a>
    <a href="{{ route('estimates.edit', $estimate->id) }}" class="btn btn-primary">Edit Estimate</a>
@endsection
