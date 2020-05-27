@extends('layouts/app')

@section('content')   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profil</div>

                <div class="card-body">
                    <p>
                        {{Auth::user()->name}}
                    </p>
                    <p>        
                        {{Auth::user()->email}}     
                    </p>
                    <a href="/profil-edit" class="btn btn-warning">Edit</a>
                </div>
            </div>            

        </div>
    </div>
</div>     
@endsection