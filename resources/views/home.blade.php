@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card-header">{{ __('Dashboard') }}</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->
              <div class="card-body">
               
                    You are logged in!
                </div>
            <div class="card-body">
        <!--<x-upload/>  for component linking like react -->
          <x-upload/>
               <form action="/upload" method="post" enctype="multipart/form-data">
               @csrf
                <input type="file" name="pic"/>
                <button type="Sumbit">upload</button>
               </form>
               
            </div>
        <a href="{{route('Todo.index')}}"><button type="button">create Todo</button></a>
    </div>
   
</div>
@endsection
