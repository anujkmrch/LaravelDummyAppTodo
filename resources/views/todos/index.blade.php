@extends('app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item"><a href="{{route('todo_single',['id'=>$todo->id])}}" class="text-{{$todo->finished ? 'success': 'primary'}}">{{$todo->title}}</a></li>
                @endforeach    
            </ul>
        </div>
    </div>

@endsection