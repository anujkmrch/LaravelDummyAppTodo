@extends('app')
@section('title')
    My Todo App
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-12 align-self-center">
            @if($todo->finished)
                <span class="badge bg-primary">Finished</span>
            @else
                <form action="{{route('todo_done',['id'=>$todo->id])}}" method="POST">
                @csrf
                <input type="submit" class="btn btn-primary" value="Mark as done" />
                </form>
            @endif
            <hr />
            <h2>{{$todo->title}}</h2>
            <p>{{$todo->description}}</p>
        </div>
    </div>

@endsection