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
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                   name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                   name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   id="password" name="password" value="{{ old('password') }}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="role_id" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-6">
                            <select name="role_id" class="form-control @error('role_id') is-invalid @enderror"
                                    id="role_id">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </select>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>

@endsection




