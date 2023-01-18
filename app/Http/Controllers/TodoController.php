<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
//        if (!Auth::check())
//        {
//            return redirect('/login');
//        }

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
