@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-dark table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($users as $user)
         <tr>
            <th scope="row">1</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
          </tr>
         @endforeach
         
        </tbody>
      </table>
</div>
@endsection