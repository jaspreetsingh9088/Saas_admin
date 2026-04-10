<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200">

<div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-gradient-to-b from-indigo-900 via-gray-900 to-black text-white flex flex-col shadow-2xl">

        <div class="p-6 text-2xl font-bold">🚀 Admin</div>

        <nav class="flex-1 px-4 space-y-2">

            <a href="/admin/dashboard" class="menu">Dashboard</a>
            <a href="/admin/users" class="menu">Users</a>
            <a href="/admin/products" class="menu">Products</a>
            <a href="/admin/orders" class="menu">Orders</a>
            <a href="/admin/categories" class="menu">Categories</a>

        </nav>
    </div>

    <!-- Main -->
    <div class="flex-1 flex flex-col">

        <!-- Topbar -->
        <div class="flex justify-between px-6 py-4 bg-white/40 backdrop-blur-xl shadow">
            <h1 class="font-semibold text-lg">@yield('title')</h1>

            <div class="flex gap-4 items-center">
                <span>{{ auth()->user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bg-red-500 text-white px-3 py-1 rounded">Logout</button>
                </form>
            </div>
        </div>

        <!-- Content -->
        <div class="p-6 overflow-y-auto">
            @yield('content')
        </div>

    </div>

</div>

<script>
feather.replace()
</script>

<style>
.menu{
    display:block;
    padding:12px;
    border-radius:10px;
    transition:.3s;
}
.menu:hover{
    background:rgba(255,255,255,0.1);
}
</style>

</body>
</html>