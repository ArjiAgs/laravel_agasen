@extends('layout')

@section('content')

<h5>Product Name: {{$product->name}}</h5>

<div>
    <ul>
        <li>Price: {{$product->unitPrice}}</li>
        <li>Product Unit: {{$product->unit}} </li>
    </ul>
</div>
@endsection