@extends('layouts.app')

@section('content')
    <h1>Speakers</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Bio</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($speakers as $speaker)
                <tr>
                    <td>{{ $speaker->name }}</td>
                    <td>{{ $speaker->bio }}</td>
                    <td>{{ $speaker->photo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
