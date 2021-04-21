@extends('Todo.layout')
@section('content')
<div class="text-center pt-10 "  >
<div class="flex justify-center  border-b pb-4">
<h1 class="text-2x1">All Todos</h1>
<a href="/Todo/create" class="mx-5 py-2  text-blue-400 cursor-pointer  text-white"><i class="fa fa-plus-circle"></i></a>
</div>
 <x-upload/>
 <ul class="my-5">
 @foreach($todos as $todo)
 <li class="flex justify-between p-2"> 
 
    @include('Todo.buttons')
 
 
 @if($todo->completed)
 <p class="line-through">{{$todo->title}} </p>
 @else 
 <a  class="cursor-pointer" href="{{'/Todo/'.$todo->id.'/show'}}">{{$todo->title}} </a>
 @endif
 <!--.$todo->id. to passed variable through the url   -->
 <div>
 <a href="{{'/Todo/'.$todo->id.'/edit'}}" class=" py-1 px-1 bg-blue-400 cursor-pointer rounded text-white"><i class="fa fa-edit px-2"></i></a>
<span  class="fa fa-trash text-red-300 px-2" onclick="event.preventDefault();
if(confirm('do you really want to delete this todo')){
document.getElementById('form-delete-{{$todo->id}}').submit()
}
"></span>
 <form style="display:none"  id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('Todo.deleteTodo', $todo->id)}}"  >
   @csrf
    @method ('delete')
  </form>
 </div>
 </li>
 @endforeach
 </ul>
 </div>

@endsection