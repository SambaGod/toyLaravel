<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TodoController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $grabTodos = Todo::latest()->with(['user'])->where('user_id', $userId);
        $todos = $grabTodos->paginate(5);
        $count = $grabTodos->count();
        return view('todos', [
            'grabTodos' => $grabTodos,
            'todos' => $todos, 
            'count' => $count,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->heading = $request->input('addTodo');
        $todo->content = 'Lorem Ipsum Dolor Sit Amet';
        $todo->slug = Str::slug($request->input('addTodo'), '-');
        $todo->isCompleted = 0;
        $todo->user_id = Auth::user()->id;
        $todo->save();
        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todo-item', ['todo' => $todo]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back();
    }
}
