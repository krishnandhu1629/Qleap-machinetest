@extends('layouts.app')

@section('content')
    <h1>Create Estimate</h1>
    <form action="{{ route('estimates.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="proposal_id">Proposal</label>
            <select name="proposal_id" id="proposal_id" class="form-control">
                @foreach($proposals as $proposal)
                    <option value="{{ $proposal->id }}">Proposal #{{ $proposal->id }} for {{ $proposal->lead->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create Estimate</button>
    </form>
@endsection
