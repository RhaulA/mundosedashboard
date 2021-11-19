@extends('base')
@section('title') Inicio @endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">About</h1>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    <table>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">email</th>
            <th scope="col">telefono</th>
            <th scope="col">acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Abouts as $about)
          <tr>
            <th scope="row">{{$abouts->id}}</th>
            <td>{{$abouts->name}}</td>
            <td>{{$abouts->email}}</td>
            <td>{{$abouts->phone}}</td>
            <td>test</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
