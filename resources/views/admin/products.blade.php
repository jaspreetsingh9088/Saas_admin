@extends('admin.layout')

@section('title','Products')

@section('content')

<a href="#" class="bg-indigo-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Product</a>

<table class="w-full bg-white shadow rounded">
<tr class="bg-gray-200">
<th>Name</th>
<th>Price</th>
</tr>

@foreach($products as $p)
<tr>
<td>{{ $p->name }}</td>
<td>₹{{ $p->price }}</td>
</tr>
@endforeach

</table>

@endsection