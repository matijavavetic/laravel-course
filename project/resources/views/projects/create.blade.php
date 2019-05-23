@extends('layout')

@section('content')

    <h1>Create Projects</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Project title" >
        </div>

        <div>
            <textarea name="description" placeholder="Project description" class="textarea {{$errors->has('title') ? 'is-danger' : '' }}" ></textarea>
        </div>

        <div>
            <button type="submit">Create project</button>
        </div>

    @include('errors')
    </form>

@endsection
