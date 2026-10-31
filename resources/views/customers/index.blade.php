@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <h1>Customers</h1>

    @if ($customers->isEmpty())
        <div class="empty">No customers found. Run <code>php artisan db:seed</code>.</div>
    @else
        <table>
            <thead>
                <tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th></tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
