<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;

class WebController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', compact('todos'));
    }

    public function create(TodoRequest $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->content = $request->content;
        $todo->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('edit', compact('todo'));
    }

    public function update(TodoRequest $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->content = $request->content;
        if($request->is_done !== null) {
            $todo->is_done = $request->is_done;
        }
        $todo->save();

        return redirect()->route('index');
    }

    public function delete(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->route('index');
    }
}
