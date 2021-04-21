
    
   
    
@extends('Todo.layout')

@section('content')
<div class="text-center pt-10">
<h2 class="text-2xl">{{$todo->title}}</h2>
   <div>{{$todo->description}}</div>
</div>
@if($todo->steps->count() > 0)
<div>
@foreach($todo->steps as $step)
<p>{{$step->step}}</p>
@endforeach
</div>
@endif
<div class="p-4">
<a href="{{route('Todo.index')}}" class=" py-2 py-1 bg-blue-400 cursor-pointer rounded text-white"> <button type="button">Todos</button></a>
</div>
@endsection


