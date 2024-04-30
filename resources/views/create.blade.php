
@extends('layout.layout')
@section('content')
<div class="d-flex justify-content-center ">
<form class="mt-5 w-75">
  <div class="form-group mb-5">
    <label for="title" class="mb-3">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" >
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Description</label>
</div>
  <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>
</div>


@endsection('content')
