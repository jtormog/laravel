<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller{
    
    public $comments = [];

    function index(){
        $list = "<ul>";
        $id = 0;
        foreach(session('comments') as $comment){
            $list = $list."<li><a href='/comments/$id'>".$comment."</a>";
            $id++;
        }
        $list = $list."</ul>";
        return $list;
    }

    function create(){
        return view("comments/create");
    }

    function store(Request $request){
        session()->push('comments', $request->comment);
        return session('comments');
    }

    function show(string $id){
        return session('comments')[$id];
    }
    function edit($id){

        return $id=="hola" ? "A ti lo que te pasa es que eres gilipollas" 
        : "<form method=POST action=/comments/$id>
        <input type='hidden' name=_method value='PATCH'>
        <input value='".$this->comments[$id]."' name='comment'>
        <input type=SUBMIT>
        </form>";
    }

    function update(Request $request, string $id){
        $this->comments[$id] = $request->comment;
        session()->put('comments', $this->comments);
        return session('comments');
    }

    function destroy($id){
        array_splice($this->comments, $id, 1);
        session()->put('comments', $this->comments);
        return session('comments');
    }

}