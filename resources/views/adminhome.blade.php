@extends('layouts.app')


@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="/posts">Product</a>
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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                        <p>You're logged as ADMIN</p>                           
                    </div>
                    <h2 align="center">User table</h2>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th width="5">#</th>
                                <th>Member Name</th>
                                <th>e-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>                                
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
