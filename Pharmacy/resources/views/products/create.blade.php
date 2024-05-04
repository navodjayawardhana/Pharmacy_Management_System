@extends('layouts.app')
  
@section('title', 'Add Product')
  
@section('contents')
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="Price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="Quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="col">
                <select name="Type" class="form-control" placeholder="Medicle Type">
                    <option value="Tablet">Tablet</option>
                    <option value="Syrup">Syrup</option>
                    <option value="Balm">Balm</option>
                </select>
            </div>
           
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">ADD PRODUCT</button>
            </div>
        </div>
    </form>
@endsection