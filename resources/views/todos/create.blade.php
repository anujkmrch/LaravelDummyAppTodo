@extends('app')
@section('title')
    Create Todo Item
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-12 align-self-center">
                <form action="{{route('todo_done',['id'=>$todo->id])}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Todo title</label>
                    <input type="text" class="form-control" id="title" placeholder="Todo Title" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Todo description (optional)</label>
                    <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Mark as done" />
                </form>
        </div>
    </div>

@endsection