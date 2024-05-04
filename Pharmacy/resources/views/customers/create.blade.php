@extends('layouts.app')
  
@section('title', 'Add Customer')
  
@section('contents')
    <hr />
    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="number" name="Age" class="form-control" placeholder="Age">
            </div>
        </div>
        <div class="row mb-3">
        <div class="col">
                <select name="Gender" class="form-control" >
                    <option value="Male">Male</option>
                    <option value="Femail">Femail</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col">
                <select name="Maridate" class="form-control" >
                    <option value="Marid">Marid</option>
                    <option value="UnMarid">UnMarid</option>
                </select>
            </div>
           
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="MedicleRecord" placeholder="MedicleRecord"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">ADD Customer</button>
            </div>
        </div>
    </form>
@endsection