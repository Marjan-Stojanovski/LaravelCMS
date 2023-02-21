@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-control" method="post" action="{{route('users.update', $user->id)}}">
                    @csrf
                    @method('put')

                    <h1>Промени корисник</h1>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Име</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">
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
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">
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
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password}}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="role_id" class="col-sm-2 col-form-label">Улога</label>
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
                    <div class="mb-3 row">
                        <label for="country_id" class="col-sm-2 col-form-label">Држава</label>
                        <div class="col-sm-6">
                            <select name="country_id" class="form-control @error('country_id') is-invalid @enderror"
                                    id="country_id">
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                                @error('country_id')
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




