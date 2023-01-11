<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('home', [
            'tasks' => Todo::all()
        ]);
    }

    public function store(Request $request)
    {
        $task = Todo::create([
            'title' => $request->input('title'),
            'completed' => false
        ]);

        return redirect('/');
    }

    public function destroy(Todo $task) {
        $task->delete();
        return redirect('/');
    }

    public function complete(Todo $task) {
        $task->update([
            'completed' => !$task->completed
        ]);
        return redirect('/');
    }
}
