@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="toolbar px-3 px-lg-6 py-3">
                <div class="position-relative container-fluid px-0">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 mb-4 mb-md-0">
                            <h1 class="mb-2">Корисник</h1>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="{{route('users.index')}}" class="btn btn-primary">Корисници</a>
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
                        <th class="text-center">Име</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Улога</th>
                        <th class="text-center">Држава</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $users->id }}</td>
                            <td class="text-center">{{ $users->name }}</td>
                            <td class="text-center">{{ $users->email }}</td>
                            <td class="text-center">{{ $users->role->name }}</td>
                            <td class="text-center">{{ $users->country->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
