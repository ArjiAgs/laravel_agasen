<x-layout>
<h1>Update Product | {{$product->name}}</h1>      
<form method="POST" action="/products/{{$product->id}}">
@csrf
@method('PUT')
      <div class="row mb-3">
            <label for="name" class="form-label">Product</label>
            <div class="col-sm-10">
            <input type="text" name="name" value="{{$product->name}}" class="form-control @error('name') is-invalid @enderror"/>
            <div class="text-danger">
                  @error('name')
                        {{$message}}
                  @enderror
            </div>      
      </div>
      </div>
      <div class="row mb-3">
            <label for="unit" class="form-label">Unit</label>
            <div class="col-sm-10">
            <input type="text" name="unit" value="{{$product->unit}}" class="form-control @error('unit') is-invalid @enderror"/>
            <div class="text-danger">
                  @error('unit')
                        {{ $message }}
                  @enderror
            </div>         
      </div>
      </div>
      <div class="row mb-3">
            <label for="unitPrice" class="form-label">Unit Price</label>
            <div class="col-sm-10">
            <input type="text" name="unitPrice" value="{{$product->unitPrice}}" class="form-control @error('unitPrice') is-invalid @enderror"/>
            <div class="text-danger">
                  @error('unitPrice')
                        {{$message}}
                  @enderror
            </div>         
      </div>
      </div>
      <div class="row mb-3">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
            <select name="category" class="form-control">
               <option {{ $product->category == 'vegetable' ? 'selected':'' }} value="vegetable">Vegetable</option>
               <option {{ $product->category == 'meat' ? 'selected':'' }} value="meat">Meat</option>
               <option {{ $product->category == 'fish' ? 'selected':'' }} value="fish">Fish</option>
               <option {{ $product->category == 'drinks' ? 'selected':'' }} value="drinks">Drinks</option>
            </select>        
      </div>
      </div>
      <button class="btn btn-primary">Update</button>
      <a href="/" class="btn btn-primary float-end">Back</a>
</form>

</x-layout>