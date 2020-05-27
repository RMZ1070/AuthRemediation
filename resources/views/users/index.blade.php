@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users <a href="/user-create" class="btn btn-success ">New</a></div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($users as $item) 
                    <li class="list-group-item">
                        {{$item->name}}
                        <a href="/user-edit/{{$item->id}}" class=" btn btn-warning">Edit</a>
                        <form action="/user-delete/{{$item->id}}" method="post" class="d-inline">
                            @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </li>  
                        @endforeach
                    </ul>                   
                </div>
            </div>
            <div class="card">
                <div class="card-header">Users random</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($user as $item) 
                    <li class="list-group-item">
                        {{$item->name}}
                        <a href="/user-edit/{{$item->id}}" class=" btn btn-warning">Edit</a>
                        <form action="/user-delete/{{$item->id}}" method="post" class="d-inline">
                            @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </li>  
                        @endforeach
                    </ul>                   
                </div>
            </div>
            <div class="card">
                <div class="card-header"> latest Users </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($use as $item) 
                    <li class="list-group-item">
                        {{$item->name}}
                        <a href="/user-edit/{{$item->id}}" class=" btn btn-warning">Edit</a>
                        <form action="/user-delete/{{$item->id}}" method="post" class="d-inline">
                            @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </li>  
                        @endforeach
                    </ul>                   
                </div>
            </div>

        </div>
    </div>
</div>
@endsection