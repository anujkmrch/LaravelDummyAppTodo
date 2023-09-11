<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use \App\Models\Todo;

class TodoController extends Controller
{
    public function list(): View {
        // Some Model Operation
        $todos = Todo::all();
        return view('todos/index',
        ['todos'=>$todos]);
    }

    public function single(string $id): View {
        // Some request from Model
        $todo = Todo::findOrFail($id); 

        return view('todos/single',
        ['todo'=>$todo]);
        
    }

    public function create(Request $request): View|RedirectResponse {        
        if ($request->isMethod('post')){
          $data  = $request->only(
              'description', 
              'title'
            );
            return redirect(route('todo_single',['id'=> 1]));
        }
        return view('todos/create');
    }

    public function done(string $id): View|RedirectResponse {
        // Some request from Model
        $todo = Todo::findOrFail($id);
        if (!$todo->finished) {
            $todo->finished = true;
            $todo->save();
        }
        return redirect(route('todo_single',['id'=> $todo->id]));
        
    }
}