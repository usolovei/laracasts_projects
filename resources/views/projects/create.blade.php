@extends('layout')

@section('content')

    <p>
        <a href="/projects">List all projects</a>
    </p>
    <h1 style="margin: 20px 0; font-size: 20px"> Create a New Project</h1>

    <form method="POST" action="/projects" style="margin-bottom: 1em;">

        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" ">
            </div>
        </div>


        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="textarea"></textarea>
            </div>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>

@endsection
