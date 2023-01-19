<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<title>To-Do List</title>

<div class="header">
    @if (Auth::check())
        <div class="welcome-message auth-margin-right">Welcome, {{auth()->user()->name}}</div>
        <div class="auth-container">
            <a href="/logout" class="auth-link">Logout</a>
        </div>
    @else
        <div class="auth-container auth-margin-right">
            <a href="/register" class="auth-link">Register</a>
        </div>
        <div class="auth-container">
            <a href="/login" class="auth-link">Login</a>
        </div>
    @endif
</div>
<h1 class="display-4">To-Do List</h1>
<div class="tablet">
    <div id="newtask">
        <form method="POST" action="/create">
            @csrf
            <label for="title">
                <input type="text" placeholder="Add Tasks" name="title" required>
            </label>
            <button id="push" type="submit">Add</button>
        </form>
    </div>
    <div id="tasks">
        @foreach ($tasks as $task)
            <div class={{ $task->completed ? 'task-active' : 'task' }}>
                <div class="row justify-content-between">
                    <div class="col-4"><span id="taskname">{{ $task->title }}
                    </span></div>
                    <div class="col-3">
                        <form method="POST" action="/completed/{{ $task->id }}">
                            @csrf
                            @method("PUT")
                            <button type="submit" class="btn btn-primary" id="toggle-button">
                                <img src="{{ asset('images/checkmark.png') }}" alt="Button" width="20">
                            </button>
                        </form>
                        <form method="POST" action="/delete/{{ $task->id }}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">
                                <img src="{{ asset('images/delete_icon.png') }}" alt="Button" width="20">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        {{ $tasks->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
