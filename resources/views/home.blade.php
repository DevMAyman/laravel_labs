@extends('layout.layout')
@section('content')
<!DOCTYPE html>

    <section class="container d-flex justify-content-center mt-5 flex-column align-items-center gap-5">
        <a class="btn btn-success w-25" href="{{route('posts.create')}}">Create Post</a>
        <table class="table">
          <thead>
            <tr class="row">
              <th scope="col" class="col-md-1 d-flex justify-content-center">Number</th>
              <th scope="col" class="col-md-2 d-flex justify-content-center">Title</th>
              <th scope="col" class="col-md-2 d-flex justify-content-center">Posted By</th>
              <th scope="col" class="col-md-2 d-flex justify-content-center">Created At</th>
              <th scope="col" class="col-md-4 d-flex justify-content-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr class="d-flex">
              <th scope="row" class="d-flex justify-content-center col-md-1">{{ $post['id'] }}</th>
              <td class="d-flex justify-content-center col-md-2">{{ $post['Title'] }}</td>
              <td class="d-flex justify-content-center col-md-2">{{ $post['PostedBy'] }}</td>
              <td class="d-flex justify-content-center col-md-2">{{ $post['CreatedAt'] }}</td>
              <td class="d-flex justify-content-center col-md-4 gap-2">
                <a class="btn btn-success" href="{{route('post.show',$post['id'])}}">View</a>
                <a class="btn btn-info" href="{{route('post.edit',$post['id'])}}"  >Edit</a>
<form action="{{ route('post.delete', $post['id']) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>            
  </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </section>

    @endsection('content')


