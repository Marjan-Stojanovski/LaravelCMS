@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-ld-12 table-responsive">
                <table class="table align-middle">
                    <caption>Листа на корисници</caption>
                    <thead>
                    <tr>
                        <th class="text-center" colspan="7">
                            <div class="col-md-2">
                                <a href="{{route('users.create')}}"
                                   class="nav-link d-flex align-items-center text-truncate btn btn-info">
                        <span class="material-symbols-rounded">
                          add
                          </span>
                                    <span class="text">Додади корисник</span>
                                </a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Име</th>
                        <th class="text-center">Маил</th>
                        <th class="text-center">Улога</th>
                        <th class="text-center" colspan="3">Акција</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{$user->id}}</td>
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center">{{$user->role->name}}</td>
                            <td class="text-center" style="width: 10px">
                                <a href="{{route('users.show', $user->id)}}" class="btn">
                                    <span class="material-symbols-rounded">
                          preview
                          </span>
                                </a>
                            </td>
                            <td class="text-center" style="width: 10px">
                                <a href="{{route('users.edit', $user->id)}}" class="btn">
                                    <span class="material-symbols-rounded">
                          edit
                          </span>
                                </a>
                            </td>
                            <td class="text-center" style="width: 10px">
                                <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn">
                                        <span class="material-symbols-rounded">
                          delete
                          </span>
                                    </button>
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
