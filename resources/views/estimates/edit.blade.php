@extends('layouts.app')

@section('content')
    <h1>Edit Estimate</h1>
    <form action="{{ route('estimates.update', $estimate->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="proposal_id">Proposal</label>
            <select name="proposal_id" id="proposal_id" class="form-control">
                @foreach($proposals as $proposal)
                    <option value="{{ $proposal->id }}" {{ $estimate->proposal_id == $proposal->id ? 'selected' : '' }}>Proposal #{{ $proposal->id }} for {{ $proposal->lead->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" value="{{ $estimate->amount }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Estimate</button>
    </form>
@endsection
