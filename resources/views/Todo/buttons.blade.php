<div>
 @if($todo->completed)
 <span  class="fa fa-check text-green-300 px-2" onclick="event.preventDefault(); document.getElementById('form-incomplete-{{$todo->id}}').submit()"></span>
 <form style="display:none"  id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('Todo.incomplete', $todo->id)}}"  >
   @csrf
    @method ('patch')
  </form>
 @else
  <span class="fa fa-check text-gray-300 cursor-pointer px-2" onclick="event.preventDefault(); document.getElementById('form-complete-{{$todo->id}}').submit()" ></span>
  <form style="display:none"  id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('Todo.complete', $todo->id)}}"  >
   @csrf
    @method ('patch')
  </form>
  @endif
 </div>