@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Заявки на консультацию</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Дата</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($requests as $request)
                <tr>
                    <td>{{ $request->id }}</td>
                    <td>{{ $request->name }}</td>
                    <td>{{ $request->email }}</td>
                    <td>{{ $request->phone }}</td>
                    <td>{{ $request->created_at }}</td>
                    <td>{{ $request->status }}</td>
                    <td>
                        <form action="{{ route('admin.consultation-requests.update_status', $request->User_id) }}" method="POST">
                            @csrf
                            <select name="status" class="form-control" required>
                                <option value="pending" {{ $request->status == 'pending' ? 'selected' : '' }}>Ожидает</option>
                                <option value="approved" {{ $request->status == 'approved' ? 'selected' : '' }}>Одобрена</option>
                                <option value="rejected" {{ $request->status == 'rejected' ? 'selected' : '' }}>Отклонена</option>
                            </select>
                            <button type="submit" class="btn btn-primary mt-2">Обновить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
