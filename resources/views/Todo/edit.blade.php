@extends('Todo.layout')

@section('content')
<div class="text-center pt-10">
<h2 class="text-2xl">edit todo list</h2>
   <x-upload/>
     <!-- <form  method="post" action="{{route('Todo.update',$todo->id)}}" class="py-5 "> -->
     <form  method="post" action="{{route('Todo.update',$todo->id)}}" class="py-5 ">
    @csrf
    @method ('patch')
    <div>
    <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border  rounded" placeholder="title"/>
    </div>
    
    <div class="py-1">
    <textarea name="description" class="p-2 rounded border"  placeholder="description" >{{$todo->description}}</textarea>
    </div>
    
    <div class="py-1">
     <input type="submit" value="enter" class="p-2 border rounded" />
    </div >
    </form>
    </div>
     <a href="/Todo" class="mx-5 py-2 py-1 bg-blue-400 cursor-pointer rounded text-white">View Todos</a>
@endsection