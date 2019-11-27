@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <div class="px-64">
        <h1 class="font-bold text-3xl">Edit Task</h1>
        <form method="POST" action="/tasks/{{ $task->id }}">
            @method('PUT')
			@csrf     
            <label class="block" for="title">Title</label>
            <input class="border border-gray-800 w-full @error('title') border border-red-700 @enderror" type="text" name="title" id="title" value="{{ old('title') ? old('title') : $task->title }}">
            @error('title')
            <small class="text-red-700">{{ $message }}</small>
            @enderror
            
            <label class="block" for="body">Body</label>
            <textarea class="border border-gray-800 w-full @error('body') border border-red-700 @enderror" name="body" id="body" cols="30" rows="10">{{ old('body') ? old('body') : $task->body }}</textarea>
            @error('body')
            <small class="text-red-700">{{ $message }}</small>
            @enderror
            <button type="submit" class="block bg-blue-600 text-white px-4 py-2 float-right">Submit</button>
        </form>
    </div>
@endsection