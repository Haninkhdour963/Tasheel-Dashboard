@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Contact Messages</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ url('admin/contacts') }}" class="btn btn-primary">Create New Review</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Client</th>
                <th>Technician</th>
                <th>Job</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Sent At</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->client->name }}</td>
                    <td>{{ $contact->technician->name }}</td>
                    <td>{{ $contact->jobPosting->title }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
