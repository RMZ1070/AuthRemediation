@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">Roles :</div>

                <div class="card-body">
                <form action="/role-store" method="post">      
                        @csrf               
                        <form>   
                            <div class="form-group">
                              <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value=''>
                            </div>
                            <button type="submit" class="btn btn-success">Créer</button>
                          </form>
                    </form>
                </div>
            </div> 
        </div>          
    </div>
</div>
@endsection