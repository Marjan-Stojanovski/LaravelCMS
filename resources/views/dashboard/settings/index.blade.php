@extends('layouts.dashboard');
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-2">
                <a href="{{route('settings.create')}}"
                   class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                   style="color: white; width: 200px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 settings
                                                </span>
                                            </span>
                    <span class="sidebar-text" data-tippy-content="Додади информации">Подесувања</span>
                </a>
                <br>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card table-card table-wrap">
                    <div class="text-center">
                        <br>
                        <img src="/assets/img/settings/medium/{{$settings->image}}" alt="slika"
                             class="img-responsive rounded-5 mb-3 mb-lg-0 shadow-lg" style="width: 400px; position: ">
                    </div>
                    <div class="card-header">
                        <h5>{{$settings->title}}</h5>
                        <small class="text-muted">{{$settings->email}}</small>
                        <br>
                        <small class="text-muted">{{$settings->address}}</small>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="card table-card table-nowrap">
                    <div class="card-header">
                        <h5 class="mb-0">Линкови</h5>
                    </div>
                    <table class="table">
                        <thead class="small bg-body text-uppercase text-muted">
                        <tr class="align-middle" style="height: 50px">
                            <th>Network</th>
                            <th>Линк</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="align-middle" style="height: 50px">
                            <td>Facebook</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center">{{$settings->facebook}}

                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Skype</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center">{{$settings->skype}}

                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Twitter</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center">{{$settings->twitter}}

                                </div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>LinkedIn</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center">{{$settings->linkedin}}

                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


