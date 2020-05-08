@extends('layouts.app')


@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="/product">Product</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/category">Category</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
    </li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Category Table</div>
                <div class="card-body">

                    <div class="col-md-12">
                        
                        <h1>Create Category</h1>
                               <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('store') }}">
                                    <div>
                                         @csrf
                                        <div class="input-group row">
                                            <label for="code" class="col-sm-2 col-form-label">Код: </label>
                                            <div class="col-sm-6">
                                                @error('code')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="text" class="form-control" name="code" id="code"
                                                       value="">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="input-group row">
                                            <label for="name" class="col-sm-2 col-form-label">Название: </label>
                                            <div class="col-sm-6">
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="text" class="form-control" name="name" id="name"
                                                       value="">
                                            </div>
                                        </div>

                                            <br>
                                            <div class="input-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Название en: </label>
                                                <div class="col-sm-6">
                                                    @error('name_en')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" class="form-control" name="name_en" id="name_en"
                                                           value="">
                                                </div>
                                            </div>

                                            <br>
                                        <div class="input-group row">
                                            <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                                            <div class="col-sm-6">
                                                @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            <textarea name="description" id="description" cols="72"
                                                      rows="7"></textarea>
                                            </div>
                                        </div>
                                        <br>

                                            <div class="input-group row">
                                                <label for="description" class="col-sm-2 col-form-label">Описание en: </label>
                                                <div class="col-sm-6">
                                                    @error('description_en')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <textarea name="description_en" id="description_en" cols="72"
                                                              rows="7"></textarea>
                                                </div>
                                            </div>
                                            <br>

                                        <div class="input-group row">
                                            <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                                            <div class="col-sm-10">
                                                <label class="btn btn-default btn-file">
                                                    Загрузить <input type="file" style="display: none;" name="image" id="image">
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-success">Сохранить</button>
                                    </div>
                                </form>
                    </div>
                   




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
