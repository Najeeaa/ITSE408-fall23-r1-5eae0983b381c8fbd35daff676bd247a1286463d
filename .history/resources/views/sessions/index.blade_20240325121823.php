@extends('layouts.app')

@section('content')
    <h1>Sessions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Conference</th>
                <th>Speaker</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sessions as $session)
                <tr>
                    <td>{{ $session->title }}</td>
                    <td>{{ $session->description }}</td>
                    <td>{{ $session->start_time }}</td>
                    <td>{{ $session->end_time }}</td>
                    <td>{{ $session->conference->name }}</td>
                    <td>{{ $session->speaker->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
