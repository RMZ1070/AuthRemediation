@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Roles <a href="/role-create" class="btn btn-success ">New</a></div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($roles as $role)
                    <li class="list-group-item">
                        {{$role->name}} 
                        <a href="/role-edit/{{$role->id}}" class=" btn btn-warning">Edit</a>
                        <form action="/role-delete/{{$role->id}}" method="post" class="d-inline">
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