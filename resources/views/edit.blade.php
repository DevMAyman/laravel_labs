@extends('home')
@section('content')
<div class="d-flex justify-content-center">
    <form class="mt-5 w-75" method="post" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('put')
        <div class="form-group mb-5">
            <label for="title" class="mb-3">Title</label>
            <!-- Add name attribute to input field -->
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Title" value="{{ $post->title }}">
        </div>
        <div class="form-floating">
            <!-- Add name attribute to textarea field -->
            <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $post->desc }}</textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <div class="form-group mb-5">
    <label for="user" class="mb-3">User</label>
    <select class="form-select" name="user" id="user" value="{{$user['name']}}">
        @foreach ($users as $user )
          <option value="{{$user['id']}}">{{$user['name']}}</option>
        @endforeach
    </select>
  </div>
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>
</div>
@endsection('content')
