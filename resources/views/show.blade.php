@extends('layouts.app')

@section('title', $task->title)

@section('content')

<div class="mb-4">
    <a class=""
    href="{{ route('tasks.index') }}">← Go back to the main page</a>
</div>


<p class="mb-4 text-slate-700">{{$task->description}}</p>

@if($task->long_description)
    <p class="mb-4 text-slate-700">{{$task->long_description}}
@endif

<p class="mb-4 text-sm text-slate-500">Created {{$task->created_at->diffFOrHumans()}} • Updated {{$task->updated_at->diffFOrHumans()}}</p>

<p class="mb-4">
    @if ($task->isChecked)
        <span class="font-medium text-green-500">Completed</span>
    @else
        <span class="font-medium text-red-500">Not completed</span>
    @endif
</p>

<div class="flex gap-2">
    <a class="btn" href=" {{ route('tasks.edit', ['task' => $task]) }}">Edit</a>

    <form action="{{ route('tasks.toggleComplete', ['task'=>$task]) }}" method="POST">
        @csrf
        @method('PUT')

        <button class="btn" type="submit">
            Mark as {{ $task->isChecked ? 'not completed' : 'completed'}}
        </button>

    </form>

    <form action="{{ route('tasks.destroy', ['task'=>$task]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn" type="submit">Delete</button>
    </form>
</div>
@endsection

