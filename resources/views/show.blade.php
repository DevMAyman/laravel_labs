@extends("layout.layout")

@section("content")
<div class="card w-75 m-5" style="width: 18rem;">
<div class="card-body p-0">
    <p class="card-title border-bottom bg-info p-2">Post Info</p>
    <h5 class="card-title p-2">Title: {{$post['Title']}}</h5>
    <h5 class="card-title p-2">Posted by:   {{$post['desc']}}</h5>
  </div>

</div>

<div class="card w-75 m-5" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
<div class="card-body p-0">
    <p class="card-title border-bottom bg-info p-2">Post Creator Info</p>
    <h5 class="card-title p-2">Name: {{$post['PostedBy']}}</h5>
    <h5 class="card-title p-2">Email:   {{$post['email']}}</h5>
    <h5 class="card-title p-2">Created At:   {{$post['CreatedAt']}}</h5>

  </div>

</div>
@endsection
