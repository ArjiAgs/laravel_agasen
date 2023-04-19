<x-layout>
<h1>New Product Form </h1>      
<form method="POST" action="/product">
      @csrf
      <div class="row mb-3">
            <label for="name" class="form-label">Product</label>
            <div class="col-sm-10">
            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror"/>
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
            <input type="text" name="unit" value="{{old('unit')}}" class="form-control @error('unit') is-invalid @enderror"/>
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
            <input type="text" name="unitPrice" value="{{old('unitPrice')}}" class="form-control @error('unitPrice') is-invalid @enderror"/>
            <div class="text-danger">
                  @error('unitPrice')
                        {{$message}}
                  @enderror
            </div>         
      </div>
      </div>
      <div class="row mb-3">
            <label for="category" class="form-label">Category</label>
            <div class="col-sm-10">
            <select name="category" class="form-control">
               <option value="vegetable">Vegetable</option>
               <option value="meat">Meat</option>
               <option value="fish">Fish</option>
               <option value="drinks">Drinks</option>
            </select>
            <div class="text-danger">
                  @error('category')
                        {{$message}}
                  @enderror
            </div>         
      </div>
      </div>
      <button class="btn btn-primary">Save</button>
</form>
</x-layout>