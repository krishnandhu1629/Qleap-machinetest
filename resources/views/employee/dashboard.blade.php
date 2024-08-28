@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Dashboard</h1>
    <p><a href="{{ route('leads.create') }}">Create Lead</a></p>
    <p><a href="{{ route('proposals.create') }}">Create Proposal</a></p>
    <p><a href="{{ route('estimates.create') }}">Create Estimate</a></p>
    <p><a href="{{ route('invoices.create') }}">Create Invoice</a></p>
</div>
@endsection
