@extends('layouts.app')

@section('content')
    <h1>Invoice #{{ $invoice->id }}</h1>
    <p><strong>Estimate:</strong> Estimate #{{ $invoice->estimate_id }}</p>
    <p><strong>Amount Due:</strong> {{ $invoice->amount_due }}</p>
    <p><strong>Due Date:</strong> {{ $invoice->due_date }}</p>
    <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Back to Invoices</a>
    <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-primary">Edit Invoice</a>
@endsection
