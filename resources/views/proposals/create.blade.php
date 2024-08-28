@extends('layouts.app')

@section('content')
    <h1>Create Proposal</h1>
    <form action="{{ route('proposals.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="lead_id">Lead</label>
            <select name="lead_id" id="lead_id" class="form-control">
                @foreach($leads as $lead)
                    <option value="{{ $lead->id }}">{{ $lead->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Proposal Content</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create Proposal</button>
    </form>
@endsection
