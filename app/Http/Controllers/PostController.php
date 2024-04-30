<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    private $posts = [
        ['id'=>1, 'Title'=>'post title1', 'PostedBy'=> 'moAyman' , 'CreatedAt'=>'02-05-2023', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com'],
        ['id'=>2, 'Title'=>'post title2', 'PostedBy'=> 'Mostafa' , 'CreatedAt'=>'02-06-2024', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com'],
        ['id'=>3, 'Title'=>'post title3', 'PostedBy'=> 'Khaled' , 'CreatedAt'=>'02-07-2024', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com'],
        ['id'=>4, 'Title'=>'post title4', 'PostedBy'=> 'Omar' , 'CreatedAt'=>'02-08-2024', 'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae maiores, corrupti, voluptates molestias eveniet esse repudiandae reprehenderit et tenetur fuga illum quos pariatur modi, eos tempora dignissimos totam dolore?','email'=>'mo@gmail.com']
    ];

     function index () {    
    return view('home', ["posts"=>$this->posts]);
}

function show ($id){
    if($id < count($this->posts)){
        $post= $this->posts[$id-1];
        return view('show',["post"=>$post]);
    }
    return abort(404);
}
function create (){
        return view('create');
}
function edit ($id){
    $post = $this->posts[$id - 1];
    return view('edit',["post"=>$post]);
}

function delete ($id){
unset($this->posts[$id]);
    return view('home', ["posts"=>$this->posts]);
}

}
