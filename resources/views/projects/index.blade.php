
@extends('layout')

@section('content')

    <p style="margin-top: 20px">
        <a href="/projects/create" class="button is-link">Create project</a>
    </p>
    <h1 style="margin: 20px 0; font-size: 20px">All Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </li>
        @endforeach
    </ul>

@endsection
