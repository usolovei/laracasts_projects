@extends('layout')

@section('content')

    <p>
        <a href="/projects">List all projects</a>
    </p>
    <h1 style="margin: 20px 0; font-size: 20px"> Create a New Project</h1>

    <form method="POST" action="/projects" style="margin-bottom: 1em;" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" v-model="form.title">
            </div>

            <span class="help is-danger" v-if="form.errors.has('title')" v-text="form.errors.get('title')"></span>
        </div>


        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="textarea" v-model="form.description"></textarea>
            </div>

            <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link" :disabled="form.errors.any()">Create Project</button>
            </div>
        </div>
    </form>

@endsection
