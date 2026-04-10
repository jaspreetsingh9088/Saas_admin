@extends('admin.layout')

@section('title','Orders')

@section('content')

<table class="w-full bg-white shadow rounded">
<tr>
<th>ID</th>
<th>Total</th>
</tr>

@foreach($orders as $o)
<tr>
<td>{{ $o->id }}</td>
<td>₹{{ $o->total }}</td>
</tr>
@endforeach

</table>

@endsection