@extends('layouts.app')

@section('content')
    <h1>Edit Proposal</h1>
    <form action="{{ route('proposals.update', $proposal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="lead_id">Lead</label>
            <select name="lead_id" id="lead_id" class="form-control">
                @foreach($leads as $lead)
                    <option value="{{ $lead->id }}" {{ $proposal->lead_id == $lead->id ? 'selected' : '' }}>{{ $lead->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Proposal Content</label>
            <textarea name="content" id="content" class="form-control">{{ $proposal->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Proposal</button>
    </form>
@endsection
