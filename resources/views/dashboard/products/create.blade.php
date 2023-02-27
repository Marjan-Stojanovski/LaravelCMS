@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <!--Card-->
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <h1 class="btn btn-primary">Креирај производ</h1>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="name">Име</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Име на производот"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   id="name" name="name">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="price">Цена на производот</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="10.00 МКД"
                                                   class="form-control  @error('price') is-invalid @enderror"
                                                   id="price" name="price">
                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="quantity">Квантитет</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="10 пар."
                                                   class="form-control  @error('quantity') is-invalid @enderror"
                                                   id="quantity" name="quantity">
                                            @error('quantity')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="description">Опис на производот</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Опис на производот"
                                                   class="form-control  @error('description') is-invalid @enderror"
                                                   id="description" name="description">
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="col-md-12">
                                            <label for="inputImage" data-tippy-placement="bottom"
                                                   data-tippy-content="Изберете слика" class="btn btn-primary me-3">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    image
                                                    </span>
                                                Изберете слика
                                            </label>
                                            <input type="file"
                                                   class="form-control d-none w-0 h-0 position-absolute @error('image') is-invalid @enderror"
                                                   id="inputImage" name="image">
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label for="user_id" class="form-label">Улога</label>
                                            <!--select-->
                                            <select name="user_id" id="user_id"
                                                    class="form-control @error('user_id') is-invalid @enderror">
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                                @error('user_id')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" id="profile_save" class="btn btn-primary">
                                        <span class="material-symbols-rounded align-middle me-2">
                                                    save
                                                    </span>Сочувај
                                    </button>
                                    <a href="{{route('products.index')}}" class="btn btn-secondary"
                                       data-tippy-content="Назад кон корисници">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    arrow_back_ios
                                                    </span> Назад</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection




