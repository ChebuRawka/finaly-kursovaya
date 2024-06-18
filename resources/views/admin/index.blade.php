@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Административная панель</h1>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
            </tr>
            </thead>
            <tbody>
            @foreach($consultationRequests as $request)
                <tr>
                    <td>{{ $request->id }}</td>
                    <td>{{ $request->name }}</td>
                    <td>{{ $request->email }}</td>
                    <td>{{ $request->phone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
