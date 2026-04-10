@extends('admin.layout')

@section('title','Users')

@section('content')

<table class="w-full bg-white rounded shadow">
    <tr class="bg-gray-200">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    @foreach($users as $user)
    <tr class="border">
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach

</table>

@endsection