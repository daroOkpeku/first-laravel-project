<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class TodoController extends Controller
{
  /**to only allow authenticated users to use the todo list */
  public function __construct()
  {
    $this->middleware('auth');
  }

   public function index(Todo $todo)
    {
      /**to get the auth users todo also sortBy can */
     $todos = auth()->user()->todos()->orderBy('completed')->get();
      // $todos = Todo::all();
      /** orderBy('completed')->get(); the completed from the DB to be arranged accorrding to ASC or DSC order */
      // $todos = $todo::orderBy('completed')->get();
        // return view('Todo.index')->with(['todos'=> $todo]);
         return view('Todo.index', compact('todos'));
    }
    public function complete(Todo $todo)
    {
      $todo->update(['completed'=>true]);
      return Redirect()->back()->with('message', 'successfully completed');
    }
    /**incomplete */ 

    public function incomplete(Todo $todo)
    {
      $todo->update(['completed'=>false]);
      return Redirect()->back()->with('message', 'successfully removed');
    }

     public function deleteTodo(Todo $todo)
    {
      //$todo->steps->each->delete(); to delete the item in DB  table connected to each other
      $todo->steps->each->delete();
      $todo->delete();
      return Redirect()->back()->with('message', 'successfully deleted');
    }
    public function create ()
    {
        return view('Todo.create');
    }

     public function edit ( Todo $todo)
    {
      // $todo = Todo::find($id);
        return view('Todo.edit', compact('todo'));
    }

     public function update (TodoCreateRequest $request, Todo $todo)
    {
         $todo->update($request->all());
         return Redirect(route('Todo.index'))->with('message', 'updated !!!');
    }

    public function show (Todo $todo)
    {
      // count method it is used to count the number of array in the DB
      // return $todo->steps->count();
     return view ('Todo.show', compact('todo'));
    }
     public function store ( TodoCreateRequest $request)
    {
      
    //     $rules = [
    //        'title' => 'required|max:255',
    //     ];

    //     $message = [
    //        'title.max' => 'your text is greater than 255 character',
    //     ];
    //   $validator = Validator::make($request->all(), $rules,  $message);
      
        

    //       if ($validator->fails()) {
    //         return redirect()->back()
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     }

    //  $request->validate([
    //    'title' => 'required|max:255',
    //  ]);
      /** this is to insert data into the DB through the component folder Todo    */
      // Todo::create($request->all());
      
    //  auth()->user()->$todo::create($request->all());
            // dd($request->all());
     $create = auth()->user()->todos()->create($request->all());
     $create->steps()->create($request->all());
      return Redirect()->back()->with('message', 'Todo inserted successfully');
        // dd($request->all());
    }

}
