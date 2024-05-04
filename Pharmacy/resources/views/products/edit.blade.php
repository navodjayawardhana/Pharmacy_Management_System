@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" placeholder="Name" value="{{ $product->Name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="Price" class="form-control" placeholder="Price" value="{{ $product->Price }}" >
            </div>
        </div>
        <div class="row">
        <div class="col mb-3">
                <label class="form-label">Quantity</label>
                <input type="text" name="Quantity" class="form-control" placeholder="Quantity" value="{{ $product->Quantity }}" >
            </div>
            <div class="col mb-3">
            <label class="form-label">Type</label>
            <select name="Type" class="form-control" placeholder="Medicle Type">
                    <option value="Tablet">Tablet</option>
                    <option value="Syrup">Syrup</option>
                    <option value="Balm">Balm</option>
                </select>
                
                </div>
           
        </div>
        <div class="row">
                   <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection