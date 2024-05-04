@extends('layouts.app')
  
@section('title', 'Profile')
  
@section('contents')
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="row" id="res"></div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" name="name" disabled class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-6">
                        <label class="labels">Create</label>
                        <input type="text" name="name" disabled class="form-control" placeholder="first name" value="{{ auth()->user()->created_at }}">
                    </div>
                    
                </div>

            </div>
        </div>
         
    </div>   
            
        </form>
@endsection