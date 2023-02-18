@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{route('users.store')}}">
                    @csrf
                    <h1>Create User</h1>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>

@endsection




