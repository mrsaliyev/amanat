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
        <h1>Категории</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Название
                </th>
                <th>
                    Действия
                </th>
            </tr>
           
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="" method="POST">
                                <a class="btn btn-success" type="button" href="">Show</a>
                                <a class="btn btn-warning" type="button" href="">Manage</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete"></form>
                        </div>
                    </td>
                </tr>
        
            </tbody>
        </table>
     
        <a class="btn btn-success" type="button"
           href="{{ route('categories.create') }}">Добавить категорию</a>
    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
