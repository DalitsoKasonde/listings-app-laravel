@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing<span class="float-right"><a href="/home" class="btn btn-secondary">Go back</a></span> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="/listings">
                        @csrf
                        <div class="form-group">
                          <label for="name">Enter your Name</label>
                          <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="adddress">Enter your Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                          </div>
                          <div class="form-group">
                            <label for="website">Enter your Website</label>
                            <input type="text" class="form-control" id="website" name="website" placeholder="Enter website url">
                          </div>
                          <div class="form-group">
                            <label for="email">Enter your Email</label>
                            <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email address">
                          </div>
                          <div class="form-group">
                            <label for="phone">Enter your Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone"  placeholder="Enter phone number">
                          </div>
                          <div class="form-group">
                            <label for="bio">Enter your Bio</label>
                            <input type="text" class="form-control" id="bio"  name="bio" placeholder="Enter bio">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

            </div>
        </div>
    </div>
</div>
@endsection
