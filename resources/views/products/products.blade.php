<x-layout>
@section('content')
<div class ="row">
@section('name','content')
<h1>{{  $heading }} </h1>
<table class="table table-striped">
@if(session()->has('success'))
        <x-notify type="success" title="Success" content="{{session('success')}}"/>
@endif
<tr>
<th>ID</th>
<th>NAME</th>
<th>UNIT</th>
<th>UNIT PRICE</th>
<th>CATEGORY</th>
<th>VIEW DETAILS</th>
</tr>
</thead>
<tbody>
    @php
    $counter =1;
    @endphp
@foreach($products as $product)
<tr>
<td>{{$counter++}}</td>
<td>{{$product->name}}</td>
<td>{{$product->unit}}</td>
<td>{{$product->unitPrice}}</td>
<td>{{$product->category}}</td>
<td class="table-info">
<div class="row align-items-center">
            <div class="col-4">
            <a href="/product/{{$product->id}}"> <i class="bi bi-eye"></i> </a>
    </div>
    <div class="col-4">
    <a href="/product/{{$product->id}}/edit"> <i class="bi bi-pencil"></i> </a>
    </div>
    <div class="col-4">
<form method="POST" action="/products/{{$product->id}}">
@csrf
@method ('DELETE')
<button class="btn btn-link" type="submit">
<i class="bi bi-trash"></i>
</button>
    </div>
</form>
</td>
</tr>
</div>
</div>


@endforeach

</table>
<nav>
        {{$products->links()}}
     </nav>
</div>
  
</x-layout>