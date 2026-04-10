@extends('admin.layout')

@section('title','Categories')

@section('content')

<ul class="bg-white p-4 rounded shadow">
@foreach($categories as $c)
<li class="border-b py-2">{{ $c->name }}</li>
@endforeach
</ul>

@endsection