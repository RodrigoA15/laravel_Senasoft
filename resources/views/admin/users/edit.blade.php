@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                 <p class="h5">Nombre</p>
                 <p class="form-control">{{$user->name}}</p>
                 <h2 class="h5">Listado de roles</h2>
    
                 {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null ,['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                 {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
