@extends("layout.layout")

@section("content")
<div class="card w-75 m-5" style="width: 18rem;">
<div class="card-body p-0">
    <p class="card-title border-bottom bg-info p-2">Post Info</p>
    <h5 class="card-title p-2">Title: {{$post['title']}}</h5>
    <h5 class="card-title p-2">Description:   {{$post['desc']}}</h5>
  </div>

</div>

<div class="card w-75 m-5" style="width: 18rem;">
<img style="width:100%" src="{{ asset('images/posts/'.$post->image) }}" class="img-fluid" alt="..."><div class="card-body p-0">
    <p class="card-title border-bottom bg-info p-2">Post Creator Info</p>
    <h5 class="card-title p-2">Name: {{$post['PostedBy']}}</h5>
    <h5 class="card-title p-2">Email:   {{$post['email']}}</h5>
    <h5 class="card-title p-2">Created At:   {{$post['CreatedAt']}}</h5>
<!-- storage/app/public/images/1714645962.Screenshot from 2024-04-23 20-20-07.png -->
  </div>

</div>
@endsection
