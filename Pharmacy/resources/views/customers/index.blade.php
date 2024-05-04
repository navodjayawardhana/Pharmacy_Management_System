@extends('layouts.app')
  
@section('title', 'Customer')
  
@section('contents')

    @if(auth()->user()->type !== 'manager')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Add Customer</a>
    </div>
    @endif
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Maridate</th>
                <th>MedicleRecord</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($customer->count() > 0)
                @foreach($customer as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->Name }}</td>
                        <td class="align-middle">{{ $rs->Age }}</td>
                        <td class="align-middle">{{ $rs->Gender }}</td>
                        <td class="align-middle">{{ $rs->Maridate }}</td>
                        <td class="align-middle">{{ $rs->MedicleRecord }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('customers.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('customers.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Customer not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection