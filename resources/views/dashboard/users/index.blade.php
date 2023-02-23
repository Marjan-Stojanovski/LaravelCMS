@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="card card-body">
                <div class="table-responsive">
                <table class="table mt-0 table-striped table-card table-nowrap dataTable no-footer">
                    <caption>Листа на корисници</caption>
                    <thead>
                    <tr class="odd">
                        <th class="text-center" colspan="7">

                            <div class="col-md-2">
                                <a href="{{route('users.create')}}"
                                   class="d-flex align-items-center btn btn-outline-primary active">
                        <span class="material-symbols-rounded">
                          add
                          </span>
                                    <span class="text">Додади корисник</span>
                                </a>
                            </div>
                        </th>
                    </tr>
                    <tr class="odd">
                        <th class="text-center" style="padding-top: 20px; padding-bottom: 20px">ID</th>
                        <th class="text-center" style="padding-top: 20px; padding-bottom: 20px">Име</th>
                        <th class="text-center" style="padding-top: 20px; padding-bottom: 20px">Маил</th>
                        <th class="text-center" style="padding-top: 20px; padding-bottom: 20px">Улога</th>
                        <th class="text-center" colspan="3" style="padding-top: 20px; padding-bottom: 20px">Акција</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center" style="padding-top: 30px; padding-bottom: 10px">{{$user->id}}</td>
                            <td class="text-center" style="padding-top: 30px; padding-bottom: 10px">{{$user->name}}</td>
                            <td class="text-center" style="padding-top: 30px; padding-bottom: 10px">{{$user->email}}</td>
                            <td class="text-center" style="padding-top: 30px; padding-bottom: 10px">{{$user->role->name}}</td>
                            <td class="text-center" style="padding-top: 20px; padding-bottom: 10px; width: 10px">
                                <div class="btn-group btn-group-lg">
                                <a href="{{route('users.show', $user->id)}}" class="btn btn-outline-gray">
                                    <span class="material-symbols-rounded">
                          preview
                          </span>
                                </a>

                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-gray">
                                    <span class="material-symbols-rounded">
                          edit
                          </span>
                                </a>

                                <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-gray">
                                        <span class="material-symbols-rounded">
                          delete
                          </span>
                                    </button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            </div>
        </div>

        <div class="row">

            <div class="content pt-3 px-3 px-lg-6 d-flex flex-column-fluid">
                <div class="container-fluid px-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                            <!--Begin::table card-->
                            <div class="card table-card table-nowrap mb-3 mb-lg-5">
                                <div class="row justify-content-between align-items-start">
                                    <div class="col-12">
                                        <h1 class="btn btn-primary">Креирај корисник</h1>
                                    </div>
                                </div>


                                <div class="table-responsive table-card table-nowrap">
                                    <table class="table align-middle table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#6343</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Jason Roy</h6>
                                                        <small class="text-muted">jason@roy.com</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-success fs-6">Active</span>
                                            </td>

                                            <td>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <a href="#!" data-tippy-content="View user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">visibility</span>
                                                    </a>
                                                    <!--Divider line-->
                                                    <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Edit user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">edit</span>
                                                    </a>
                                                    <!--Divider line-->
                                                    <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Delete user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
