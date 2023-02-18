@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="toolbar px-3 px-lg-6 py-3">
                <div class="position-relative container-fluid px-0">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 mb-4 mb-md-0">
                            <h1 class="mb-2"><span class="material-symbols-rounded">
                          productivity
                        </span> Users</h1>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="{{route('users.create')}}" class="btn btn-primary">Create User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center"><a href="{{route('users.show', $user->id)}}" class="btn btn-info">{{$user->id}}</a></td>
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center">{{$user->password}}</td>
                            <td class="text-center">
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td class="text-center">
                                <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
