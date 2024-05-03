
@extends('home')
@section('content')
<div class="d-flex justify-content-center ">
<form class="mt-5 w-75" method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
@csrf
  <div class="form-group mb-5">
    <label for="title" class="mb-3">Title</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" >
  </div>
   <div class="form-group mb-5">
    <label for="image" class="mb-3">Title</label>
    <input type="file" name="image" class="form-control" id="title" aria-describedby="emailHelp" placeholder="image" >
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"name="desc"></textarea>
  <label for="floatingTextarea2">Description</label>
</div>
  <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>
</div>
@endsection('content')
