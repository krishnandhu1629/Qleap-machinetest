@extends('layouts.app')

@section('content')
    <h1>Edit Invoice</h1>
    <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="estimate_id">Estimate</label>
            <select name="estimate_id" id="estimate_id" class="form-control">
                @foreach($estimates as $estimate)
                    <option value="{{ $estimate->id }}" {{ $invoice->estimate_id == $estimate->id ? 'selected' : '' }}>Estimate #{{ $estimate->id }} for Proposal #{{ $estimate->proposal_id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount_due">Amount Due</label>
            <input type="number" name="amount_due" id="amount_due" class="form-control" value="{{ $invoice->amount_due }}" required>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" name="due_date" id="due_date" class="form-control" value="{{ $invoice->due_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Invoice</button>
    </form>
@endsection
