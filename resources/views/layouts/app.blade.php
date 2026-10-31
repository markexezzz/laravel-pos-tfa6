<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | POS</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; background: #f4f6f8; color: #1f2933; }
        nav { background: #1f2933; padding: 0 24px; display: flex; align-items: center; gap: 8px; }
        nav .brand { color: #fff; font-weight: 700; margin-right: 24px; padding: 16px 0; }
        nav a { color: #cbd2d9; text-decoration: none; padding: 16px 14px; }
        nav a.active, nav a:hover { color: #fff; background: #323f4b; }
        main { max-width: 900px; margin: 32px auto; padding: 0 16px; }
        h1 { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        th, td { text-align: left; padding: 12px 16px; border-bottom: 1px solid #e4e7eb; }
        th { background: #e4e7eb; }
        .empty { padding: 24px; background: #fff; text-align: center; color: #7b8794; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">POS System</span>
        <a href="{{ route('customers.index') }}" class="{{ request()->routeIs('customers.*') ? 'active' : '' }}">Customers</a>
        <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">Users</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
