@extends('layout')

@section('content')

    <p>
        <a href="/projects">List all projects</a>
    </p>
    <h1 style="margin: 20px 0; font-size: 20px"> Create a New Project</h1>

    <form method="POST" action="/projects" style="margin-bottom: 1em;" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">

        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" v-model="name">
            </div>

            <span class="help is-danger" v-if="errors.has('title')" v-text="errors.get('title')"></span>
        </div>


        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="textarea" v-model="description"></textarea>
            </div>

            <span class="help is-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link" :disabled="errors.any()">Create Project</button>
            </div>
        </div>
    </form>

@endsection
