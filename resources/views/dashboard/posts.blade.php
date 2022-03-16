@extends('layouts.master')

@section('content')
<form action="{{route('post.store')}}" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="title">Título</label>
      <input type="text" class="form-control" name="title" id="title">  
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>

    <div class="form-group">
      <label for="content">Contenido</label>
      <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection