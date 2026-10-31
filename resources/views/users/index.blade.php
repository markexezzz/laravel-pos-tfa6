@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1>Users</h1>

    @if ($users->isEmpty())
        <div class="empty">No users found. Run <code>php artisan db:seed</code>.</div>
    @else
        <table>
            <thead>
                <tr><th>ID</th><th>Username</th><th>Full Name</th></tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
