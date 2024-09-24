<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller{

    function index(){
        return view("comments/index")
        ->with("comments" , session("comments"));
    }

    function create(){
        return view("comments/create");
    }

    function store(Request $request){
        session()->push('comments', $request->comment);
        return redirect("/comments");
    }

    function show(string $id){
        return view("comments/show")
        ->with("comment", session("comments")[$id]);
    }
    function edit($id){
        return view("comments/edit")->with("comment", session("comments")[$id])
        ->with('id', $id);
    }

    function update(Request $request, string $id){
        $commentsTMP = session('comments');
        $commentsTMP[$id] = $request->comment;
        session()->put('comments' , $commentsTMP);
        return redirect("/comments"); 
    }

    function destroy($id){
        $commentsTMP = session('comments');
        array_splice($commentsTMP, $id, 1);
        session()->put('comments', $commentsTMP);
        return redirect('/comments');
    }
}

