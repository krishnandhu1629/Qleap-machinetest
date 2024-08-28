@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>
    <a href="{{ route('invoices.create') }}" class="btn btn-primary">Create New Invoice</a>
    <ul class="list-group mt-3">
        @foreach($invoices as $invoice)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('invoices.show', $invoice->id) }}">Invoice #{{ $invoice->id }} for Estimate #{{ $invoice->estimate_id }}</a>
                <div>
                    <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
