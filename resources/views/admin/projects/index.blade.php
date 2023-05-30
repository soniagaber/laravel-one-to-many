@extends('layouts/admin')

@section('content')

<table class="mt-5 table table-striped mb-3">
    <thead>
        <th>Titolo</th>
        <th>Descrizione</th>
        <th>Link alla Repository</th>
        <th>Slug</th>
        <th>Linguaggio di Programmazione</th>
        <th>Data di Creazione</th>
        <th>Comando</th>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->github_link}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->language}}</td>
                <td>{{$project->creation_date}}</td>
                <td><a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-around">
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Aggiungi un Progetto</a>
</div>
@endsection