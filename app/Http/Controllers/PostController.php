<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    
    private $posts = [
        ['id'=>1, 'Title'=>'post title1', 'PostedBy'=> 'moAyman' , 'CreatedAt'=>'02-05-2023', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com'],
        ['id'=>2, 'Title'=>'post title2', 'PostedBy'=> 'Mostafa' , 'CreatedAt'=>'02-06-2024', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com'],
        ['id'=>3, 'Title'=>'post title3', 'PostedBy'=> 'Khaled' , 'CreatedAt'=>'02-07-2024', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com'],
        ['id'=>4, 'Title'=>'post title4', 'PostedBy'=> 'Omar' , 'CreatedAt'=>'02-08-2024', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com']
    ];

     function index () {  
        $myposts= Post::all();
        $users=User::all();
    return view('home', ["posts"=>$myposts,"users"=>$users]);
}

function show ($id){
    $mypost= Post::findOrFail($id);
    return view('show',["post"=>$mypost]);    
}
function create (){
        return view('create');
}

private function file_operations($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filepath = $image->store("images", "posts_uploads");
            return $filepath;
        }
        return null;
    }

    function store(Request $request)
    {
        $filepath = $this->file_operations($request);
        $post = new Post();
        $post->title = $request->input('title');
        $post->desc = $request->input('desc');
        $post->image = $filepath; 
        $post->save();

        return redirect()->route('post.show', $post->id)->with('success', 'Post created successfully.');
    }

function edit ($id){
        $mypost= Post::findOrFail($id);
    return view('edit',["post"=>$mypost]);
}

public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request['title'];
        $post->desc = $request['desc'];

        $post->save();

        return redirect()->route('post.show', ['id' => $post->id])->with('success', 'Post updated successfully.');
    }



function delete ($id){
    $mypost = Post::findOrFail($id);
    $mypost->delete();
    
    return redirect()->back()->with('success', 'Post deleted successfully.');
}




}
