@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="card card-body">
                <div class="table-responsive">
                    <div class="container">
                        <div class="row">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-2">
                                        <a href="{{route('products.create')}}"
                                           class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                                           style="color: white">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 person_add
                                                </span>
                                            </span>
                                            <span class="sidebar-text">Креирај производ</span>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-end">
                                            <button class="btn btn-success mb-2 me-2" data-tippy-content="Избриши">
                                            <span class="material-symbols-rounded align-middle me-2">
                                                groups
                                            </span> Број на продукти <h2>{{$productsCount}}</h2>
                                            </button>

                                        </div>
                                    </div>
                                </div>

                                <br>
                                <!--Begin::table card-->
                                <div class="card table-card table-nowrap mb-3 mb-lg-5">
                                    <div class="table-responsive table-card table-nowrap">
                                        <table class="table align-middle table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th class="text-center">Име</th>
                                                <th class="text-center">Опис на продуктот</th>
                                                <th class="text-center">Слика на продуктот</th>
                                                <th class="text-center">Категорија</th>
                                                <th class="text-center">Категорија</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">{{$product->name}}</h6>
                                                                <br>
                                                                <br>
                                                                <small class="text-muted">Цена {{$product->price}} ден.</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="text">{{$product->description}}</span>
                                                    </td>

                                                    <td class="text-center">
                                                        <img src="/assets/img/products/thumbnails/{{ $product->image }}" style="width: 300px" alt="Slider"/>
                                                    </td>
                                                    <td class="text-center">
                                                        <h4>Kategorija</h4>
                                                    </td>
                                                    <td>
                                                        <a href=""></a>
                                                        <a href=""></a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
