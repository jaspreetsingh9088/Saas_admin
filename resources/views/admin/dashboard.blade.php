@extends('admin.layout')

@section('title','Dashboard')

@section('content')

<div class="grid grid-cols-4 gap-8">

    <!-- CARD -->
    <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
        <div class="absolute top-0 left-0 w-full h-1 bg-indigo-500 rounded-t-2xl"></div>

        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-400 text-sm">Users</p>
                <h2 class="text-3xl font-bold mt-2 text-gray-800">{{ $users }}</h2>
            </div>

            <div class="bg-indigo-100 p-3 rounded-xl">
                <i data-feather="users" class="text-indigo-600"></i>
            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="group bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-400 text-sm">Products</p>
                <h2 class="text-3xl font-bold mt-2 text-gray-800">{{ $products }}</h2>
            </div>

            <div class="bg-green-100 p-3 rounded-xl">
                <i data-feather="box" class="text-green-600"></i>
            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="group bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-400 text-sm">Orders</p>
                <h2 class="text-3xl font-bold mt-2 text-gray-800">{{ $orders }}</h2>
            </div>

            <div class="bg-yellow-100 p-3 rounded-xl">
                <i data-feather="shopping-cart" class="text-yellow-600"></i>
            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="group bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-400 text-sm">Revenue</p>
                <h2 class="text-3xl font-bold mt-2 text-gray-800">₹{{ $revenue }}</h2>
            </div>

            <div class="bg-pink-100 p-3 rounded-xl">
                <i data-feather="dollar-sign" class="text-pink-600"></i>
            </div>
        </div>
    </div>

</div>

<!-- TABLE -->
<div class="mt-10 bg-white p-6 rounded-2xl shadow-md">

    <h2 class="text-lg font-semibold mb-4">Latest Orders</h2>

    <table class="w-full text-sm">
        <thead>
            <tr class="text-gray-400 border-b">
                <th class="py-2 text-left">ID</th>
                <th class="py-2 text-left">Total</th>
                <th class="py-2 text-left">Status</th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="py-2">#1</td>
                <td class="py-2">₹1200</td>
                <td class="py-2 text-green-500">Completed</td>
            </tr>
        </tbody>
    </table>

</div>

@endsection