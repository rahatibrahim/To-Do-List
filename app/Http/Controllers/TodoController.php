<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        if (!Auth::check())
        {
            return view('home', [
                'tasks' => []
            ]);
        }

        $pendingTasks = Todo::where('user_id', Auth::user()->id)->where('completed', 0)->get();
        $completedTasks = Todo::where('user_id', Auth::user()->id)->where('completed', 1)->get();
        $tasks = $pendingTasks->concat($completedTasks)->sortBy('completed');

        return view('home')->with([
            'tasks' => $tasks
        ]);
    }

    public function store(Request $request)
    {
        Todo::create([
            'user_id' => Auth::user()->id,
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
