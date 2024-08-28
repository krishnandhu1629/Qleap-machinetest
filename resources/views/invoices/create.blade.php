@extends('layouts.app')

@section('content')
    <h1>Create Invoice</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="estimate_id">Estimate</label>
            <select name="estimate_id" id="estimate_id" class="form-control">
                @foreach($estimates as $estimate)
                    <option value="{{ $estimate->id }}">Estimate #{{ $estimate->id }} for Proposal #{{ $estimate->proposal_id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount_due">Amount Due</label>
            <input type="number" name="amount_due" id="amount_due" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" name="due_date" id="due_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create Invoice</button>
    </form>
@endsection
