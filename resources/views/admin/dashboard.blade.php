@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p><a href="{{ route('leads.index') }}">Manage Leads</a></p>
    <p><a href="{{ route('proposals.index') }}">Manage Proposals</a></p>
    <p><a href="{{ route('estimates.index') }}">Manage Estimates</a></p>
    <p><a href="{{ route('invoices.index') }}">Manage Invoices</a></p>
</div>
@endsection
