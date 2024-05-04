@extends('layouts.app')
  
@section('title', 'Edit Customer Details')
  
@section('contents')
    <hr />
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" placeholder="Name" value="{{ $customer->Name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="Age" class="form-control" placeholder="Age" value="{{ $customer->Age }}" >
            </div>
        </div>
        <div class="row">
        <div class="col mb-3">
        <label class="form-label">Type</label>
            <select name="Gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Femail">Femail</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Maridate</label>
                <select name="Maridate" class="form-control" >
                    <option value="Marid">Marid</option>
                    <option value="UnMarid">UnMarid</option>
                </select>
                
            </div>
           
        </div>
        <div class="row">
                   <div class="col mb-3">
                <label class="form-label">MedicleRecord</label>
                <textarea class="form-control" name="MedicleRecord" placeholder="MedicleRecord" >{{ $customer->MedicleRecord }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection