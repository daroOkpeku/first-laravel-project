@extends('Todo.layout')

@section('content')
<div class="text-center pt-10">
<h2 class="text-2xl">todo list</h2>
   <x-upload/>
     <form  method="post" action="/Todo/create" class="py-5 " enctype="multipart/form-data">
    @csrf
    <!-- if you are using all() the input type should me the same with DB column  -->
    <div>
    <input type="text" name="title"  class="py-2 px-2 border  rounded" placeholder="title"/>
    </div>
    
    <div class="py-1">
    <textarea name="description" class="p-2 rounded border" placeholder="description" ></textarea>
    </div>

    <div class="py-2" id="in">
  <div class="flex justify-center   px-4 pb-4">
  <h1 class="text-lg pb-4">Add steps if required</h1>
   <span class="mx-5 py-2  text-blue-400 cursor-pointer  text-white" id="plus"><i class="fa fa-plus-circle"></i></span>
   </div>
 <div class="steve">
    <!-- <textarea name="step" class="p-2 rounded border" placeholder="step" ></textarea> -->
    </div>
    </div>
    
    <div class="py-1">
     <input type="submit" value="enter" class="p-2 border rounded" />
    </div >
    </form>
    
    <a href="{{ route('Todo.index')}}" class="mx-5 py-2 py-1 bg-blue-400 cursor-pointer rounded text-white">View Todos</a>
     
</div>
<script>
 let click = document.getElementById('plus');
 var jack = document.getElementById('in');
 click.addEventListener('click', function(e){
  let item = document.createElement('input');
  // item.classList.add(`col-3`);
  item.setAttribute('rows', '3')
  item.setAttribute('cols', '22')
  item.setAttribute('name', "step")
  item.setAttribute('placeholder', 'step')
    jack.append(item)
      

 })
</script>

@endsection